<?php
/* Smarty version 3.1.29, created on 2019-06-02 18:37:51
  from "/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson7.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cf398ef8248c7_93292952',
  'file_dependency' => 
  array (
    '3f3ba18620efe5f30ab48dc6d1d1f4eedbfcb293' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson7.tpl',
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
function content_5cf398ef8248c7_93292952 ($_smarty_tpl) {
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
				<h1>Lesson7：レストラン編</h1>
				<div class="mcBox">
					<section>
						<h2><span class="tl"></span>メニューを見せてください</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォーッ ドゥー メーヌー ノイ</small>ขอ ดู เมนู หน่อย</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice92.mp3');">
									
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>注文お願いします</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>サン(グ) アーハーン</small>สั่ง อาหาร</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice93.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>何がオススメですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ミー アーハーン アライ ネナム バーン(グ)</small>มี อาหาร อะไร แนะนำ บ้าง</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice94.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>お水ください</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォーッ ナーム</small>ขอ น้ำ</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice95.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>辛くしないでください</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ヤー タ（ム）ペッ（ド）</small>อย่า ทำ เผ็ด</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice96.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>おいしい</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>アロイ</small>อร่อย</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice97.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>からい！</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ペッ（ド）</small>เผ็ด</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice98.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>お腹いっぱい</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>イム レァーウ</small>อิ่ม แล้ว</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice99.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>お会計をお願いします</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>チェックビン</small>เช็กบิล</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice100.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>領収書をください。</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォーッ バイセッ(ト) ノイ</small>ขอ ใบเสร็ หน่อย</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice101.mp3');">
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
