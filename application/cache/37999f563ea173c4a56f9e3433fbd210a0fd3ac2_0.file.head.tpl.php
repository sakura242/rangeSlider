<?php
/* Smarty version 3.1.29, created on 2019-07-28 11:21:01
  from "C:\xampp\htdocs\test\application\views\pc\include\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5d3d68fd417c98_65311954',
  'file_dependency' => 
  array (
    '37999f563ea173c4a56f9e3433fbd210a0fd3ac2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\application\\views\\pc\\include\\head.tpl',
      1 => 1564305044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3d68fd417c98_65311954 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta name="viewport" content="width=1100">
<meta name = "format-detection" content = "telephone=no">
<meta name="apple-mobile-web-app-title" content="テスト">
<?php if (!empty($_smarty_tpl->tpl_vars['head_keywords']->value)) {?>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head_keywords']->value;?>
,テスト">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }
if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<meta property="og:title" content="テスト">
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | テスト">
<meta property="og:type" content="article">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/fb_image.jpg">
<meta property="og:site_name" content="テスト">
<meta property="og:locale" content="ja_JP">
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>テスト</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | テスト</title>
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
<?php if (!empty($_smarty_tpl->tpl_vars['page_css4']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css4']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/style.css">
<?php if (!empty($_smarty_tpl->tpl_vars['page_css1']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css1']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css2']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css2']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css3']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css3']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css4']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css4']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css5']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css5']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css6']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc/<?php echo $_smarty_tpl->tpl_vars['page_css6']->value;?>
">
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/plugins/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/app/modules.js"><?php echo '</script'; ?>
> -->
<?php if (!empty($_smarty_tpl->tpl_vars['js_file1']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file1']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file2']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file2']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file3']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file3']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file4']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file4']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file5']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file5']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file6']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/pc/<?php echo $_smarty_tpl->tpl_vars['js_file6']->value;?>
"><?php echo '</script'; ?>
>
<?php }
}
}
