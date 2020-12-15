<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:05:24
  from "/home/dev0006/www/thai-lover/production/application/views/pc/music/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27be4b760d5_82024164',
  'file_dependency' => 
  array (
    '74d2bc4f35370451db54ad70a239a4c80353a204' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/music/index.tpl',
      1 => 1558344464,
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
function content_5ce27be4b760d5_82024164 ($_smarty_tpl) {
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
		<li>タイミュージック</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>タイミュージック</h1>
		<div class="mcBox mcb">
			<div class="page-box">
				<p class="page-ttl">今タイで流行っている曲をピックアップ！<br>モテること間違いなし!!</p>
				<p>知らない日本の曲を話のネタにするよりも、現地で流行っている曲をネタに話したり、歌ってあげれば女の子たちの高感度もアップ！！女の子との距離がぐっと近くなる事間違いなし！？</p>
			</div>
			<section>
				<div class="inBox font">
					<h2>タイミュージック一覧</h2>
					
					<div class="listBox">
						<div class=" selection page1">
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
									<iframe width="267" height="150" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<div>
										<dl>
											<dt>Song (<?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
年)</dt><dd><?php echo $_smarty_tpl->tpl_vars['item']->value['song_thai'];?>
 [<?php echo $_smarty_tpl->tpl_vars['item']->value['song'];?>
]</dd>
											<dt class="pt10">Artist</dt><dd><?php echo $_smarty_tpl->tpl_vars['item']->value['singer'];?>
</dd>
										</dl>
										<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/detail/<?php echo sprintf('%03d',$_smarty_tpl->tpl_vars['item']->value['id']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/click_btn.png" alt="詳細はこちら" width="200" height="40"></a></p>
									</div>
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
					<div class="pageNation pb10"></div>
				</div>
			</section>
			
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

<?php echo '<script'; ?>
>
//<![CDATA[
$(function(){
	$('.read:first').show();
	$('.menuTab li:first').addClass('active');
	$('.menuTab li').click(function() {
		$('.menuTab li').removeClass('active');
		$(this).addClass('active');
		$('.read').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});

function show(pageNumber) {
	var page=".page"+pageNumber;
	$('.selection').hide()
	$(page).fadeIn()
}

$(function() {
	$('.pageNation').pagination({
		items: 1,					//ページングの数
		prevText: '<<',				//前へのリンクテキスト
		nextText: '>>',				//次へのリンクテキスト
		cssStyle: 'dark-theme',		//テーマ light-theme dark-theme compact-theme
		onPageClick: function(pageNumber){show(pageNumber)}
	})
});

//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
