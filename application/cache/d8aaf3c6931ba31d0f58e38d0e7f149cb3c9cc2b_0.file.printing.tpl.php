<?php
/* Smarty version 3.1.29, created on 2020-09-17 05:24:28
  from "D:\xampp\htdocs\taiseisha\application\views\pc\printing.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f62d6ecb4f3c2_32838988',
  'file_dependency' => 
  array (
    'd8aaf3c6931ba31d0f58e38d0e7f149cb3c9cc2b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha\\application\\views\\pc\\printing.tpl',
      1 => 1600313049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pc/include/head.tpl' => 1,
    'file:pc/include/header.tpl' => 1,
    'file:pc/include/flow.tpl' => 1,
    'file:pc/include/sidebar.tpl' => 1,
    'file:pc/include/footer.tpl' => 1,
  ),
),false)) {
function content_5f62d6ecb4f3c2_32838988 ($_smarty_tpl) {
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
    <div class="headerBar">
      <div class="headerBar_box">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index">
          <p class="headerBar_box_title">ホーム</p>
        </a>
        <p class="headerBar_box_currentPage">印刷事業</p>
      </div>
    </div>
    <div class="l_frame">
      <!-- FRAME -->
      <div class="l_contents">
        <!-- CONTENTS -->
        <section class="block">
          <div class="title title-design1">
            <h2 class="title_text title_text-fontWeightNormal">印刷事業</h2>
            <p class="title_subText">PRINTING</p>
          </div>
          <section class="block block-spaceS">
            <div class="title title-design2">
              <h3 class="title_text title_text-color1 title_text-sizeS title_text-fontWeightNormal">印刷事業について</h3>
            </div>
            <div class="block_content block_content-flex block_content-spaceM block_content-paddengS">
              <div class="textBox textBox-widthM">
                <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                  ポスター、カタログ、パンフレット、書籍、チラシ、はがき、封筒など、あらゆる印刷物の制作なら大成社にお任せください。企画からデザイン制作、印刷、発送までトータルにサポートすることで一貫性のある訴求効果の高い印刷物をご提供いたします。また、少部数、小ページの印刷物もご対応いたします。
                </p>
                <div class="btn btn-spaceS">
                  <p class="btn_inner btn_inner-sizeS btn_inner-arrow2 btn_inner-bg1">
                    <a class="btn_inner_anchor btn_inner_anchor-space1" href="#">
                      デザイン制作の詳細はこちら
                    </a>
                  </p>
                </div>
              </div>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/print-list1.jpg" alt="">
            </div>
            <ul class="list list-paddingS">
              <li class="list_item list_item-spaceL">
                <div class="title title-design3">
                  <h4 class="title_text title_text-sizeS title_text-color2">カタログ・パンフレット</h4>
                </div>
                <div class="list_item_box">
                  <div class="textBox textBox-widthM">
                    <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                      企業とお客様を繋ぐカタログやパンフレットは、販促のための大事なツールです。企業の思いをお客様に的確にお伝えするカタログ、パンフレットをご提供いたします。
                    </p>
                  </div>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/print-list2.jpg" alt="">
                </div>
              </li>
              <li class="list_item list_item-spaceL">
                <div class="title title-design3">
                  <h4 class="title_text title_text-sizeS title_text-color2">名刺・はがき・封筒</h4>
                </div>
                <div class="list_item_box">
                  <div class="textBox textBox-widthM">
                    <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                      転勤、引っ越し、招待状、通知文など定型的な文例もご用意しております。また年賀状印刷の各種デザインも取り揃えております。圧着はがき、定型・変形・窓付き封筒作成、封筒へのロゴ印刷、宛名印刷など、お気軽にご相談ください。
                    </p>
                  </div>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/print-list3.jpg" alt="">
                </div>
              </li>
              <li class="list_item list_item-spaceXL">
                <div class="title title-design3">
                  <h4 class="title_text title_text-sizeS title_text-color2">ポスター</h4>
                </div>
                <div class="list_item_box">
                  <div class="textBox textBox-widthM">
                    <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                      心をつかみ効果を上げる、デザインとコピーで販促戦略のご提案をいたします。また、イベント開催通知用ポスター、学園祭ポスターなどの制作を承っておりますので、お気軽にご相談ください。
                    </p>
                  </div>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/print-list4.jpg" alt="SALE lorem lpsum, Dolor sit amet!">
                </div>
              </li>
            </ul>
          </section>

          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/flow.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        $tabAnchors.eq(1).trigger('click');
      });
      //スムーズスクロール
      var $toTop = $('.toTop');
      $toTop.on('click', function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: 0
        }, 500, 'easeInOutQuart');
      });
    }); //消さない
    //]]>
  <?php echo '</script'; ?>
>
  
  </body>
</html><?php }
}
