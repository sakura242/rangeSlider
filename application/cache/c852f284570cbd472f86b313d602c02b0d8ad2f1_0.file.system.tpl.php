<?php
/* Smarty version 3.1.29, created on 2020-09-17 04:43:30
  from "D:\xampp\htdocs\taiseisha\application\views\pc\system.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f62cd527ac029_08069194',
  'file_dependency' => 
  array (
    'c852f284570cbd472f86b313d602c02b0d8ad2f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha\\application\\views\\pc\\system.tpl',
      1 => 1600310603,
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
function content_5f62cd527ac029_08069194 ($_smarty_tpl) {
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
        <p class="headerBar_box_currentPage">システム開発</p>
      </div>
    </div>
    <div class="l_frame">
      <!-- FRAME -->
      <div class="l_contents">
        <!-- CONTENTS -->
        <section class="block">
          <div class="title title-design1">
            <h2 class="title_text title_text-fontWeightNormal">システム開発</h2>
            <p class="title_subText">SYSTEM</p>
          </div>
          <section class="block block-spaceS">
            <div class="title title-design2">
              <h3 class="title_text title_text-color1 title_text-sizeS title_text-fontWeightNormal">システム開発について</h3>
            </div>
            <div class="block_content block_content-flex block_content-spaceM block_content-paddengS">
              <div class="textBox textBox-widthM">
                <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                  販売管理、顧客管理など基幹業務システム、管理システムの開発改修からWebシステム構築まで、業務とITに関するお悩みを解決いたします。また、現在お使いのシステムの改修や保守の引継ぎ等も承っております。お気軽にご相談ください。
                </p>
              </div>
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/system-img.jpg" alt="">
            </div>
            <ul class="list list-paddingS">
              <li class="list_item list_item-spaceXL">
                <div class="title title-design3">
                  <h4 class="title_text title_text-sizeS title_text-color2">こんなお悩みを抱えていませんか？</h4>
                </div>
                <ul class="list">
                  <li class="list_item list_item-spaceL">
                    <div class="systemBox">
                      <div class="systemBox_title">
                        <p> お悩み</p>
                        <p>新しいシステムを導入したい！</p>
                      </div>
                      <p class="systemBox_text">お客様に合った<span>最適なシステム</span>をご提案</p>
                    </div>
                    <div class="textBox textBox-spaceS">
                      <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                        オーダーメイドのシステムで他社と差別化。何パターンもあるシステムの中から、お客様に合った最適なシステムをご提案いたします。
                      </p>
                    </div>
                  </li>
                  <li class="list_item list_item-spaceL">
                    <div class="systemBox systemBox-design1">
                      <div class="systemBox_title">
                        <p> お悩み</p>
                        <p>今あるシステムを何とかしたい！</p>
                      </div>
                      <p class="systemBox_text">システムのトラブルを<span>すぐに解決！</span></p>
                    </div>
                    <div class="textBox textBox-spaceS">
                      <p class="textBox_text textBox_text-sizeS textBox_text-color1">
                        システムのトラブルをすぐに解決！システム改修から運用保守の引継ぎ等のご相談まで、まずはお気軽にご相談ください。
                      </p>
                    </div>
                  </li>
                </ul>
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
