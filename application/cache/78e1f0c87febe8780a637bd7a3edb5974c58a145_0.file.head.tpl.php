<?php
/* Smarty version 3.1.29, created on 2020-10-16 03:46:15
  from "D:\xampp\htdocs\menkyolab\application\views\pc\include\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f88fb67a776a8_31498179',
  'file_dependency' => 
  array (
    '78e1f0c87febe8780a637bd7a3edb5974c58a145' => 
    array (
      0 => 'D:\\xampp\\htdocs\\menkyolab\\application\\views\\pc\\include\\head.tpl',
      1 => 1602812763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88fb67a776a8_31498179 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="免許ラボ">
<?php if (!empty($_smarty_tpl->tpl_vars['head_keywords']->value)) {?>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head_keywords']->value;?>
,免許ラボ">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }
if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<meta property="og:title" content="免許ラボ">
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | 免許ラボ">
<meta property="og:type" content="article">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/fb_image.jpg">
<meta property="og:site_name" content="免許ラボ">
<meta property="og:locale" content="ja_JP">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>免許ラボ</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | 免許ラボ</title>
<?php }?>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico">
<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/apple-touch-icon.png">
<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/reset.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/slick.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/odometer-theme-default.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/style.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='//ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jquery-3.5.1.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/slick.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/odometer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/global.js"><?php echo '</script'; ?>
>
<?php }
}
