<?php
/* Smarty version 3.1.29, created on 2019-05-21 16:55:05
  from "/home/dev0006/www/thai-lover/production/application/views/pc/event/event02.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce3aed9623816_95721259',
  'file_dependency' => 
  array (
    '67193f2c77606edf6c8b6b5f8f982870f7d9572f' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/event/event02.tpl',
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
function content_5ce3aed9623816_95721259 ($_smarty_tpl) {
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
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/">タイのイベント情報</a></li>
		<li>ロイ・クラトン・フェスティバル</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>ロイ・クラトン・フェスティバル</h1>
		<div class="mcBox">
			<div class="page-box">
				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/event/event_img01.jpg" alt="" width="665" height="400">
				<p>
					毎年太陰暦で12月の満月の夜に、タイ全土で行われるお祭り「ロイクラトン」。
					<em>「ロイ＝流す」「クラトン＝灯篭」</em>という意味で、水の精霊に感謝して灯篭を流す行事なのですが、
					夜空に輝く満月と海や川にほんのり灯る光のラインがとても幻想的で、温かでロマンチックな気分にさせてくれます。
				</p>
				<p>
					ロイクラトンといえば<em>スコータイ。</em>歴史公園内で催されるお祭りは有名で、毎年多くの人が訪れます。スコータイ遺跡の中でも特に有名なワット･マハタートの前にステージが設けられて、<em>音と光の豪華絢爛歴史絵巻</em>が繰り広げられます。
					スコータイ遺跡に行くなら、どうぞこの機会をお見逃しなく！
				</p>
			</div>
		</div>
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
