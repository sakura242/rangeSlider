<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:06:16
  from "/home/dev0006/www/thai-lover/production/application/views/admin/include/head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c18c87974_31257827',
  'file_dependency' => 
  array (
    '735a320cdcad661b9cd240f8db4b7249b5ddf523' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/include/head.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c18c87974_31257827 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="たいらぶ">
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>たいらぶ</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | たいらぶ</title>
<?php }?>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico">
<link rel="apple-touch-icon" href="/img/icon/apple-touch-icon.png">
<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/reset.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/style.css">
<?php if (!empty($_smarty_tpl->tpl_vars['page_css1']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css1']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css2']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css2']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css3']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css3']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css4']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css4']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css5']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css5']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css6']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/admin/<?php echo $_smarty_tpl->tpl_vars['page_css6']->value;?>
">
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/app/modules.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/plugins/plugins.js"><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['jq_cookie']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file1']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file1']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file2']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file2']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file3']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file3']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file4']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file4']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file5']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file5']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file6']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/<?php echo $_smarty_tpl->tpl_vars['js_file6']->value;?>
"><?php echo '</script'; ?>
>
<?php }
}
}
