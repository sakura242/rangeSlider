<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:45
  from "/home/dev0006/www/thai-lover/production/application/views/admin/shop/shop_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c71683424_17925402',
  'file_dependency' => 
  array (
    'b9de53bab8ec1f51aae39ddfee38252311f09e12' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/shop/shop_menu.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c71683424_17925402 ($_smarty_tpl) {
?>
<ul class="menuBox menuBox-spaceS">
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'shop_edit') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/edit/">基本情報</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'shop_cast') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/cast/">在籍リスト</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'shop_voice') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/voice/">口コミ</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'shop_access') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/access/">地図・アクセス</a>
	</li>
	<li class="menuBox_item <?php if ($_smarty_tpl->tpl_vars['pageID']->value == 'shop_coupon') {?>menuBox_item-on<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/coupon/">クーポン</a>
	</li>
</ul><?php }
}
