<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:07
  from "/home/dev0006/www/thai-lover/production/application/views/admin/include/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c4b8f7b62_01315087',
  'file_dependency' => 
  array (
    'd4855ab38bfcee312e47e7fa92579c37be873e55' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/include/sidebar.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27c4b8f7b62_01315087 ($_smarty_tpl) {
?>
<nav class="side">
	<ul class="sideBox sideBox-<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
">
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/" class="sideBox_listAnchor1"><div class="sideBox_listIcon sideBox_listIcon-1"></div><span>店舗管理</span></a></li>
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/lecture/" class="sideBox_listAnchor2"><div class="sideBox_listIcon sideBox_listIcon-2"></div><span>タイ語レクチャー</span></a></li>
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/music/" class="sideBox_listAnchor3"><div class="sideBox_listIcon sideBox_listIcon-3"></div><span>ミュージック</span></a></li>
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/info/" class="sideBox_listAnchor4"><div class="sideBox_listIcon sideBox_listIcon-4"></div><span>お知らせ</span></a></li>
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/voice/" class="sideBox_listAnchor5"><div class="sideBox_listIcon sideBox_listIcon-5"></div><span>口コミ管理</span></a></li>
		<li class="sideBox_list"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/master/account/" class="sideBox_listAnchor6"><div class="sideBox_listIcon sideBox_listIcon-6"></div><span>設定</span></a></li>
	</ul>
</nav><?php }
}
