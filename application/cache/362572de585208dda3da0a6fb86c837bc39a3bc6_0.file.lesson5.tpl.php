<?php
/* Smarty version 3.1.29, created on 2019-05-25 17:37:25
  from "/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson5.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce8fec5d34284_05455910',
  'file_dependency' => 
  array (
    '362572de585208dda3da0a6fb86c837bc39a3bc6' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson5.tpl',
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
function content_5ce8fec5d34284_05455910 ($_smarty_tpl) {
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
				<h1>Lesson5<br>タクシー編</h1>
				<div class="mcBox pt10">
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
			</section>
		</div>
	</div><!-- / CONTENTS -->
</div>
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
