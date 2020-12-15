<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:05:59
  from "/home/dev0006/www/thai-lover/production/application/views/pc/event/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c070eaf92_16231111',
  'file_dependency' => 
  array (
    '2f84e57a30affe8c35070d6a05ba01c3432878e9' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/event/index.tpl',
      1 => 1558344463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pc/include/head.tpl' => 1,
    'file:pc/include/header.tpl' => 1,
    'file:pc/include/sidebar.tpl' => 1,
    'file:pc/include/footer.tpl' => 1,
  ),
),false)) {
function content_5ce27c070eaf92_16231111 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
"<?php }?>>
<!-- FRAME -->
<div id="frame">
<!-- HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / HEADER -->
<!-- FRAME -->
<div id="wrap">
<nav>
	<ul id="breadcrumbList">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">TOP</a></li>
		<li>タイのイベント情報</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>タイのイベント情報</h1>
		<div class="mcBox mcb">
			<div class="inBox font">
				<div class="newsBoxList">
					<ul>
						<li><time datetime="2015-10-12"><span>2015年4月13日</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/sub/event01/"><b>ソンクラーン・フェスティバル</b><br>最も暑くなる４月に、有名な「ソンクラーンフェスティバル」（別名「水掛け祭り」）をご紹介！</a></time></li>
						<li><time datetime="2015-10-12"><span>2015年10月12日</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/sub/event02/"><b>ロイ・クラトン・フェスティバル</b><br>日本でいう「灯篭流し」のようなもので、陰暦１２月（毎年１１月）の満月の夜に行われます。</a></time></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mcBoxbottom"></div>
	</section>
</div>
</div><!-- / CONTENTS -->
<div id="side"><!-- SIDE BAR -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!-- / SIDE BAR-->
<div id="topButton"><p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/page_top.png" alt="PAGE TOP" width="74" height="74"></p></div>
</div><!-- / FRAME -->
<footer id="globalFooter"><!-- FOOTER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</footer><!-- / FOOTER -->
</div><!-- / FRAME -->
</body>
</html><?php }
}
