<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:07
  from "/home/dev0006/www/thai-lover/production/application/views/admin/include/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c4b8e8ec4_63416923',
  'file_dependency' => 
  array (
    'd6b172191f40da9ff7b233779f63f501aa9895d1' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/include/header.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c4b8e8ec4_63416923 ($_smarty_tpl) {
?>
<header class="l_header">
	<div class="header">
		<div class="header_leftBox">
			<div class="header_leftBox_menu">
				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/menu_off.png" alt="" class="js-menu_off header_leftBox_menuOff">
				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/menu_on.png" alt="" class="js-menu_on">
			</div>
			<h1 class="header_leftBox_logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/header_logo_off.png" width="112" height="40" alt="NEURONS" class="js-logo_off header_leftBox_logoOff">
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/header_logo_on.png" width="112" height="40" alt="NEURONS" class="js-logo_on">
				</a>
			</h1>
		</div>
		<div class="header_rightBox">
			<p class="header_rightBox_text">テスト 太郎</p>
			<p class="header_rightBox_logout">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/login/"><span class="header_rightBox_icon header_rightBox_icon-1"></span><span class="header_rightBox_logoutText">ログアウト</span></a>
			</p>
		</div>
	</div>
</header><?php }
}
