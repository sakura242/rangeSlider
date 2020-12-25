$(function () {
  var changeCountSlider = function (box, max, count) {
    //パーセンテージを求める(小数点以下切り捨て)
    rate = Math.floor((count / max) * 100);
    //htmlにテキスト追加
    box.find('.count_max').text(max);
    box.find('.count_count').text(count);
    box.find('.count_rate').text(rate);
    //inputの値変更
    box.find('input').attr('min', 0);
    box.find('input').attr('max', max);
    box.find('input').val(count);
  }
  var slider = changeCountSlider($('.countBox-a'), 100, 80)//教室A(一番親のクラス名,最大の人数,現在の人数)
  var slider = changeCountSlider($('.countBox-b'), 100, 20)//教室B
});