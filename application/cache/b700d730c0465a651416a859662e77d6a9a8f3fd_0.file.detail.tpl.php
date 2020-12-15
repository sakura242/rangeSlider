<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:05:37
  from "/home/dev0006/www/thai-lover/production/application/views/pc/music/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27bf1838823_58058330',
  'file_dependency' => 
  array (
    'b700d730c0465a651416a859662e77d6a9a8f3fd' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/music/detail.tpl',
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
function content_5ce27bf1838823_58058330 ($_smarty_tpl) {
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
music/">タイミュージック</a></li>
		<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song_thai'])===null||$tmp==='' ? '' : $tmp);?>
 [<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song'])===null||$tmp==='' ? '' : $tmp);?>
]</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>タイミュージック</h1>
		<div class="mcBox mcb">
			<section>
				<div class="inBox font">
					<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song_thai'])===null||$tmp==='' ? '' : $tmp);?>
 [<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song'])===null||$tmp==='' ? '' : $tmp);?>
]</h2>
					<div class="subBox">
						<p>Song：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song'])===null||$tmp==='' ? '' : $tmp);?>
</p>
						<p>Artist：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['singer'])===null||$tmp==='' ? '' : $tmp);?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['year'])===null||$tmp==='' ? '' : $tmp);?>
年)</p>
						<iframe width="660" height="371" src="https://www.youtube.com/embed/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['guide'])===null||$tmp==='' ? '' : $tmp);?>
</p>
					</div>
					<div class="translation pt10">
						<ul class="menuTab">
							<li class="read_t"><a href="#mean1">タイ語</a></li>
							<li class="read_e"><a href="#mean2">読み</a></li>
							<li class="read_k"><a href="#mean3">カナ読み</a></li>
							<li class="read_j"><a href="#mean4">和訳</a></li>
						</ul>
					</div>
					<div class="musicBox pb20">
						<div class="read" id="mean1">
							<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_thai']))===null||$tmp==='' ? '' : $tmp);?>

						</div>
						<div class="read" id="mean2">
							<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_read']))===null||$tmp==='' ? '' : $tmp);?>

						</div>
						<div class="read" id="mean3">
							<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_kanaread']))===null||$tmp==='' ? '' : $tmp);?>

						</div>
						<div class="read" id="mean4">
							<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_translation']))===null||$tmp==='' ? '' : $tmp);?>

						</div>
					</div>
					<div class="flexslider">
						<ul class="slides">
							<?php if (!empty($_smarty_tpl->tpl_vars['other']->value)) {?>
							<li>
								<iframe width="267" height="150" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['other']->value['url'];?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
								<div>
									<dl>
										<dt>Song (<?php echo $_smarty_tpl->tpl_vars['other']->value['year'];?>
年)</dt><dd><?php echo $_smarty_tpl->tpl_vars['other']->value['song_thai'];?>
 [<?php echo $_smarty_tpl->tpl_vars['other']->value['song'];?>
]</dd>
										<dt class="pt10">Arttist</dt><dd><?php echo $_smarty_tpl->tpl_vars['other']->value['singer'];?>
</dd>
									</dl>
									<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/detail/<?php echo sprintf('%03d',$_smarty_tpl->tpl_vars['other']->value['id']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/click_btn.png" alt="click!!" width="200" height="40"></a></p>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
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

	$("document").ready(function(){
		$('.single-item').slick();
	});

	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: 'slide',
			randomize: true,
			slideshowSpeed: 2500,
			animationSpeed: 600,
			controlNav: false,
			prevText: "",
			nextText: ""
		});
	});
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
