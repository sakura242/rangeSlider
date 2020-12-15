<?php
/* Smarty version 3.1.29, created on 2019-05-25 12:10:44
  from "/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce8b234991d77_47622436',
  'file_dependency' => 
  array (
    '55723209e942cdb6712abda79bea40d2677142f2' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/lecture/lesson2.tpl',
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
function content_5ce8b234991d77_47622436 ($_smarty_tpl) {
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
				<h1>Lesson2<br>簡単な質問と答え</h1>
				<div class="mcBox pt10">
					<div class="page-box">
						<div class="inBox font">
							<p>
								挨拶を交わした次は自己紹介！女の子のいるお店だと、最初は女の子の方から質問されることが多いと思います。 そんなときに役立つタイ語をピックアップしたので是非ご活用ください！
							</p>
						</div>
					</div>
					<section>
						<h2><span class="tl"></span>あなたの名前は何ですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>クン チュー アライ</small>คุณ ชื่อ อะไร</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice10.mp3');">
									<div class="wordBox">
										<p>
											『クン チュー アライ？』・・・・あなたの名前は何ですか？です。
											文法的には丁寧な言い方ですが『チュー アライ』で名前は何？なので、これで十分。
											クン（あなた） チュー（名前） アライ（何）
											これを省略して チュー（名前） アライ（何）ですね。
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>私の名前は○○です。</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ポム チュー ○○</small>ผม ชื่อ○○</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice11.mp3');">
									<div class="wordBox">
										<p>
											きっとこのタイ語で名前を聞いたら、彼女も『チューアライ？』と聞いて来るでしょう。
											そしたら・・・『ポム　（チュー）　○○』と自分の名前もこたえてあげましょう！
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>あなたの年齢は？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>アーユ タオライ</small>อายุ เท่าไร</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice12.mp3');">
									<div class="wordBox">
										<p>
											すぐに聞いても嫌な顔はされないけれど、会ってすぐに女性に年齢を聞くのは失礼ですよね。
											和気あいあいになってから聞くのがの礼儀です！
										</p>
									</div>
									<p class="exText"><span><small>アーユ イーシップサーム</small>อายุ ยี่สิบสาม<small class="yel">「23歳です」</small></span></p>
									<p class="exText"><span><small>ターイ アーユ ノイ？</small>ทาย อายุ หน่อย<small class="yel">「何歳に見える？」</small></span></p>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>ここはどこですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ティーニー ティー ナイ</small>ที่นี่ ที่ ไหน</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice15.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>トイレはどこですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ホングナーム ユー ティー ナイ</small>ห้องน้ำ อยู่ ที่ ไหน</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice16.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>写真を撮ってもいいですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>コォーォ ターイループ クン ダーイマイ</small>ขอ ถ่าย รูป คุณ ได้ไหม</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice17.mp3');">
								</div>
								<div class="thaiBox fl">
									<p class="textBox"><span><small>ダーイ</small>ได<em>「いいよ」</em></span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice18.mp3');">
								</div>
								<div class="thaiBox fl">
									<p class="textBox"><span><small>マイダーイ</small>ไม่ได้<em>「ダメです」</em></span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice19.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>写真をとってもらえますか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>チュアイ ターイ ループ ハイノイ</small>ช่วย ถ่าย รูป ให้ หน่อย</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice20.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>タバコを吸ってもいいですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>スーッブリー ダーイマイ</small>สูบบุหรี่ ได้ไหม</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice21.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>いくらですか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>タウライ？</small>เท่าไร</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice22.mp3');">
									<div class="wordBox">
										<p>
											言われた金額が高いと思ったら・・・『ペーン』高いよ！
											『ロッ(ト)・ダイ・マイ？』安くならない？と値切ってもいいかもですね。あまり値切ると・・・『キーニャオ』（ケチ）と言われ・・・嫌われますｗ
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>これが欲しいんですが</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>アウ アンニーィ</small>เอา อันนี้</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice23.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>（値段を）まけてもらえますか？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ロット （ラーカー） ダーイ マイ</small>ลด (ราคา) ได้ไหม</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice24.mp3');">
								</div>
								<div class="thaiBox">
									<p class="textBox"><span><small>ダーイ</small>ได้<em>「いいよ」</em></span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice18.mp3');">
								</div>
								<div class="thaiBox">
									<p class="textBox"><span><small>マイダーイ</small>ไม่ ได<em>「ダメです」</em></span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice19.mp3');">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>どこから来たの？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>マー ジャーク ナイ</small>มา จาก ไหน</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice25.mp3');">
									<div class="wordBox">
										<p>
											おしゃべり好きな女の子なら、色々と話しかけてくれますが・・・
											どこから来たの？っていうのが定番ですね。ほとんどの子が英語で聞いてきます。
											そこで、一発タイ語をかましてやりましょう！『ポム マー ジャー　イープン』日本から来ました
											え～！タイ語しゃべれるの～？と言われたら・・・『マイ ダイ・・・』出来ないよ・・・とタイ語で返しちゃうってのはどうでしょう！
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2><span class="tl"></span>覚えてる？</h2>
						<div class="inBox font">
							<div class="subBox">
								<div class="thaiBox">
									<p class="textBox"><span><small>ジャム ダーイ マイ</small>จำ ได้ ไหม</span></p>
									<input type="button" name="ts" value="" class="click voiceBtn" onclick="Sound.playSound('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
audio/voice26.mp3');">
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
