<?php
/* Smarty version 3.1.29, created on 2019-05-24 14:11:49
  from "/home/dev0006/www/thai-lover/production/application/views/pc/shop/coyote/pimp.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce77d155ed010_33472634',
  'file_dependency' => 
  array (
    'cde4e2c0f8a2e447cd69c6b40ea8a588e5e693a2' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/shop/coyote/pimp.tpl',
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
function content_5ce77d155ed010_33472634 ($_smarty_tpl) {
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
search/">お店検索</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/">コヨーテ検索</a></li>
		<li>お店情報（PIMP）</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<article class="page">
		<h1>お店情報（PIMP）</h1>
		<div class="mcBox mcb">
			<div class="inBox font">
				<dl>
					<dt>エリア：</dt>
					<dd><strong>カセートナワミン</strong></dd>
				</dl>
				<div class="subBox">
					<ul class="shopTab">
						<li class="shopNav1"><a href="#navinfo">基本情報</a></li>
						<li class="shopNav2"><a href="#navlist">在籍リスト</a></li>
						<li class="shopNav3"><a href="#navvoice">口コミ</a></li>
						<li class="shopNav4"><a href="#navaccess">地図・アクセス</a></li>
						<li class="shopNav5"><a href="#navcoupon">クーポン</a></li>
					</ul>
					<div class="shopList">
					<!-- 基本情報 -->
						<div class="area" id="navinfo">
							<div class="content">
								<section>
									<div class="topImage">
										<div class="bg"><h2>Baccara<small>PIMP</small></h2></div>
										<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_main_pimp.png" alt="PIMP" width="650" height="300"></div>
									</div>
									<div class="subBox">
										<p>場所柄、日本人客は少ないのだが、コヨーテのレベル的に非常に高いと人気の店です。</p>
									</div>
									<section>
										<h3>設備／こだわり情報</h3>
										<div class="subBox">
											<div class="tableBox">
												<table>
													<tbody>
														<tr>
															<th>お店情報<br><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_on.png" alt="wi-fi" width="60" height="40">あり<br><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_off.png" alt="wi-fi" width="60" height="40">なし</th>
															<td>
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_off.png" alt="wi-fi" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_jp_off.png" alt="日本語" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_en_on.png" alt="英語" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_card_on.png" alt="カード" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_yen_off.png" alt="日本円" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_dol_off.png" alt="ドル" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_receipt_off.png" alt="領収書" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_smoking_on.png" alt="喫煙" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_vip_on.png" alt="VIPルーム" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_bath_off.png" alt="バスタブ" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_shower_off.png" alt="シャワー" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_date_off.png" alt="店外デート" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_cosplay_off.png" alt="コスプレ" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_sexaid_off.png" alt="おもちゃ持込" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_condom_off.png" alt="コンドーム" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_lotion_off.png" alt="ローション" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_2play_off.png" alt="２回戦" width="60" height="40">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</section>
									<section>
										<h3>店舗情報</h3>
										<div class="subBox">
											<div class="tableBox">
												<table>
													<tbody>
														<tr>
															<th>店舗名</th><td>ピンプ（PIMP）</td>
														</tr>
														<tr>
															<th>地域</th><td>カセートナワミン</td>
														</tr>
														<tr>
															<th>業態</th><td>コヨーテ</td>
														</tr>
														<tr>
															<th>住所</th><td>Pracha Uthit ( Rotchanamin Alley), Wang Thonglang, Bangkok 10310</td>
														</tr>
														<tr>
															<th>連絡先</th><td>087-360-3666</td>
														</tr>
														<tr>
															<th>営業時間</th><td>21:00～03：00</td>
														</tr>
														<tr>
															<th>定休日</th><td>禁酒日（仏教の日、王室関係の日、選挙の日など）</td>
														</tr>
														<tr>
															<th>アクセス</th><td>MRT地下鉄タイカルチャーセンター駅よりタクシーで約20分</td>
														</tr>
														<tr>
															<th>取扱いカード</th>
															<td>VISA、MASTER、AMEX
																<span>
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_viza.png" alt="VISA" width="40" height="27">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_mc.png" alt="MC" width="45" height="27">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_ae.png" alt="AE" width="42" height="27">
																</span>
															</td>
														</tr>
														<tr>
															<th>メンバー料金</th>
															<td>
																10,000バーツ又は20,000バーツ<br>ウイスキー4本又は9本と割り物無料<br>ボトルは4ヶ月又は12ヶ月間保管可能です。
															</td>
														</tr>
														<tr>
															<th>VIPルーム</th><td>多数有り（部屋代金がかかります）</td>
														</tr>
														<tr>
															<th>メニュー</th>
															<td class="menuBox">
																<dl>
																	<dt>ドリンク</dt>
																	<dd>ブラックレーベル：4400バーツ</dd>
																</dl>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</section>
									
								</section>
							</div>
						</div>
						<!-- 在籍リスト -->
						<div class="area" id="navlist">
							<div class="content">
								<section>
									<h2>在籍リスト</h2>
									<div class="subBox">
										<div class="girlBox">
											<ul>
												<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img134.jpg" alt="" width="150" height="200"></li>
												<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img109.jpg" alt="" width="150" height="200"></li>
												<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img111.jpg" alt="" width="150" height="200"></li>
												<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img112.jpg" alt="" width="150" height="200"></li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					<!-- 口コミ -->
						<div class="area" id="navvoice">
							<div class="content">
								<section>
									<h2>口コミ</h2>
									<div class="subBox">
										<p>coming-soon</p>
									</div>
								</section>
							</div>
						</div>
					<!-- 地図・アクセス -->
						<div class="area" id="navaccess">
							<div class="content">
								<section>
									<h2>地図</h2>
									<div class="subBox">
										<div class="mapBorder">
											<div id="maps">
												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496358.3703326658!2d100.542463!3d13.609038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefacb0a05bbd47c2!2sTHE+PIMP%C2%AE+CLUB+BANGKOK!5e0!3m2!1sja!2sjp!4v1432895808057" width="642" height="450" frameborder="0" style="border:0"></iframe>
											</div>
										</div>
									</div>
								</section>
								<!--section>
									<h2>アクセス</h2>
									<div class="subBox">
										<p>
											テキスト
										</p>
									</div>
								</section-->
							</div>
						</div>
					<!-- クーポン -->
						<div class="area" id="navcoupon">
							<div class="content">
								<section>
									<h2>クーポン</h2>
									<div class="subBox">
										<p>coming-soon</p>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
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

<?php echo '<script'; ?>
>
//<![CDATA[
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
