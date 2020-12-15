<?php
/* Smarty version 3.1.29, created on 2019-05-22 22:17:39
  from "/home/dev0006/www/thai-lover/production/application/views/sp/shop/coyote/exotica.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce54bf3ca71c3_83052703',
  'file_dependency' => 
  array (
    'a9ce315dacbface4af4b9ec9b70a802c873beb8b' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/shop/coyote/exotica.tpl',
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
function content_5ce54bf3ca71c3_83052703 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/shop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//maps.google.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
>
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
			<article class="page">
				<h1>お店情報（Exotica）</h1>
				<div class="mcBox mcb">
					<div>
						<dl class="areaBox">
							<dt>エリア：</dt>
							<dd><strong>ラチャダービセーク</strong></dd>
						</dl>
						<div class="subBox">
							<ul class="shopTab">
								<li class="shopNav1"><a href="#navinfo"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/Nav1_off.png" alt="基本情報"></a></li>
								<li class="shopNav2"><a href="#navlist"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/Nav2_off.png" alt="在籍リスト"></a></li>
								<li class="shopNav3"><a href="#navvoice"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/Nav3_off.png" alt="口コミ"></a></li>
								<li class="shopNav4"><a href="#navaccess"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/Nav4_off.png" alt="地図・アクセス"></a></li>
								<li class="shopNav5"><a href="#navcoupon"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/Nav5_off.png" alt="クーポン"></a></li>
							</ul>
							<div class="shopList">
							<!-- 基本情報 -->
								<div class="area" id="navinfo">
									<div class="content">
										<section>
											<div class="topImage">
												<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_main_exotica.png" alt="エキゾチカ"></div>
												<div class="bg"><h2>Exotica<small>エキゾチカ</small></h2></div>
											</div>
											<div class="inBox font">
												<p>
													「Exotica」はスクンビットのトンロー通りのソイ5と7の通りに面した場所にあり、トンロー通りのソイ5を越えた左手に入り口がある。
													「Exotica Exclusive Club」と書かれたる門をくぐると、魅惑的な高級コヨーテ嬢達が待っています。
													トンローで有名な老舗と言える「Exotica」は、日本人率が高いトンローエリアのため、会社の接待で立ち寄る日本人客もたいへん多く利用している。
													そのため、日本人慣れしているので、高級コヨーテクラブに慣れていない人にも行きやすいかもしれない。室内にプールなどもあり、日本人には定番的な店と言えるでしょう。
												</p>
											</div>
											<section>
												<h3>設備／こだわり情報</h3>
												<div class="subBox">
													<div class="tableBox">
														<table>
															<tbody>
																<tr>
																	<th>お店情報<br>
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_on.png" alt="wi-fi">あり<br>
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_off.png" alt="wi-fi">なし
																	</th>
																	<td>
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_off.png" alt="wi-fi">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_jp_on.png" alt="日本語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_en_on.png" alt="英語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_card_on.png" alt="カード">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_yen_off.png" alt="日本円">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_dol_off.png" alt="ドル">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_receipt_on.png" alt="領収書">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_smoking_on.png" alt="喫煙">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_vip_on.png" alt="VIPルーム">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_bath_off.png" alt="バスタブ">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_shower_off.png" alt="シャワー">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_date_off.png" alt="店外デート">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_cosplay_off.png" alt="コスプレ">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_sexaid_off.png" alt="おもちゃ持込">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_condom_off.png" alt="コンドーム">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_lotion_off.png" alt="ローション">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_2play_off.png" alt="２回戦">
																	</td>
																</tr>
																<tr>
																	<th>その他</th>
																	<td>
																		日本語：出来る女の子とできない女の子がいます
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
																	<th>店舗名</th><td>エキゾチカ（Exotica）</td>
																</tr>
																<tr>
																	<th>地域</th><td>スクンビット</td>
																</tr>
																<tr>
																	<th>業態</th><td>コヨーテ</td>
																</tr>
																<tr>
																	<th>連絡先</th><td>02-655-3890</td>
																</tr>
																<tr>
																	<th>住所</th><td>31/1 Wireless Road, Lumpini, Patumwan, Bangkok, Thailand 10330</td>
																</tr>
																<tr>
																	<th>営業時間</th><td>20:00～02：00</td>
																</tr>
																<tr>
																	<th>定休日</th><td>禁酒日（仏教の日、王室関係の日、選挙の日など）</td>
																</tr>
																<tr>
																	<th>アクセス</th><td>BTSスカイトレインチットロム駅より徒歩約5分</td>
																</tr>
																<tr>
																	<th>取扱いカード</th>
																	<td>VISA、MASTER、AMEX<br>
																		<span>
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_viza.png" alt="VISA">
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_mc.png" alt="MC">
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_ae.png" alt="AE">
																		</span>
																	</td>
																</tr>
																<tr>
																	<th>メンバー料金</th>
																	<td>30,000バーツ（ウイスキー10本と割り物無料）<br>ボトルは6ヶ月間保管可能です。</td>
																</tr>
																<tr>
																	<th>VIPルーム</th>
																	<td>多数有り（部屋代金がかかります。）</td>
																</tr>
																<tr>
																	<th>メニュー</th>
																	<td>
																		ブラックレーベル：4,000バーツ<br>
																		ハイネケン/シンハー：250バーツ<br>
																		コーラ/ソーダ/水：各150バーツ<br>
																		レディードリンク：900バーツ/45分
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
img/shop/girl/girl_img157.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img158.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img159.jpg" alt="" class="img-width-100"></li>
													</ul>
													<ul class="pt15">
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img160.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img161.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img162.jpg" alt="" class="img-width-100"></li>
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
											<h2>地図・アクセス</h2>
											<div class="subBox">
												<div class="mapBorder">
													<div id="maps">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.8141615821214!2d100.57870611483027!3d13.729698390361753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29fac86d03bcf%3A0xa813a483810e6669!2sExotica+Exclusive+Club!5e0!3m2!1sja!2sjp!4v1449812293719" width="90%" height="300" frameborder="0" style="border:0"></iframe>
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


<?php echo '<script'; ?>
>
//<![CDATA[
$(function(){
     $('.shopTab li a img').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }
   });
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
