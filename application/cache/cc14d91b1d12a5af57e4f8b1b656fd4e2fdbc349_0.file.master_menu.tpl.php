<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:21
  from "/home/dev0006/www/thai-lover/production/application/views/admin/master/master_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c59d910b9_59223779',
  'file_dependency' => 
  array (
    'cc14d91b1d12a5af57e4f8b1b656fd4e2fdbc349' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/master/master_menu.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c59d910b9_59223779 ($_smarty_tpl) {
?>
<ul class="menuBox menuBox-spaceS">
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'master_account') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/master/account/">アカウント</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'master_area') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/master/area/">エリア</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'master_lecture') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/master/lecture/">タイ語カテゴリー</a>
	</li>
</ul><?php }
}
