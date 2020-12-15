<?php
/* Smarty version 3.1.29, created on 2019-05-22 21:48:20
  from "/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce545149e0cd7_31212855',
  'file_dependency' => 
  array (
    'f4b9f3848f859bdb5895529e0ed1456a97a62727' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson1.tpl',
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
function content_5ce545149e0cd7_31212855 ($_smarty_tpl) {
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
				<h1>Lesson1<br>あいさつ</h1>
				<div class="mcBox pt10">
					<section>
						<h2><span class="tl"></span>～です</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>クラップ</small>ครับ</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice01.mp3');">
									<div class="wordBox">
										<p>
											タイ語では、言葉の最後に「クラップ」を付けるのが基本です。日本語で言うところの「～です」「～ます」と同じ感じですね♪
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>おはよう、こんにちわ、こんばんわ、さようなら</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>サワッディー</small>สวัสด</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice02.mp3');">
									<div class="wordBox">
										<p>
											タイ語は日本語と違い「おはよう」・「こんにちわ」・「こんばんわ」・「さようなら」がすべて同じ表現になっています。一日中使えて便利ですねぇ～♪
											「さようなら」があいさつと同じのは混乱しますが、「Good Bye / Bye」でも十分通じます(^_^)
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>ありがとう</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォーップン</small>ขอบคุณ</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice03.mp3');">
									<div class="wordBox">
										<p>
											ありがとうも、もちろん「Thank you」でも通じますが、合掌(手を合わせる)しながら「コップンカップ」というとタイ通に見えます(笑)自国の言葉でありがとうと言われると悪い気がしないものですよね。
											女の子とじゃれあってみるのもいいかもしれませんね☆
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>ごめんなさい</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォートーッ</small>ขอโทษ</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice04.mp3');">
									<div class="wordBox">
										<p>
											女の子とじゃれあって、行き過ぎた時に使ってみるといいかも☆
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>大丈夫、気にしないで、どういたしまして</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>マイ ペンライ</small>ไม่ เป็นไร</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice05.mp3');">
									<div class="wordBox">
										<p>
											これはとても覚えやすい表現の一つですね☆英語でいうところの「Don't worry」です。
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>元気ですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>サバーイ ディー マイ</small>สบายดี ไหม</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice06.mp3');">
									<div class="wordBox">
										<p>
											สบาย（サバーイ）はタイ人がよく使う言葉で「心地いい、気持ちいい」という意味です。ค่ะ（ディー）は英語の「good」です。
										</p>
									</div>
									<div class="thaiBox fl">
										<p class="textBox"><span><small>サバーイ ディー</small>สบาย ดี<small class="yel">「はい、元気です」</small></span></p>
										<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice07.mp3');">
									</div>
									<div class="thaiBox fr">
										<p class="textBox"><span><small>マイ サバーイ</small>ไม่ สบาย<small class="yel">「元気じゃないです」</small></span></p>
										<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice08.mp3');">
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>お元気で,幸運を！</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>チョーク ディー</small>โชค ดี</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice09.mp3');">
									<div class="wordBox">
										<p>
											โชค（チョーク）は、「運」、ดี（ディー）は「良い」で、โชคดี（チョークディー）で、「幸運」の意味なります。英語の「Good Luck!」と同じく、別れ際に使って「幸運を！、バイバイ、お元気で」の意味です。
										</p>
									</div>
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
