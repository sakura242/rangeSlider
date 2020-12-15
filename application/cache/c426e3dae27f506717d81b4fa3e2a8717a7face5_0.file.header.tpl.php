<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:28:28
  from "/home/dev0006/www/thai-lover/production/application/views/sp/include/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce37e6c4cf238_00462190',
  'file_dependency' => 
  array (
    'c426e3dae27f506717d81b4fa3e2a8717a7face5' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/include/header.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce37e6c4cf238_00462190 ($_smarty_tpl) {
?>
<div id="globalHeader">
	<?php if (($_smarty_tpl->tpl_vars['pageID']->value == "home")) {?>
	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/logo.png" alt="たいらぶ"></a></h1>
	<?php } else { ?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/logo.png" alt="たいらぶ"></a></p>
	<?php }?>
	<div class="Menu_Btn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_btn.png" alt=""></div>
	<!--<button id="button">Menu</button>-->
	<nav class="navMenu">
		<ul class="menuHeader">
			<li class="menuLogo"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/logo.png" alt="たいらぶ" class="img-width-100"></li>
			<li class="closeBtn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_btn.png" alt="" class="img-width-100"></li>
		</ul>
		<ul class="menuList">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_home_btn.png" alt="ホーム" class="img-width-100"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_search_btn.png" alt="お店検索" class="img-width-100"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_guide_btn.png" alt="攻略ガイド" class="img-width-100"></a></li>
		</ul>
		<ul class="menuList">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_lecture_btn.png" alt="タイ語レクチャー" class="img-width-100"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_music_btn.png" alt="タイミュージック" class="img-width-100"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_info_btn.png" alt="タイの基本情報" class="img-width-100"></a></li>
		</ul>
		<ul class="menuList">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_local_btn.png" alt="現地案内" class="img-width-100"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inquiry/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/menu_mail_btn.png" alt="お問い合わせ" class="img-width-100"></a></li>
			
		</ul>
		<p class="closeBtn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/btn_cross.png" alt=""> 閉じる</p>
	</nav>

</div><?php }
}
