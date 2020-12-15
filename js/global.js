$(function () {
  // 経過日数グラフ
  var start = new Date(2020, 1 - 1, 1), //開始日2020-01-01
    now = new Date(),
    finish = new Date(2021, 1 - 1, 1), //終了予定日2021-01-01
    term = finish.getTime() - start.getTime(), //期間
    term = Math.floor(term / (1000 * 60 * 60 * 24) + 1),
    days = now.getTime() - start.getTime(), //経過日数
    days = Math.floor(days / (1000 * 60 * 60 * 24) + 1);
  var y = start.getFullYear(),
    m = ('0' + (start.getMonth() + 1)).slice(-2),
    d = ('0' + start.getDate()).slice(-2),
    start = y + '-' + m + '-' + d;
  var y = finish.getFullYear(),
    m = ('0' + (finish.getMonth() + 1)).slice(-2),
    d = ('0' + finish.getDate()).slice(-2),
    finish = y + '-' + m + '-' + d;
  var y = now.getFullYear(),
    m = ('0' + (now.getMonth() + 1)).slice(-2),
    d = ('0' + now.getDate()).slice(-2);
  now = y + '-' + m + '-' + d;
  var $time = $('.time');
  // htmlにテキスト追加
  $time.find('#val_days').text(days); //経過日数
  $time.find('#val_term').text(term); //期間
  $time.find('#val_start').text(start); //開始
  $time.find('#val_finish').text(finish); //終了予定
  $time.find('#val_now').text(now); //今日の日付
  // inputのmax上書き
  $time.find('#slider_days').attr('max', term); //期間
  var $sliderBox = $('.sliderBox');
  //inputを操作した時
  //イベントタイプ'input'だとIEで動かないので別のやり方
  //しかしそれだとchromeがリアルタイムで動かないのでIEの場合のみにするため条件分岐
  //IE以外での挙動
  $sliderBox.on('input', function () {
    $time.find('#slider_days').val(days); //経過日数をvalueに入れる
  });
  //IE 11のときの挙動
  const ua = navigator.userAgent;
  if (ua.indexOf('Trident') !== -1) {
    $sliderBox.change(function () {
      $time.find('#slider_days').val(days); //経過日数をvalueに入れる
    });
  }
  // inputイベント強制的に発動
  //何故かこれだけでIEにも効いてる
  $sliderBox.trigger('input');

  //点数1
  //関数を用意
  function scoreSliderChange_A(scoreBox) {
    //「現在のレベル」の位置を設定
    percent = (score - min) / (max - min) * 100;
    scoreBox.find('.scoreBox_score_insert').css({
      'left': percent + '%'
    });
    //テキスト書き換え
    //最小値最大値は疑似要素で表示するので使わない?
    scoreBox.find('.js-score_min').text(min);
    scoreBox.find('.js-score_max').text(max);
    scoreBox.find('.js-score_score').text(score);
    //最小値、最大値、スコアを変更
    scoreBox.find('input').attr('min', min);
    scoreBox.find('input').attr('max', max);
    scoreBox.find('input').val(score);
    //スライダーを変更した時の処理
    scoreBox.on('input', function () {
      //スコアを取得
      var score = scoreBox.find('input').val();
      //スコアのテキストを書き換え
      scoreBox.find('.js-score_score').text(score);
      //「現在のレベル」の位置を再設定
      //最小値、最大値取得(外で取得すると一番最後のscoreBoxの値を取得してしまう)
      var min = scoreBox.find('input').attr('min');
      var max = scoreBox.find('input').attr('max');
      percent = (score - min) / (max - min) * 100;
      scoreBox.find('.scoreBox_score_insert').css({
        'left': percent + '%'
      });
    });
    //IE 11のときの挙動
    const ua = navigator.userAgent;
    if (ua.indexOf('Trident') !== -1) {
      scoreBox.change(function () {
        var score = scoreBox.find('input').val();
        scoreBox.find('.js-score_score').text(score);
        var min = scoreBox.find('input').attr('min');
        var max = scoreBox.find('input').attr('max');
        percent = (score - min) / (max - min) * 100;
        scoreBox.find('.scoreBox_score_insert').css({
          'left': percent + '%'
        });
      });
    }
    //プラスをクリックした時
    scoreBox.find('.js-plus').on('click', function () {
      //最小値、最大値取得(外で取得すると一番最後の値を取得してしまう)
      var min = scoreBox.find('input').attr('min');
      var max = scoreBox.find('input').attr('max');
      //スコアを取得
      var score = scoreBox.find('input').val();
      //スコアを数列へ変換(+以外の算術演算子を使うと自動で数列になるのでマイナスの時は不要)
      var score = parseInt(score);
      var score_plus = score + 1;
      //スコア+1が最小値以上、最大値以下のとき
      if (score_plus >= min && score_plus <= max) {
        //スコアのテキスト書き換え
        scoreBox.find('.js-score_score').text(score_plus);
        //スコアの値を変更
        scoreBox.find('input').val(score_plus);
        //「現在のレベル」の位置を再設定
        percent = (score_plus - min) / (max - min) * 100;
        scoreBox.find('.scoreBox_score_insert').css({
          'left': percent + '%'
        });
      }
    });
    //マイナスをクリックした時
    scoreBox.find('.js-minus').on('click', function () {
      //最小値、最大値取得(外で取得すると一番最後の値を取得してしまう)
      var min = scoreBox.find('input').attr('min');
      var max = scoreBox.find('input').attr('max');
      //スコアを取得
      var score = scoreBox.find('input').val();
      var score_minus = score - 1;
      //スコア-1が最小値以上、最大値以下のとき
      if (score_minus >= min && score_minus <= max) {
        //スコアのテキスト書き換え
        scoreBox.find('.js-score_score').text(score_minus);
        //スコアの値を変更
        scoreBox.find('input').val(score_minus);
        //「現在のレベル」の位置を再設定
        percent = (score_minus - min) / (max - min) * 100;
        scoreBox.find('.scoreBox_score_insert').css({
          'left': percent + '%'
        });
      }
    });
  }
  $('.js-scoreBox-a').each(function () {
    var $this = $(this);
    min = 0,
      max = 100,
      score = 23;
    scoreSliderChange_A($this);
  });

  $('.js-scoreBox-b').each(function () {
    var $this = $(this);
    min = 0,
      max = 100,
      score = 40;
    scoreSliderChange_A($this);
  });

  $('.js-scoreBox-c').each(function () {
    var $this = $(this);
    min = 20,
      max = 80,
      score = 59;
    scoreSliderChange_A($this);
  });
  //点数2
  //関数を用意
  function scoreSliderChange(scoreBox) {
    //「現在のレベル」の位置を設定
    percent = (score - min) / (max - min) * 100;
    scoreBox.find('.rangeBox').find('.rangeContainer_box_label').css({
      'left': percent + '%'
    });
    ///////////////////////////////////////////////////////
    //テキスト書き換え
    //最小値最大値を疑似要素で表示するなら必要ない
    scoreBox.find('.js-score_min').text(min);
    scoreBox.find('.js-score_max').text(max);
    scoreBox.find('.js-score_score').text(score);
    //最小値、最大値、スコアを変更
    scoreBox.find('input').attr('min', min);
    scoreBox.find('input').attr('max', max);
    scoreBox.find('input').val(score);
    ///////////////////////////////////////////////////////
    //スライダーを変更した時
    scoreBox.on('input', function () {
      //スコアを取得
      var score = scoreBox.find('.rangeBox').find('input').val();
      //スコアのテキストを書き換え
      scoreBox.find('.js-score_score').text(score);
      //「現在のレベル」の位置を再設定
      //最小値、最大値取得(外で取得すると一番最後のscoreBoxの値を取得してしまう)
      var min = scoreBox.find('.rangeBox').find('input').attr('min');
      var max = scoreBox.find('.rangeBox').find('input').attr('max');
      percent = (score - min) / (max - min) * 100;
      scoreBox.find('.rangeBox').find('.rangeContainer_box_label').css({
        'left': percent + '%'
      });
    });
    //IE 11でスライダーを変更した時の挙動(中身は同じ)
    const ua = navigator.userAgent;
    if (ua.indexOf('Trident') !== -1) {
      scoreBox.change(function () {
        var score = scoreBox.find('.rangeBox').find('input').val();
        scoreBox.find('.js-score_score').text(score);
        var min = scoreBox.find('.rangeBox').find('input').attr('min');
        var max = scoreBox.find('.rangeBox').find('input').attr('max');
        percent = (score - min) / (max - min) * 100;
        scoreBox.find('.rangeBox').find('.rangeContainer_box_label').css({
          'left': percent + '%'
        });
      });
    }
    ///////////////////////////////////////////////////////
    //スライダーをホバーした時、またはボタンをクリックした時、「現在のレベル」を表示させる
    //1.スライダーをホバーした時
    scoreBox.find('.rangeBox').find('input').on('mouseover', function () {
      scoreBox.find('.rangeBox').find('.rangeContainer').addClass('rangeContainerOpen');
    });
    scoreBox.find('.rangeBox').find('input').on('mouseleave', function () {
      scoreBox.find('.rangeBox').find('.rangeContainer').removeClass('rangeContainerOpen');
    });
    //2.プラスまたはマイナスボタンをクリックした時
    scoreBox.find('.js-changeBtn').on('click', function () {
      scoreBox.find('.rangeBox').find('.rangeContainer').addClass('rangeContainerOpen');
    });
    scoreBox.find('.js-changeBtn').on('mouseleave', function () {
      scoreBox.find('.rangeBox').find('.rangeContainer').removeClass('rangeContainerOpen');
    });
    ///////////////////////////////////////////////////////
    //ボタンをクリックした時値を変更する
    //プラスをクリックした時
    scoreBox.find('.js-plus').on('click', function () {
      //最小値、最大値取得(外で取得すると一番最後のscoreBoxの値を取得してしまう)
      var min = scoreBox.find('.rangeBox').find('input').attr('min');
      var max = scoreBox.find('.rangeBox').find('input').attr('max');
      //スコアを取得
      var score = scoreBox.find('.rangeBox').find('input').val();
      //スコアを数列へ変換(+以外の算術演算子を使うと自動で数列になるのでマイナスの時は不要)
      var score = parseInt(score);
      var score_plus = score + 1;
      //スコア+1が最小値以上、最大値以下のとき
      if (score_plus >= min && score_plus <= max) {
        //スコアのテキスト書き換え
        scoreBox.find('.js-score_score').text(score_plus);
        //スコアの値を変更
        scoreBox.find('.rangeBox').find('input').val(score_plus);
        //「現在のレベル」の位置を再設定
        percent = (score_plus - min) / (max - min) * 100;
        scoreBox.find('.rangeBox').find('.rangeContainer_box_label').css({
          'left': percent + '%'
        });
      }
    });
    //マイナスをクリックした時
    scoreBox.find('.js-minus').on('click', function () {
      //最小値、最大値取得(外で取得すると一番最後のscoreBoxの値を取得してしまう)
      var min = scoreBox.find('.rangeBox').find('input').attr('min');
      var max = scoreBox.find('.rangeBox').find('input').attr('max');
      //スコアを取得
      var score = scoreBox.find('.rangeBox').find('input').val();
      var score_minus = score - 1;
      //スコア-1が最小値以上、最大値以下のとき
      if (score_minus >= min && score_minus <= max) {
        //スコアのテキスト書き換え
        scoreBox.find('.js-score_score').text(score_minus);
        //スコアの値を変更
        scoreBox.find('.rangeBox').find('input').val(score_minus);
        //「現在のレベル」の位置を再設定
        percent = (score_minus - min) / (max - min) * 100;
        scoreBox.find('.rangeBox').find('.rangeContainer_box_label').css({
          'left': percent + '%'
        });
      }
    });
  }
  $('.js-scoreBox-d').each(function () {
    var $this = $(this);
    min = 10, //最小値
      max = 50, //最大値
      score = 30; //点数
    scoreSliderChange($this);
  });
  $('.js-scoreBox-e').each(function () {
    var $this = $(this);
    min = 5,
      max = 150,
      score = 40;
    scoreSliderChange($this);
  });
  $('.js-scoreBox-f').each(function () {
    var $this = $(this);
    min = 20,
      max = 80,
      score = 40;
    scoreSliderChange($this);
  });




  //教室使用率
  //パーセンテージを求める(小数点以下切り捨て)
  function calc_rate() {
    rate = Math.floor((count / max) * 100);
  }
  //htmlにテキスト追加
  function add_count_text(countBox) {
    countBox.find('.count_min').text(min);
    countBox.find('.count_max').text(max);
    countBox.find('.count_count').text(count);
    countBox.find('.count_rate').text(rate);
  }
  //inputの値変更
  function chenge_count_val(countBox) {
    countBox.find('input').attr('min', min);
    countBox.find('input').attr('max', max);
    countBox.find('input').val(count);
  }
  //教室A
  $('.countBox_a').each(function () {
    min = 0,
      max = 200,
      count = 199;
    calc_rate();
    add_count_text($(this));
    chenge_count_val($(this));
  });
  //教室B
  $('.countBox_b').each(function () {
    min = 0,
      max = 58,
      count = 13;
    calc_rate();
    add_count_text($(this));
    chenge_count_val($(this));
  });
  //chart.js
  var ctx = document.getElementById('ex_chart');
  var data = {
    labels: ["国語", "数学", "英語", "社会", "理科"],
    datasets: [{
      data: [88, 74, 90, 52, 123],
      backgroundColor: [
        'rgba(94, 145, 185, 0.4)',
        'rgba(249, 104, 104, 0.4)',
        'rgba(237, 143, 3, 0.4)',
        'rgba(129, 206, 113, 0.4)',
        'rgba(48, 67, 82, 0.4)',
      ],
      borderColor: [
        'rgba(94, 145, 185, 1)',
        'rgba(249, 104, 104, 1)',
        'rgba(237, 143, 3, 1)',
        'rgba(129, 206, 113, 1)',
        'rgba(48, 67, 82, 1)',
      ],
      borderWidth: 1,
    }]
  };
  var subject = data.labels;
  var count = subject.length;
  $('#ex_chart').css({
    'height': 100 + 50 * count
  });
  var options = {
    responsive: true, // サイズ自動調整
    maintainAspectRatio: false,
    title: {
      display: true,
      text: '合計時間',
      fontSize: '16',
      position: 'top',
      fontFamily: "'Noto Sans JP', sans-serif",
      padding: 20,
    },
    // 凡例
    legend: {
      display: false
    },
    hover: {
      mode: null
    },
    scales: {
      // X軸(水平)
      xAxes: [{
        ticks: {
          min: 0,
          beginAtZero: true,
        },
        gridLines: {
          color: '#eee',
          borderDash: [
            '3'
          ],
          lineWidth: 3,
          drawBorder: true, //軸とチャートの境界線表示
          tickMarkLength: 20, //目盛線の長さ(初期値10)
          zeroLineWidth: 3, //最初のインデックス(目盛り0)のグリッドラインの幅
          zeroLineColor: '#eee', //最初のインデックス(目盛り0)のグリッドラインの色
        },
      }],
      // Y軸(垂直)
      yAxes: [{
        categoryPercentage: 1,
        barPercentage: 0.5,
        //barThickness: 10,//これを書くとbarPercentageとcategoryPercentageは無視される
        gridLines: {
          lineWidth: 1,
          color: "#eee",
        },
        ticks: {
          beginAtZero: true, //開始値を0にする
          fontSize: 12, //フォントサイズ
          maxRotation: 0, // 最大角度
          minRotation: 0, // 斜めに表示
          padding: 10, //ラベルとメモリの隙間
        },
      }]
    }
  }
  var ex_chart = new Chart(ctx, {
    type: 'horizontalBar', //line,bar,radar,doughnut,pie,polarArea
    data: data,
    options: options
  });
});