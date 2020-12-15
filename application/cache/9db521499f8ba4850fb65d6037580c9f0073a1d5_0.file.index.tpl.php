<?php
/* Smarty version 3.1.29, created on 2019-05-23 21:42:43
  from "/home/dev0006/www/thai-lover/production/application/views/sp/music/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce69543de0a36_41655462',
  'file_dependency' => 
  array (
    '9db521499f8ba4850fb65d6037580c9f0073a1d5' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/music/index.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sp/include/head.tpl' => 1,
    'file:sp/include/header.tpl' => 1,
    'file:sp/include/footer.tpl' => 1,
    'file:sp/include/common.tpl' => 1,
  ),
),false)) {
function content_5ce69543de0a36_41655462 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
"<?php }?>>
<!-- FRAME -->
<div id="frame">
<!-- HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / HEADER -->
<!-- FRAME -->
<div id="wrap">
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>タイミュージック一覧</h1>
		<div class="mcBox">
			<div class="page-box">
				<div class="inBox font">
					<p class="pageTitle">今タイで流行っている曲をピックアップ！<br>モテること間違いなし!!</p>
					<p>知らない日本の曲を話のネタにするよりも、現地で流行っている曲をネタに話したり、歌ってあげれば女の子たちの高感度もアップ！！女の子との距離がぐっと近くなる事間違いなし！？</p>
				</div>
			</div>
			<section>
				<h2><span class="tl"></span>タイミュージック</h2>
				<div class="inner font">
					<div class="subBox">
						<p class="pt10">タイで流行っている曲をピックアップ！</p>
						<div class="musicBox">
							<ul>
								<?php
$_from = $_smarty_tpl->tpl_vars['music_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/detail/<?php echo sprintf('%03d',$_smarty_tpl->tpl_vars['item']->value['id']);?>
">
										<div>
											<img src="http://i.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
/default.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['singer'];?>
" class="img-width-100">
										</div>
										<dl>
											<dt>Song(<?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
)</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['item']->value['song_thai'];?>
<br>[<?php echo $_smarty_tpl->tpl_vars['item']->value['song'];?>
]</dd>
											<dt class="pt5">Artist</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['item']->value['singer'];?>
</dd>
										</dl>
									</a>
								</li>
								<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="mcBoxbottom"></div>
	</section>
</div>
</div>
</div><!-- / CONTENTS -->
</div><!-- / FRAME -->
<footer id="globalFooter"><!-- FOOTER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</footer><!-- / FOOTER -->
<div id="topButton"><p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/page_top.png" alt="ページトップへ"></p></div>
<div id="footer_banner">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/top_about_btn.png" alt="資料請求まずはこちらから"></a></p>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
