<?php
/* Smarty version 3.1.29, created on 2020-09-17 04:10:44
  from "D:\xampp\htdocs\taiseisha\application\views\sp\include\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f62c5a405c223_71685134',
  'file_dependency' => 
  array (
    '41bac3f05d38eaa8f5e6c63fc49a744b620c281a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha\\application\\views\\sp\\include\\head.tpl',
      1 => 1564304810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head_tag.tpl' => 1,
  ),
),false)) {
function content_5f62c5a405c223_71685134 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" conten ="telephone=no">
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
images/compass_og.png">
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
<link rel="apple-touch-icon" href="/img/icon/apple-touch-icon.png">
<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/reset.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/style.css">
<?php if (!empty($_smarty_tpl->tpl_vars['page_css1']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css1']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css2']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css2']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css3']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css3']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css4']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css4']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css5']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css5']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css6']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/sp/<?php echo $_smarty_tpl->tpl_vars['page_css6']->value;?>
">
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/app/modules.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/plugins/plugins.js"><?php echo '</script'; ?>
> -->
<?php if (!empty($_smarty_tpl->tpl_vars['jq_cookie']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file1']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file1']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file2']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file2']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file3']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file3']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file4']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file4']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file5']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file5']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file6']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/sp/<?php echo $_smarty_tpl->tpl_vars['js_file6']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (($_smarty_tpl->tpl_vars['is_ie6']->value || $_smarty_tpl->tpl_vars['is_ie7']->value || $_smarty_tpl->tpl_vars['is_ie8']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/css3-mediaqueries.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/html5shiv-printshiv.js"><?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common/head_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}