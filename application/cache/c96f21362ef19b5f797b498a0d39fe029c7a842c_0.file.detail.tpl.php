<?php
/* Smarty version 3.1.29, created on 2019-05-24 19:26:01
  from "/home/dev0006/www/thai-lover/production/application/views/sp/music/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce7c6b9e1ae83_22253485',
  'file_dependency' => 
  array (
    'c96f21362ef19b5f797b498a0d39fe029c7a842c' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/music/detail.tpl',
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
function content_5ce7c6b9e1ae83_22253485 ($_smarty_tpl) {
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
		<h1>タイミュージック</h1>
		<div class="mcBox">
			<section class="pt20">
				<h2 id="1"><span class="tl"></span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song_thai'])===null||$tmp==='' ? '' : $tmp);?>
<br>[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song'])===null||$tmp==='' ? '' : $tmp);?>
]</h2>
				<div class="inBox font">
					<div class="subBox cf">
						<dl>
							<dt>Song</dt>
							<dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song_thai'])===null||$tmp==='' ? '' : $tmp);?>
 [<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['song'])===null||$tmp==='' ? '' : $tmp);?>
]</dd>
							<dt class="pt5">Artist</dt>
							<dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['singer']->value)===null||$tmp==='' ? '' : $tmp);?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['year'])===null||$tmp==='' ? '' : $tmp);?>
年)</dd>
						</dl>
						<iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['music']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
						<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['guide']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
					</div>
				</div>
			</section>
			<section>
				<div class="accordion">
					<ul class="accordion_head">
						<li>
							<h3>タイ語<span></span></h3>
							<div class="open cf">
								<div class="inBox font">
									<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_thai']))===null||$tmp==='' ? '' : $tmp);?>

								</div>
							</div>
						</li>
						<li>
							<h3>読み<span></span></h3>
							<div class="open cf">
								<div class="inBox font">
									<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_read']))===null||$tmp==='' ? '' : $tmp);?>

								</div>
							</div>
						</li>
						<li>
							<h3>カナ読み<span></span></h3>
							<div class="open cf">
								<div class="inBox font">
									<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_kanaread']))===null||$tmp==='' ? '' : $tmp);?>

								</div>
							</div>
						</li>
						<li>
							<h3>和訳<span></span></h3>
							<div class="open cf">
								<div class="inBox font">
									<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['music']->value['lyrics_translation']))===null||$tmp==='' ? '' : $tmp);?>

								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="musicBox mt20">
					<ul>
						<?php if (!empty($_smarty_tpl->tpl_vars['other']->value)) {?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/detail/<?php echo sprintf('%03d',$_smarty_tpl->tpl_vars['other']->value['id']);?>
">
								<div>
									<img src="http://i.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['other']->value['url'];?>
/default.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['other']->value['singer'];?>
" class="img-width-100">
								</div>
								<dl>
									<dt>Song (<?php echo $_smarty_tpl->tpl_vars['other']->value['year'];?>
)</dt>
									<dd><?php echo $_smarty_tpl->tpl_vars['other']->value['song_thai'];?>
<br>[<?php echo $_smarty_tpl->tpl_vars['other']->value['song'];?>
]</dd>
									<dt class="pt5">Artist</dt>
									<dd><?php echo $_smarty_tpl->tpl_vars['other']->value['singer'];?>
</dd>
								</dl>
							</a>
						</li>
						<?php }?>
					</ul>
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
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

<?php echo '<script'; ?>
>
//<![CDATA[
$(function(){
	$('a[href^=#]').click(function() {
		var speed = 600;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top + 0;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});

$(function(){
	var accordionItem=$('.accordion');
	accordionItem.find('.open').hide();
	accordionItem.find('h3').click(function() {
		$(this).toggleClass('active');
		var hitItem = $(this).next();
		var openItem = hitItem.siblings('.open:visible');
		if (openItem.length) {
			openItem.prev().removeClass('active');
			openItem.slideUp('farst',function() {
				hitItem.slideToggle('farst');
			});
		} else {
			hitItem.slideToggle('farst');
		}
	});
	accordionItem.find('h3').hover(function() {
		$(this).toggleClass('hover');
	});
});
//]]>
<?php echo '</script'; ?>
>

</html><?php }
}
