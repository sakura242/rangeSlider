<?php
/* Smarty version 3.1.29, created on 2019-05-27 17:39:37
  from "/home/dev0006/www/thai-lover/production/application/views/pc/lecture/lesson8.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ceba2490e8e59_22884947',
  'file_dependency' => 
  array (
    'ce1cc66f26e956aa05b0ff06bdca6d02c9e9cb75' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/lecture/lesson8.tpl',
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
function content_5ceba2490e8e59_22884947 ($_smarty_tpl) {
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
lecture/">タイ語レクチャー</a></li>
		<li>Lesson8：緊急編</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<article class="page">
		<h1>Lesson8：緊急編</h1>
		<div class="lessonBox pt10">
			<section>
				<h2><span class="tl"></span>助けて！</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>チュアイ ドゥアイ</small>ช่วย ด้วย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice103.mp3');">
							
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>ちょっと助けて（手伝って）くれませんか？</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>チュアイ ハイノイ</small>ช่วย หน่อย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice104.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>警察を呼んでください</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>リアック タムルアッ（ト） ハイノイ</small>เรียก ตำรวจ หน่อย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice105.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>医者を呼んでください</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>リアック モー ハイノイ</small>เรียก หมอ หน่อย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice106.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>救急車を呼んでください</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>リアック ロッ（ド）パヤバーン ハイノイ</small>เรียก รถพยาบาล หน่อย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice107.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>携帯電話をホテルに忘れました</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ルーム トーラサッ（プ）ムゥートゥーゥ<br>ティー ロン（グ）レァーム</small>ลืม โทรศัพท์มือถือ ที่ โรงแรม</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice109.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>財布を部屋に忘れた！</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ルーム グラパオ サターン（グ）<br>ティー ホン（グ）</small>ผม ลืม กระเป๋า สตางค์ ที่ ห้อง</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice110.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>パスポートをなくしました</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>パスポーッ（ト） ハーイ</small>พาสปอร์ต หาย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice111.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>財布をなくしました</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>グラパオ サターン（グ） ハーイ</small>กระเป๋า สตางค์ หาย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice112.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>パスポートを盗まれました</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>パスポーッ（ト） トゥーク カモーイ</small>พาสปอร์ต ถูก ขโมย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice113.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>財布を盗まれました</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>グラパオ サターン（グ） トゥークカモーイ</small>กระเป๋า สตางค์ ถูก ขโมย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice114.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>どうしたの？</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ペン アライ</small>เป็น อะไร</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice115.mp3');">
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="mcBoxbottom"></div>
	</article>
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
