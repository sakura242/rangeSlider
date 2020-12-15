<?php
/* Smarty version 3.1.29, created on 2019-05-24 18:16:30
  from "/home/dev0006/www/thai-lover/production/application/views/pc/event/event01.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce7b66ed07cb0_00350107',
  'file_dependency' => 
  array (
    'b1817f5dc8d1a8cc6ba7810a855897019913a9de' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/event/event01.tpl',
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
function content_5ce7b66ed07cb0_00350107 ($_smarty_tpl) {
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
		<li>ソンクラーン・フェスティバル</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>ソンクラーン・フェスティバル</h1>
		<div class="mcBox">
			<div class="page-box">
				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/event/event_img02.jpg" alt="" width="665" height="400">
				<p>
					一年で最も暑い時期、<em>毎年4月13日～4月15日</em>に行われる「ソンクラーン・フェスティバル」 Songkran Festival。<em>別名「水掛け祭り」</em>と呼ばれ、別ページで紹介している「ロイ・クラトン・フェスティバル」と共に、タイのお祭りとしてはとても有名です。
					タイの事をあまり知らないという人でもこの「ソンクラーンフェスティバル」や「水掛け祭り」という言葉は聞いたことがある！という方も多いようですね。
				</p>
				</p>
					このソンクラーン・フェスティバルの時期はタイではお正月を意味し、前夜の4月12日には（日本の大晦日のように）大掃除をするとかしないとか。
					海外からの旅行客含め、街中はもうそれは凄い人達でごった返しで水をかけ合い、お祭りに参加する人は<em>ずぶ濡れになる事必至！</em>十分覚悟してくださいね～♪
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
