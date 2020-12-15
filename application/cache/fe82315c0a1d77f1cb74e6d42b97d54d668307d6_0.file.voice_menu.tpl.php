<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:20
  from "/home/dev0006/www/thai-lover/production/application/views/admin/voice/voice_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c58d43299_92460962',
  'file_dependency' => 
  array (
    'fe82315c0a1d77f1cb74e6d42b97d54d668307d6' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/voice/voice_menu.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c58d43299_92460962 ($_smarty_tpl) {
?>
<ul class="menuBox menuBox-spaceS">
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'voice') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/voice/">未認証リスト</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'voice_allow') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/voice/allow/">承認済みリスト</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'voice_deny') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/voice/deny/">非承認リスト</a>
	</li>
</ul><?php }
}
