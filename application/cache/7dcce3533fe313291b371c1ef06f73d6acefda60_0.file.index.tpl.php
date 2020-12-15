<?php
/* Smarty version 3.1.29, created on 2020-09-17 05:34:48
  from "D:\xampp\htdocs\taiseisha\application\views\pc\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f62d9583e0bb1_33282708',
  'file_dependency' => 
  array (
    '7dcce3533fe313291b371c1ef06f73d6acefda60' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha\\application\\views\\pc\\index.tpl',
      1 => 1600313686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pc/include/head.tpl' => 1,
    'file:pc/include/header.tpl' => 1,
    'file:pc/include/sidebar.tpl' => 1,
    'file:pc/include/footer.tpl' => 1,
  ),
),false)) {
function content_5f62d9583e0bb1_33282708 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
" <?php }?>> <!-- WRAPPER -->
  <div class="l_wrapper">
    <!-- HEADER -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- / HEADER -->
    <div class="slideshow">
      <div class="slideshow_box">
        <div class="slideshow_slides">
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/design" class="slideshow_image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide-list1.png" alt="デザイン制作 単なるデザインではなく価値あるデザインをあなたの思いを形にするお手伝いをいたします。 Design">
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/system" class="slideshow_image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide-list2.png" alt="システム開発 システムの開発・改修・運用保守などお任せください！ System">
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/printing" class="slideshow_image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide-list3.png" alt="印刷事業 デザイン制作から印刷まで一貫して制作受注ご満足いただける製品をお届けいたします。 Printing">
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/business" class="slideshow_image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide-list4.png" alt="営業代行業務 お客様の軽減を負担し効率よく収益向上に貢献！高品質なサービスをご提供いたします。 Business">
          </a>
        </div>
      </div>
      <nav class="slideshow_nav slideshow_nav-flex"></nav>
    </div>
    <div class="l_frame l_frame-spaceL">
      <!-- FRAME -->
      <div class="l_contents">
        <!-- CONTENTS -->
        <section class="solution">
          <div class="solution_title">
            <p class="solution_title_text">私達にしかできない</p>
            <p class="solution_title_text solution_title_text-bgcolor1">解決策</p>
            <p class="solution_title_text">があります。</p>
          </div>
          <div class="solution_box">
            <ol class="list list-flex">
              <li class="list_item list_item-spaceS list_item-solution">
                <div class="listSolution_item_title">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/check.png" alt="">
                  <p class="listSolution_item_title-design1">お悩み<span>1</span>
                  </p>
                  <p class="listSolution_item_title-design2">デザイン制作</p>
                </div>
                <div class="listSolution_item_textBox">
                  <p>アイデアはあるけど</p>
                  <p>うまく形にできない・・・</p>
                </div>
              </li>
              <li class="list_item list_item-spaceS list_item-solution">
                <div class="listSolution_item_title">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/check.png" alt="">
                  <p class="listSolution_item_title-design1">お悩み<span>2</span>
                  </p>
                  <p class="listSolution_item_title-design2">システム開発</p>
                </div>
                <div class="listSolution_item_textBox">
                  <p>新規にシステムを開発したい!</p>
                  <p>今あるシステムを改修したい!!</p>
                </div>
              </li>
              <li class="list_item list_item-spaceS list_item-solution">
                <div class="listSolution_item_title">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/check.png" alt="">
                  <p class="listSolution_item_title-design1">お悩み<span>3</span>
                  </p>
                  <p class="listSolution_item_title-design2">印刷事業</p>
                </div>
                <div class="listSolution_item_textBox">
                  <p>デザインから印刷まで</p>
                  <p>一貫で引き受けて欲しい！</p>
                </div>
              </li>
              <li class="list_item list_item-spaceS list_item-solution">
                <div class="listSolution_item_title">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/check.png" alt="">
                  <p class="listSolution_item_title-design1">お悩み<span>4</span>
                  </p>
                  <p class="listSolution_item_title-design2">営業代行業務</p>
                </div>
                <div class="listSolution_item_textBox">
                  <p>営業マンが足りない、</p>
                  <p>営業方法を見直したい！</p>
                </div>
              </li>
            </ol>
          </div>
          <img class="solution_woman" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/woman1.png" alt="">
        </section>
        <section class="block block-spaceM">
          <div class="title title-design1">
            <h2 class="title_text">サービス内容</h2>
            <p class="title_subText">SERVICE</p>
          </div>
          <ul class="list list-flex list-service">
            <li class="list_item list_item-spaceM list_item-service">
              <a class="list_item_link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/design">
                <div class="imgWrap">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-service1.jpg" alt="">
                </div>
                <dl class="textBox textBox-spaceM">
                  <dt class="textBox_text textBox_text-sizeM textBox_text-bold textBox_text-design1">デザイン制作</dt>
                  <dd class="textBox_text textBox_text-color1 textBox_text-spaceS">広告デザインからWebデザインまで販促活動をサポート！</dd>
                </dl>
              </a>
              <p class="list_item_backText">Design</p>
            </li>
            <li class="list_item list_item-spaceM list_item-service">
              <a class="list_item_link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/design">
                <div class="imgWrap">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-service2.jpg" alt="">
                </div>
                <dl class="textBox textBox-spaceM">
                  <dt class="textBox_text textBox_text-sizeM textBox_text-bold textBox_text-design1">システム開発</dt>
                  <dd class="textBox_text textBox_text-color1 textBox_text-spaceS">システムの開発・改修・運用保守などお任せ下さい！</dd>
                </dl>
              </a>
              <p class="list_item_backText">System</p>
            </li>
            <li class="list_item list_item-spaceM list_item-service">
              <a class="list_item_link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/printing">
                <div class="imgWrap">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-service3.jpg" alt="">
                </div>
                <dl class="textBox textBox-spaceM">
                  <dt class="textBox_text textBox_text-sizeM textBox_text-bold textBox_text-design1">印刷事業</dt>
                  <dd class="textBox_text textBox_text-color1 textBox_text-spaceS">ご満足いただけるよう幅広い印刷ニーズにお応えいたします。</dd>
                </dl>
              </a>
              <p class="list_item_backText">Printing</p>
            </li>
            <li class="list_item list_item-spaceM list_item-service">
              <a class="list_item_link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/business">
                <div class="imgWrap">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-service4.jpg" alt="">
                </div>
                <dl class="textBox textBox-spaceM">
                  <dt class="textBox_text textBox_text-sizeM textBox_text-bold textBox_text-design1">営業代行業務</dt>
                  <dd class="textBox_text textBox_text-color1 textBox_text-spaceS">お客様の事業発展に貢献いたします。</dd>
                </dl>
              </a>
              <p class="list_item_backText">Business</p>
            </li>
          </ul>
        </section>
        <section class="block block-spaceM">
          <div class="title title-design1">
            <h2 class="title_text">ご利用までの流れ</h2>
            <p class="title_subText">FLOW</p>
          </div>
          <ol class="list list-flex list-spaceM">
            <li class="list_item list_item-border1 list_item-design1">
              <p class="list_item_number">1</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/flow-icon1.png" alt="">
              <div class="textBox">
                <p class="textBox_text textBox_text-bold textBox_text-sizeM textBox_text-center">お問い合わせ</p>
              </div>
            </li>
            <li class="list_item list_item-border1 list_item-design1">
              <p class="list_item_number">2</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/flow-icon2.png" alt="">
              <div class="textBox">
                <p class="textBox_text textBox_text-bold textBox_text-sizeM textBox_text-center">無料お見積り</p>
              </div>
            </li>
            <li class="list_item list_item-border1 list_item-design1">
              <p class="list_item_number">3</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/flow-icon3.png" alt="">
              <div class="textBox">
                <p class="textBox_text textBox_text-bold textBox_text-sizeM textBox_text-center">ご発注</p>
              </div>
            </li>
            <li class="list_item list_item-border1 list_item-design1">
              <p class="list_item_number">4</p>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/flow-icon4.png" alt="">
              <div class="textBox">
                <p class="textBox_text textBox_text-bold textBox_text-sizeM textBox_text-center">完了</p>
              </div>
            </li>
          </ol>
        </section>
        <article class="contact">
          <div class="contact_title">
            <p>ご相談・お問い合わせはこちらまで！</p>
            <p class="contact_title_text-sizeS">まずはお気軽にお問い合わせください。</p>
          </div>
          <img class="contact_woman" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/woman2.png" alt="">
          <div class="contactBox contactBox-flex">
            <div class="contactBox_btn">
              <p>お電話でのお問い合わせ</p>
              <p class="contactBox_btn_number"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/tel-icon2.png" alt="">0120-000-000</p>
              <p class="contactBox_btn_text">受付時間：00：00〜00：00（土日祝日除く）</p>
            </div>
            <a href="#" class="contactBox_btn">
              <p>ウェブサイトでのお問い合わせ</p>
              <p class="contactBox_btn_mail"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/mail-icon2.png" alt="">お問い合わせフォーム</p>
              <p class="contactBox_btn_text contactBox_btn_text-spaceS">24時間受付中</p>
            </a>
          </div>
        </article>
      </div><!-- / CONTENTS -->
      <div class="l_side">
        <!-- SIDE BAR -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div><!-- / SIDE BAR-->
    </div><!-- / FRAME -->
    <!-- <p class="pageTop"><a href="#wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/page_top.png" alt="page top" width="78" height="78"></a></p> -->
    <!-- FOOTER -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- / FOOTER -->
  </div><!-- / WRAPPER -->
  
  <?php echo '<script'; ?>
>
    //<![CDATA[
    $(function () {
      // ヘッダーナビの下線
      var $header = $('.l_header'),
        $header_nav = $header.find('.nav');
      $header_nav.each(function () {
        var $tabAnchors = $header_nav.find('a');
        $header_nav.on('click', 'a', function (event) {
          //event.preventDefault();
          var $this = $(this);
          if ($this.hasClass('active')) {
            return;
          }
          $tabAnchors.removeClass('active');
          $this.addClass('active');
        });
        $tabAnchors.eq(0).trigger('click');
      });
      //スムーズスクロール
      var $toTop = $('.toTop');
      $toTop.on('click', function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: 0
        }, 500, 'easeInOutQuart');
      });
      //スライドショー
      var $slideshow = $('.slideshow');
      $slideshow.each(function () {
        var $slideshow_box = $slideshow.find('.slideshow_box'),
          $slideGroup = $slideshow.find('.slideshow_slides'),
          $slides = $slideGroup.find('.slideshow_image'),
          $slideshow_nav = $slideshow.find('.slideshow_nav'),
          slideshow_navHTML = '',
          slideCount = $slides.length,
          currentIndex = 0,
          interval = 5000,
          timer;
        //HTML要素の配置
        //各スライドの位置を決定
        $slides.each(function (index) {
          $(this).css({
            left: 100 * index + '%'
          });
          slideshow_navHTML += '<a href="#">' + (index) + '</a>';
        });
        $slideshow_nav.html(slideshow_navHTML);
        //任意のスライドを表示する関数
        function goToSlide(index) {
          $slideGroup.animate({
            left: -100 * index + '%'
          }, 600, 'easeInOutExpo');
          //今表示しているインデックスの更新
          currentIndex = index;
          //ナビ更新
          updateNav();
        } //goToSlide関数
        function updateNav() {
          //現在のスライドのバナーを無効に
          $slideshow_nav.find('a').removeClass('active')
            .eq(currentIndex).addClass('active');
        }
        //バナーがクリックされたら該当するスライドを表示
        $slideshow_nav.on('click', 'a', function (event) {
          event.preventDefault();
          if (!$(this).hasClass('active')) {
            goToSlide($(this).index());
          }
        });
        //タイマーを開始する関数
        function startTimer() {
          timer = setInterval(function () {
            var nextIndex = (currentIndex + 1) % slideCount;
            goToSlide(nextIndex);
          }, interval);
        } //startTimer関数
        //タイマーを停止する関数
        function stopTimer() {
          clearInterval(timer);
        }
        //マウスが乗ったらタイマーを停止、はずれたら開始
        $slideshow_box.on({
          mouseenter: stopTimer,
          mouseleave: startTimer
        });
        //最初のスライドを表示
        goToSlide(currentIndex);
        //タイマーをスタート
        startTimer();
      });
    }); //消さない
    //]]>
  <?php echo '</script'; ?>
>
  
  </body>
</html><?php }
}
