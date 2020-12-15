<?php
/* Smarty version 3.1.29, created on 2020-12-12 20:22:02
  from "C:\Users\sakur\Documents\xampp\htdocs\range_slider\application\views\pc\include\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd5185a9806d4_60007205',
  'file_dependency' => 
  array (
    '5594e2b91ae0d2a5aafca23e6c70d8321c766e31' => 
    array (
      0 => 'C:\\Users\\sakur\\Documents\\xampp\\htdocs\\range_slider\\application\\views\\pc\\include\\head.tpl',
      1 => 1607800918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd5185a9806d4_60007205 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="Range Slider">
<?php if (!empty($_smarty_tpl->tpl_vars['head_keywords']->value)) {?>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head_keywords']->value;?>
,Range Slider">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }
if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<meta property="og:title" content="Range Slider">
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | Range Slider">
<meta property="og:type" content="article">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/fb_image.jpg">
<meta property="og:site_name" content="Range Slider">
<meta property="og:locale" content="ja_JP">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>Range Slider</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | Range Slider</title>
<?php }?>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico">
<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/apple-touch-icon.png">
<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }?>
<!-- css -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/reset.css">
<!-- font awesome -->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/style.css" rel="stylesheet">
<!-- js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/common/jquery-3.5.1.js"><?php echo '</script'; ?>
>
<!-- chart.js -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/global.js"><?php echo '</script'; ?>
><?php }
}
