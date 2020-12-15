<?php
/* Smarty version 3.1.29, created on 2020-12-11 04:56:24
  from "D:\xampp\htdocs\schedule\application\views\pc\include\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd2ede84c21b2_99519150',
  'file_dependency' => 
  array (
    '0bf5fbbbc2b8bd8136f587b86fed3cd5292ba598' => 
    array (
      0 => 'D:\\xampp\\htdocs\\schedule\\application\\views\\pc\\include\\head.tpl',
      1 => 1607658968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd2ede84c21b2_99519150 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="schedule">
<?php if (!empty($_smarty_tpl->tpl_vars['head_keywords']->value)) {?>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head_keywords']->value;?>
,schedule">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }
if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<meta property="og:title" content="schedule">
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | schedule">
<meta property="og:type" content="article">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/fb_image.jpg">
<meta property="og:site_name" content="schedule">
<meta property="og:locale" content="ja_JP">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>schedule</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | schedule</title>
<?php }?>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico">
<!-- <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/apple-touch-icon.png"> -->
<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/reset.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<!-- スケジュール -->
<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/calendar.css'>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/style.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jquery-3.5.1.js"><?php echo '</script'; ?>
>
<!-- スケジュール -->
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jq.schedule.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/global.js"><?php echo '</script'; ?>
>
<?php }
}
