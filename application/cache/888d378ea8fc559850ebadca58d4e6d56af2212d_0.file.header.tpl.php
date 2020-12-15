<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:03:19
  from "/home/dev0006/www/thai-lover/production/application/views/pc/include/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27b674ec341_88441727',
  'file_dependency' => 
  array (
    '888d378ea8fc559850ebadca58d4e6d56af2212d' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/include/header.tpl',
      1 => 1558344463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce27b674ec341_88441727 ($_smarty_tpl) {
?>
<header>
	<div id="globalHeader">
		<div>
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo.png" alt="たいらぶ" width="215" height="83"></a></p>
			<div>
				<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/header_thailand.png" alt="行きタイ！燃えタイ！楽しみタイ！" width="303" height="28"></p>
				<div>
					<p>夜遊びスポットを紹介する情報検索サイト「</p>
					<?php if (($_smarty_tpl->tpl_vars['pageID']->value == "home")) {?>
					<h1>たいらぶ</h1>
					<?php } else { ?>
					<p>たいらぶ</p>
					<?php }?>
					<p>」ゴーゴーバー、カラオケ、マッサージ、MP等をお探しの方は「<strong>たいらぶ</strong>」にお任せ<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/header_heart.png" alt="" width="17" height="16"></p>
				</div>
				<p class="staftBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_about_btn.png" alt="現地案内を希望の方はこちら" width="300" height="40"></a></p>
			</div>
		</div>
		<nav<?php if (!empty($_smarty_tpl->tpl_vars['navID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['navID']->value;?>
"<?php }?>>
			<div id="gnav">
				<ul>
					<li class="navHome"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">TOP</a></li>
					<li class="navSearch"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/">お店検索</a></li>
					<li class="navStrategyr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/">攻略ガイド</a></li>
					<li class="navRecture"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/">タイ語レクチャー</a></li>
					<li class="navMusic"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/">タイミュージック</a></li>
					<li class="navInfo"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/">タイの基本情報</a></li>
					<li class="navStaff"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/">現地案内</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<?php }
}
