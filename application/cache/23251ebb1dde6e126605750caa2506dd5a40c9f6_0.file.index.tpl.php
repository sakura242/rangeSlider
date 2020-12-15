<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:03:19
  from "/home/dev0006/www/thai-lover/production/application/views/pc/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27b6742aca4_58351996',
  'file_dependency' => 
  array (
    '23251ebb1dde6e126605750caa2506dd5a40c9f6' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/index.tpl',
      1 => 1558344463,
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
function content_5ce27b6742aca4_58351996 ($_smarty_tpl) {
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
	<div class="main">
		<div id="sliderArea">
			<div class="sliderBox">
				<ul id="slider" class="slider">
					<li class="slide1"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/thailove.gif" alt="たいらぶとは" width="690" height="300"></a></li>
					<li class="slide2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/thailove.gif" alt="攻略ガイド" width="690" height="300"></a></li>
					<li class="slide4"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/thailove.gif" alt="タイ語レクチャー" width="690" height="300"></a></li>
					<li class="slide5"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/thailove.gif" alt="タイの基本情報" width="690" height="300"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="contents"><!-- CONTENTS -->
	<section class="mc" id="thai-love">
		<div><h2 class="hIcon tIcon1"><span></span>たいらぶとは</h2></div>
		<div class="mcBox">
			<dl class="thailove-about">
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_thailove_word1.png" alt="タイ風俗で失敗しない遊び方を教えます！" width="493" height="35"></dt>
				<dd>
					せっかく日本を離れてタイに来たんだから、タイの風俗でスペシャルな体験をして帰りたい！そんなあなたの欲望を叶える情報が満載！夜遊びスポットをお探しの方はこの『たいらぶ』サイトにお任せ♪
					夜遊びは、ゴーゴーバー、カラオケ、マッサージ、マッサージパーラー、メンズスパなどで厳選されたお店のみご紹介。存分に当サイト『たいらぶ』を活用して、忘れられない夜のフライトを満喫しよう。
					タイならではのめくるめく夜を味わったら、もう日本には帰れない！？
				</dd>
			</dl>
		</div>
	</section>
	<section class="mc">
		<div><h2 class="hIcon tIcon2"><span></span>お店検索</h2></div>
		<div class="mcBox">
			<div class="font">
				<ul class="search-btn cf">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_gogo.png" alt="ゴーゴーバー" width="101" height="101"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_karaoke.png" alt="カラオケ" width="101" height="101"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_massage.png" alt="マッサージ" width="101" height="101"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_mp.png" alt="マッサージパーラ" width="101" height="101"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_coyote.png" alt="コヨーテ" width="101" height="101"></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/night/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/top_btn_night.png" alt="ナイトスポット" width="101" height="101"></a></li>
					
				</ul>
			</div>
		</div>
	</section>
	<section class="mc">
		<div><h2 class="hIcon tIcon3"><span></span>PICK UP GIRL</h2></div>
		<div class="mcBox">
			<div class="inBox girls font">
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
		</div>
	</section>
	<div class="thaiMenuList">
		<ul class="thaiTab">
			<li class="thaiPlan1"><a href="#thaiMenu1">ゴーゴーバー</a></li>
			<li class="thaiPlan2"><a href="#thaiMenu2">カラオケ</a></li>
			<li class="thaiPlan3"><a href="#thaiMenu3">マッサージ</a></li>
			<li class="thaiPlan4"><a href="#thaiMenu4">ＭＰ</a></li>
			
			<li class="thaiPlan6"><a href="#thaiMenu6">コヨーテ</a></li>
			<li class="thaiPlan7"><a href="#thaiMenu7">ナイトスポット</a></li>
		</ul>
		<div class="menuBox">
			<div class="area" id="thaiMenu1">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon1.png" alt="ゴーゴーバー" width="166" height="47"></p>
					<p>
						ゴーゴーバーとは店内にカウンターに囲まれたステージがあり、その上で女の子たちが水着姿やコスプレ、ノーブラ・ノーパンでダンスをしていて、そのダンスをお客はドリンクを飲みながら鑑賞します。
						ステージ上でダンスをしている子や、店内に気に入った女の子がいた場合、自分の席に呼んで一緒に酒やソフトドリンクを飲む事ができます。
						また、女の子との交渉次第ではホテルへ連れて帰りステキな夜を楽しめるというタイ風俗の代表的存在です。モタモタしていると可愛い女の子はすぐに指名されてしまうので注意が必要。
						ムンムンとした気持ちで思考が停止しているかもしれないが、お気に入りの子を見つけたらすぐに指名しよう！
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_gogo01.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/gogo/">▶ ゴーゴーバーの魅力へ</a></p>
				</div>
			</div>
			<div class="area" id="thaiMenu2">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon2.png" alt="カラオケ" width="130" height="47"></p>
					<p>
						カラオケと聞くと、風俗のイメージを思い浮かべられないと思いますが、ジャンル的には日本のキャバクラと同じだと思えば良いでしょう。
						世界的に有名な歓楽街パッポンに隣接したタニヤ通りに日本人向けの飲食店が建ち並び、その中で風俗店舗も数多く誕生しています。
						女の子と一緒に酒を飲みながら、気が向けばカラオケを歌うこともでき、比較的リーズナブルに遊べるジャンルと言えるでしょう。
						日本のキャバクラと違うところは、お店によっては女の子を連れ出してエッチができることです。（女の子を連れ出すことをオフと呼びます。）
						なお、だいたいのお店は女の子の連れ出しＯＫですが、ダメな女の子もいたりするので、事前にチェックしておくといいですよ！
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_karaoke01.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/karaoke/">▶ カラオケの魅力へ</a></p>
				</div>
			</div>
			<div class="area" id="thaiMenu3">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon3.png" alt="マッサージ" width="149" height="47"></p>
					<p>
						夜遊びといっても色々な風俗がありますが、満足度では安定して高いのはマッサージ。
						タイといえば古式マッサージが有名ですが、風俗要素も含めたサービスを取り入れたエロ按摩が人気があり、サービス良さ、コストパフォーマンスの良いお店も多い事から現在では、日本人に最も人気のある風俗とも言えます。
						サービスはハンドサービスだけなのか？最後までいけるのか？確認しましょう。料金的にもかなりリーズナブルなので一度体験してみて損はないかも。
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_massage01.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/massage/">▶ マッサージの魅力へ</a></p>
				</div>
			</div>
			<div class="area" id="thaiMenu4">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon4.png" alt="マッサージパーラ" width="89" height="47"></p>
					<p>
						マッサージパーラーとは、日本でいうところのソープランドにあたります。日本のソープランドをお手本に作られていて、基本的な遊び方もほぼ同じです。
						違いといえば写真氏名ではなく、ガラス張りの部屋(通称：金魚鉢)にいる女性を選べること。
						タイならではの魅力で女の子を直接見て選ぶことが出来ます。
						また、店舗の外観は驚くほど大きく、大通りに面しており、ホテルと見間違えるほど立派な作りになっているのが特徴。
						しかも日本のソープに比べると料金が圧倒的に安いのが魅力で、この手の遊びが好きな方はたまらないジャンルと言えるでしょう。
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_mp01.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/mp/">▶ マッサージパーラの魅力へ</a></p>
				</div>
			</div>
			<div class="area" id="thaiMenu6">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon6.png" alt="コヨーテ" width="130" height="47"></p>
					<p>
						コヨーテとは、お酒を飲みながらステージの上で踊っている女の子たちを眺めて楽しむバーです。
						ゴーゴーバーにいる女の子たちは下着姿(ノーブラ、ノーパン)で踊っていますが、コヨーテでは露出度は高いもののショートパンツにＴシャツやビキニなどで踊っています。
						ゴーゴーバーと似ていますが、女の子を連れだすシステムはありません。
						セクシーダンスを鑑賞して楽しむお店と考えた方が良いでしょう。
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_coyote02.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/">▶ コヨーテの魅力へ</a></p>
				</div>
			</div>
			<div class="area" id="thaiMenu7">
				<div class=" areaLeft">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_tab_icon7.png" alt="ナイトスポット" width="184" height="47"></p>
					<p>
						テーメーカフェとはカフェ・バーとして営業してはいるものの出会喫茶としてよく知られ、店内にいる女の子は値段交渉の上持ち帰る事が出来ます。
						お客さんのほとんどは普通のバーだと思って来ている人はまずいませんし、女の子との一夜限りの出会いを求めやって来ています。
						ちなみに店外にも女の子がいますが、店内への入店が禁止されているレディーボーイである可能性がほとんどなのでご注意を！
					</p>
				</div>
				<div class=" areaRight">
					<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_night01.jpg" alt="" width="320" height="160"></p>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/night/">▶ ナイトスポットの魅力へ</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="bannerBox">
		<ul class="cf">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_strategyr_banner.png" alt="" width="340" height="127"></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_info_banner.png" alt="" width="340" height="127"></a></li>
		</ul>
	</div>
	<section class="mc">
			<div><h2 class="hIcon tIcon4"><span></span>タイのイベント情報</h2></div>
			<div class="mcBox">
				<div class="inBox font">
					<div class="newsBoxList">
						<ul>
							<li><time datetime="2015-10-12"><span>2015年4月13日</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/sub/event01/"><b>ソンクラーン・フェスティバル</b><br>最も暑くなる４月に、有名な「ソンクラーンフェスティバル」（別名「水掛け祭り」）をご紹介！</a></time></li>
							<li><time datetime="2015-10-12"><span>2015年10月12日</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/sub/event02/"><b>ロイ・クラトン・フェスティバル</b><br>日本でいう「灯篭流し」のようなもので、陰暦１２月（毎年１１月）の満月の夜に行われます。</a></time></li>
						</ul>
						<p class="home-btn pt10"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
event/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_events_btn.png" alt="イベント情報はこちら" width="185" height="40"></a></p>
					</div>
				</div>
			</div>
	</section>
	<section class="mc">
			<div><h2 class="hIcon tIcon5"><span></span>今タイで流行っている曲をピックアップ！モテること間違いなし!!</h2></div>
			<div class="mcBox">
				<div class="inBox font">
					<p>
						知らない日本の曲を話のネタにするよりも、現地で流行っている曲をネタに話したり、歌ってあげれば女の子たちの高感度もアップ！！女の子との距離がぐっと近くなる事間違いなし！？
					</p>
					<p class="home-btn pt10"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
music/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_music_btn.png" alt="タイミュージックへ" width="185" height="40"></a></p>
				</div>
			</div>
	</section>
	<section class="mc not">
			<div><h2 class="hIcon tIcon6"><span></span>たいらぶ的 夜のタイ語レクチャー</h2></div>
			<div class="mcBox">
				<div class="inBox font">
					<p>
						コミュニケーションツールとしてはもちろんの事、ちょっとしたタイ語を話せるだけで会話が弾むし、女の子との距離がグッと縮まります。そこで『たいらぶ』がではこれを覚えておけば間違いなし！のタイ語を伝授致します♪
					</p>
					<p class="home-btn pt10"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/home_lecture_btn.png" alt="タイ語レクチャーへ" width="185" height="40"></a></p>
				</div>
			</div>
	</section>
	</div><!-- / CONTENTS -->
	<div id="side"><!-- SIDE BAR -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div><!-- / SIDE BAR-->
	<div id="topButton"><p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/page_top.png" alt="" width="74" height="74"></p></div>
</div><!-- / FRAME -->
<footer id="globalFooter"><!-- FOOTER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</footer><!-- / FOOTER -->
</div><!-- / FRAME -->

<?php echo '<script'; ?>
>
$(function(){
	var slider = $('#slider').bxSlider({
		mode: 'fade',
		auto: true,
		pause: 4000,
		speed: 1000,
		pager: true,
		controls: false,
		autoHover: true,
		infiniteLoop: true,
		buildPager: function(slideIndex){
			switch (slideIndex){
				case 0:
				return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
#thai-love" class="thumb sele1"><img src="./img/thailove.gif" alt="" width="300px" height="52px"></a>';
				case 1:
				return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
strategyr/" class="thumb sele2"><img src="./img/thailove.gif" alt="" width="300px" height="52px"></a>';
				case 2:
				return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lecture/" class="thumb sele4"><img src="./img/thailove.gif" alt="" width="300px" height="52px"></a>';
				case 3:
				return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/" class="thumb sele5"><img src="./img/thailove.gif" alt="" width="300px" height="52px"></a>';
			}
		}
	});
	$('.list-box>ul').carouFredSel({
		items : 4,
		width : 690,
		height : 300,
		auto : 3000,
		scroll : {
			items: 1,
			duration : 1000,
			pauseOnHover: "resume"
		}
	});
});

$(function(){
    //最初は、メニュー1を表示させる
    $('.area:first').show();

    //メニュー1のliにactiveのクラスを付ける
			$('.thaiTab > li:first').addClass('active');
    //タブメニューをクリックを押したら
    $('.thaiTab li').click(function() {
        $('.thaiTab li').removeClass('active');
        $(this).addClass('active');
        $('.area').hide();
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
