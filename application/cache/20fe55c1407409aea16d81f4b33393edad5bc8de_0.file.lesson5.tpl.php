<?php
/* Smarty version 3.1.29, created on 2019-05-25 21:50:49
  from "/home/dev0006/www/thai-lover/production/application/views/pc/lecture/lesson5.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce93a299158a4_89561406',
  'file_dependency' => 
  array (
    '20fe55c1407409aea16d81f4b33393edad5bc8de' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/lecture/lesson5.tpl',
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
function content_5ce93a299158a4_89561406 ($_smarty_tpl) {
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
		<li>Lesson5：タクシー編</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<article class="page">
		<h1>Lesson5：タクシー編</h1>
		<div class="lessonBox pt10">
			<section>
				<h2><span class="tl"></span>どこへ行きますか？</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>パイ ナイ？</small>ไป ไหน</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice77.mp3');">
							
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>～に行ってくれますか？</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>チュアイ パーイ ティー (場所名)？</small>ช่วย ไป ที่ ○○</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice78.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>～に行きたい</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ヤー(ク) パイ ティー (場所名)</small>อยาก ไป ที่ ○○</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice79.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>（指をさしながら）ここに行きたい</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ヤー(ク) パイ ティー ニー</small>อยาก ไป ที่ นี่</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice80.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>（タクシー）メーター使って</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>チャイ ミトゥー ノイ</small>ใช้ มิเตอร์ หน่อย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice81.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>右に曲がって</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>リアウ クワー</small>เลี้ยว ขวา</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice82.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>左に曲がって</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>リアウ サーイ</small>เลี้ยว ซ้าย</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice83.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>ここで停めて</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>ジョーッ(ット) ロン(グ) ティー ニー</small>จอด ลง ที่ นี่</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice84.mp3');">
						</div>
					</div>
				</div>
			</section>
			<section>
				<h2><span class="tl"></span>まっすぐ進んで！</h2>
				<div class="inBox font">
					<div class="subBox">
						<div class="thaiBox">
							<p class="textBox"><span><small>トロン(グ) パイ！</small>ตรง ไป</span></p>
							<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice85.mp3');">
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
