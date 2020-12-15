<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:28:28
  from "/home/dev0006/www/thai-lover/production/application/views/sp/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce37e6c32a374_07987092',
  'file_dependency' => 
  array (
    '3419fa3412590c3131f0cf7a93e5037425e8d1ee' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/index.tpl',
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
function content_5ce37e6c32a374_07987092 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body id="home">
<!-- FRAME -->
<div id="wrap">
<!-- HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / HEADER -->
<div id="contents"><!-- CONTENTS -->
	<div class="slider">
		<ul class="slides">
			<li class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_slider01.png" alt="このサイトを見ればすべてがわかる！タイの夜遊びスポットを紹介する情報検索サイト「たいらぶ」"></a></li>
			<li class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_slider02.png" alt="初心者から上級者まで使える究極の攻略以ガイドがここに！"></a></li>
			
			<li class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_slider04.png" alt="通じるかどうかなんて関係ない！話す努力が女の子の心を動かす！"></a></li>
			<li class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_slider05.png" alt="タイ旅行に行く前にチェックすべき、基本情報をまとめてご紹介します♪"></a></li>
		</ul>
	</div>
	<section class="mc">
		<div><h2 class="hIcon tIcon1"><span class="tl"></span>たいらぶとは</h2></div>
			<dl class="thailove-about">
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_thailove_word1.png" alt="タイ風俗で失敗しない遊び方を教えます"></dt>
				<dd>
					せっかく日本を離れてタイに来たんだから、タイの風俗でスペシャルな体験をして帰りたい！そんなあなたの欲望を叶える情報が満載！夜遊びスポットをお探しの方はこの『たいらぶ』サイトにお任せ♪
					夜遊びは、ゴーゴーバー、カラオケ、マッサージ、マッサージパーラー、メンズスパなどで厳選されたお店のみご紹介。存分に当サイト『たいらぶ』を活用して、忘れられない夜のフライトを満喫しよう。
					タイならではのめくるめく夜を味わったら、もう日本には帰れない！？
				</dd>
			</dl>
	</section>
	<section class="mc">
		<div><h2 class="hIcon tIcon2"><span class="tl"></span>お店検索 / ジャンル検索</h2></div>
		<div class="searchBox">
			<div class="open cf">
				<ul>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_gogo.png" alt="ゴーゴーバー検索"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_karaoke.png" alt="カラオケ検索"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_massage.png" alt="マッサージ検索"></a></li>
				</ul>
				<ul>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_mp.png" alt="ＭＰ検索"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_coyote.png" alt="コヨーテ検索"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/night/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search_btn_night.png" alt="ナイトスポット検索"></a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="mc cf">
		<div><h2 class="hIcon tIcon3"><span class="tl"></span>PIUK UP GIRL</h2></div>
		<div class="mcBox">
			<div class="list-box">
				<ul>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/baccara/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img155.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="gogo">ゴーゴーバー</td>
									</tr>
									<tr>
										<td>Baccara</td>
									</tr>
									<tr>
										<td>NOK</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/cowboy/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img05.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="gogo">ゴーゴーバー</td>
									</tr>
									<tr>
										<td>カーボーイ2</td>
									</tr>
									<tr>
										<td>MIUMIU</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/shark/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img144.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="gogo">ゴーゴーバー</td>
									</tr>
									<tr>
										<td>シャーク</td>
									</tr>
									<tr>
										<td>RIAN</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/f1/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img156.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="karaoke">カラオケ</td>
									</tr>
									<tr>
										<td>CLUB F1</td>
									</tr>
									<tr>
										<td>AMP</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/mermaid/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img45.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="karaoke">カラオケ</td>
									</tr>
									<tr>
										<td>Mermaid</td>
									</tr>
									<tr>
										<td>NAM</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/playgirl/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img153.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="karaoke">カラオケ</td>
									</tr>
									<tr>
										<td>playgirl</td>
									</tr>
									<tr>
										<td>PANG</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/angel/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img150.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massage">マッサージ</td>
									</tr>
									<tr>
										<td>Angel</td>
									</tr>
									<tr>
										<td>KATEE</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/paradise/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img152.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massage">マッサージ</td>
									</tr>
									<tr>
										<td>Paradise</td>
									</tr>
									<tr>
										<td>MAY</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/otemachi/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img75.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massage">マッサージ</td>
									</tr>
									<tr>
										<td>大手町商事</td>
									</tr>
									<tr>
										<td>NATARE</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/poseidon/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img139.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massageP">ＭＰ</td>
									</tr>
									<tr>
										<td>poseidon</td>
									</tr>
									<tr>
										<td>MOMO</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/nataree/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img129.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massageP">ＭＰ</td>
									</tr>
									<tr>
										<td>nataree</td>
									</tr>
									<tr>
										<td>KITTY</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/labelle/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img147.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="massageP">ＭＰ</td>
									</tr>
									<tr>
										<td>labelle</td>
									</tr>
									<tr>
										<td>DAIDAI</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/florence/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img106.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="coyote">コヨーテ</td>
									</tr>
									<tr>
										<td>FLORENCE</td>
									</tr>
									<tr>
										<td>NING</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/pimp/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img134.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="coyote">コヨーテ</td>
									</tr>
									<tr>
										<td>PIMP</td>
									</tr>
									<tr>
										<td>CARROT</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/cezch/">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img127.jpg" alt="" width="146">
							<table>
								<tbody>
									<tr>
										<td class="coyote">コヨーテ</td>
									</tr>
									<tr>
										<td>CEZCH</td>
									</tr>
									<tr>
										<td>PEACH</td>
									</tr>
								</tbody>
							</table>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="top_bunner">
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_strategyr_banner.png" alt="初心者から上級者まで使える究極の攻略ガイド"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_info_banner.png" alt="初めての方でも安心！タイの基本情報"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_music_banner.png" alt="タイミュージック"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_lecture_banner.png" alt="タイ語レクチャー"></a></li>
		</ul>
	</div>
	<section class="mc">
		<div><h2 class="hIcon tIcon4"><span class="tl"></span>タイのイベント情報</h2></div>
		<div class="mcBox">
			<div class="inBox font">
				<div class="newsBox">
					<ul>
						<li>
							<time datetime="2015-10-12">
								<p>2015年4月13日</p>
								<p>ソンクラーン・フェスティバル</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/event01/">最も暑くなる４月に、有名な「ソンクラーンフェスティバル」（別名「水掛け祭り」）をご紹介！</a>
							</time>
						</li>
						<li>
							<time datetime="2015-10-12">
								<p>2015年10月12日</p>
								<p>ロイ・クラトン・フェスティバル</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/event02">日本でいう「灯篭流し」のようなもので、陰暦１２月（毎年１１月）の満月の夜に行われます。</a>
							</time>
						</li>
					</ul>
					<p class="pageBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/home_events_btn.png" alt="イベント情報はこちら"></a></p>
				</div>
			</div>
		</div>
	</section>

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


<?php echo '<script'; ?>
>
//<![CDATA[
$(function() {
	$('.slider').glide({
		autoplay: 5000,
		hoverpause: false,
		arrows : false
	});

	$('.list-box>ul').carouFredSel({
		items : 3,
		width : 320,
		auto : 3000,
		scroll : {
			items: 1,
			duration : 1000,
		}
	});
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
