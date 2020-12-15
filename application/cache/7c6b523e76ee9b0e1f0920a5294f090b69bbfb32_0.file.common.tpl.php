<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:28:28
  from "/home/dev0006/www/thai-lover/production/application/views/sp/include/common.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce37e6c537799_68172012',
  'file_dependency' => 
  array (
    '7c6b523e76ee9b0e1f0920a5294f090b69bbfb32' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/include/common.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce37e6c537799_68172012 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
//<![CDATA[
$(function(){var topBtn=$('#topButton');topBtn.hide();$(window).scroll(function(){if($(this).scrollTop()>100){topBtn.fadeIn()}else{topBtn.fadeOut()}});$(window).bind("scroll",function(){scrollHeight=$(document).height();scrollPosition=$(window).height()+$(window).scrollTop();footHeight=$("#globalFooter .footer-bg .logo").innerHeight();bannerHeight=$("#footer_banner").innerHeight();if(scrollHeight-scrollPosition<=footHeight){$("#topButton").css({"position":"fixed","bottom":bannerHeight})}else{$("#topButton").css({"position":"fixed","bottom":bannerHeight})}});topBtn.click(function(){$('body,html').animate({scrollTop:0},500);return false})});
$(function(){var topBtn=$('#footer_banner');topBtn.hide();$(window).scroll(function(){if($(this).scrollTop()>100){topBtn.fadeIn()}else{topBtn.fadeOut()}});$(window).bind("scroll",function(){scrollHeight=$(document).height();scrollPosition=$(window).height()+$(window).scrollTop();footHeight=$("footer").innerHeight();if(scrollHeight-scrollPosition<=footHeight){$("#footer_banner").css({"position":"fixed","bottom":0})}else{$("#footer_banner").css({"position":"fixed","bottom":0})}});});
//]]>
<?php echo '</script'; ?>
>
<?php }
}
