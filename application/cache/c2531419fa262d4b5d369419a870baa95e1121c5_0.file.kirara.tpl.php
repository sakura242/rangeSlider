<?php
/* Smarty version 3.1.29, created on 2019-05-22 16:38:00
  from "/home/dev0006/www/thai-lover/production/application/views/pc/shop/karaoke/kirara.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce4fc58a8d589_20476030',
  'file_dependency' => 
  array (
    'c2531419fa262d4b5d369419a870baa95e1121c5' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/shop/karaoke/kirara.tpl',
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
function content_5ce4fc58a8d589_20476030 ($_smarty_tpl) {
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
search/karaoke/">カラオケ検索</a></li>
		<li>お店情報（Kirara）</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<article class="page">
		<h1>お店情報（Kirara）</h1>
		<div class="mcBox mcb">
			<div class="inBox font">
				<dl>
					<dt>エリア：</dt>
					<dd><strong>タニヤ</strong></dd>
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
										<div class="bg"><h2>Kirara<small>キララ</small></h2></div>
										<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/karaoke/karaoke_main_kirara.png" alt="Kirara" width="650" height="300"></div>
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
img/shop/shop_icon_jp_on.png" alt="日本語" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_en_on.png" alt="英語" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_card_on.png" alt="カード" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_yen_off.png" alt="日本円" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_dol_off.png" alt="ドル" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_receipt_on.png" alt="領収書" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_smoking_on.png" alt="喫煙" width="60" height="40">
																<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_vip_off.png" alt="VIPルーム" width="60" height="40">
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
														<tr>
															<th>その他</th><td>日本語・英語：出来る女の子とできない女の子がいます</td>
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
															<th>店舗名</th><td>キララ（Kirara）</td>
														</tr>
														<tr>
															<th>地域</th><td>タニヤ</td>
														</tr>
														<tr>
															<th>業態</th><td>カラオケ</td>
														</tr>
														<tr>
															<th>住所</th><td>9/7-8, 3-4th FL., Soi Thaniya, Surawongse Rd., Bangkok 10500</td>
														</tr>
														<tr>
															<th>連絡先</th><td>02-238-3993</td>
														</tr>
														<tr>
															<th>営業時間</th><td>19:00～01:00</td>
														</tr>
														<tr>
															<th>定休日</th><td>禁酒日（王室関連の祝日,仏教行事の祭日,法令で定められた日）</td>
														</tr>
														<tr>
															<th>アクセス</th><td>－</td>
														</tr>
														<tr>
															<th>取扱いカード</th>
															<td>
																VISA、MASTER、JCB
																<span>
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_viza.png" alt="VISA" width="40" height="27">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_mc.png" alt="MC" width="45" height="27">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_jcb.png" alt="JCB" width="39" height="27">
																</span>
															</td>
														</tr>
														<tr>
															<th>メニュー</th>
															<td class="menuBox">
																<dl>
																	<dt>システム料金</dt>
																	<dd>
																		飲み放題プラン(60分)：600バーツ<br>
																		ホステスドリンク：180バーツ<br>
																		ミキサー（ボトルを開けたお客様）：無料<br>
																		テーブルチャージ：200バーツ<br>
																		スナック代：300バーツ
																	</dd>
																</dl>
																<dl>
																	<dt>ボトルメニュー</dt>
																	<dd>
																		シーバスリーガル：1,400バーツ<br>
																		ジョニーウォーカー(ブラックラベル)：1,500バーツ<br>
																		バランタイン12年もの：1,400バーツ<br>
																		いいちこ：1,400バーツ<br>
																		ジャックダニエル：1,500バーツ<br>
																		ヘネシーV.S.O.P：2,200バーツ<br>
																		レミーマルタンV.S.O.P：2,000バーツ<br>
																		バランタイン17年もの：3,000バーツ<br>
																		ヘネシーX.O：5,500バーツ<br>
																		レミーマルタンX.O：6,000バーツ
																	</dd>
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
										<p>coming-soon</p>
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
									<h2>地図・アクセス</h2>
									<div class="subBox">
										<div class="mapBorder">
											<div id="maps">
												<p>coming-soon</p>
											</div>
										</div>
									</div>
								</section>
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
