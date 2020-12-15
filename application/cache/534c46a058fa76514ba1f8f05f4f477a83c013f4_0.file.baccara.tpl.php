<?php
/* Smarty version 3.1.29, created on 2019-05-27 20:48:48
  from "/home/dev0006/www/thai-lover/production/application/views/sp/shop/gogo/baccara.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cebcea0b1eb62_89220829',
  'file_dependency' => 
  array (
    '534c46a058fa76514ba1f8f05f4f477a83c013f4' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/shop/gogo/baccara.tpl',
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
function content_5cebcea0b1eb62_89220829 ($_smarty_tpl) {
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
			<article class="page">
				<h1>お店情報（Baccara）</h1>
				<div class="mcBox mcb">
					<div>
						<dl class="areaBox">
							<dt>エリア：</dt>
							<dd><strong>ソイ・カウボーイ</strong></dd>
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
img/search/gogo/gogo_main_baccara.png" alt="Baccara"></div>
												<div class="bg"><h2>Baccara<small>バカラ</small></h2></div>
											</div>
											<div class="inBox font">
												<p>
													センスの良い音楽にセンスの良い店内照明の中、1階のステージ上いっぱいに踊るゴーゴーガールたちのセクシー度はどれも一級品！女の子の数も非常に多く、日本人好みの子が多いので、同伴者探しには良いでしょう。
													1階と2階にステージがあり、2階のステージは下から覗けてしまうというエロい造りになっています。
												</p>
											</div>
											<section>
												<h3><span class="tl"></span>設備／こだわり情報</h3>
												<div class="subBox">
													<div class="tableBox">
														<table>
															<tbody>
																<tr>
																	<th>お店情報<br><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_wifi_on.png" alt="wi-fi"><br>あり<br>
																	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_wifi_off.png" alt="wi-fi"><br>なし</th>
																	<td>
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_wifi_off.png" alt="wi-fi">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_jp_off.png" alt="日本語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_en_on.png" alt="英語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_card_on.png" alt="カード">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_yen_off.png" alt="日本円">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_dol_off.png" alt="ドル">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_receipt_off.png" alt="領収書">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_smoking_on.png" alt="喫煙">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_vip_off.png" alt="VIPルーム">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_bath_off.png" alt="バスタブ">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_shower_off.png" alt="シャワー">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_date_on.png" alt="店外デート">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_cosplay_off.png" alt="コスプレ">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_sexaid_off.png" alt="おもちゃ持込">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_condom_off.png" alt="コンドーム">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_lotion_off.png" alt="ローション">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/shop_icon_2play_off.png" alt="２回戦">
																	</td>
																</tr>
																<tr>
																	<th>その他</th><td>喫煙：1階不可/2階可能<br>店外デート：ペイバー800バーツ、ショート3,000バーツ、ロング4,000バーツ</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</section>
											<section>
												<h3><span class="tl"></span>店舗情報</h3>
												<div class="subBox">
													<div class="tableBox">
														<table>
															<tbody>
																<tr>
																	<th>店舗名</th><td>バカラ（Baccara）</td>
																</tr>
																<tr>
																	<th>地域</th><td>ソイ・カウボーイ</td>
																</tr>
																<tr>
																	<th>業態</th><td>ゴーゴーバー</td>
																</tr>
																<tr>
																	<th>住所</th><td>Soi Cowboy,Sukhumvit Soi 23,klongtoey-Nua,Wattana Bangkok</td>
																</tr>
																<tr>
																	<th>連絡先</th><td>02-258-4332</td>
																</tr>
																<tr>
																	<th>営業時間</th><td>19:00～02：00</td>
																</tr>
																<tr>
																	<th>定休日</th><td>禁酒日（仏教の日、王室関係の日、選挙の日など）</td>
																</tr>
																<tr>
																	<th>アクセス</th><td>MRTスクンビット駅より徒歩約1分</td>
																</tr>
																<tr>
																	<th>取扱いカード</th>
																	<td>
																		VISA、MASTER、JCB、AMEX<br>
																		<span>
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/credit_viza.png" alt="VISA">
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/credit_mc.png" alt="MC">
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/credit_jcb.png" alt="JCB">
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/shop/credit_ae.png" alt="AE">
																		</span>
																	</td>
																</tr>
																<tr>
																	<th>メニュー</th>
																	<td class="menuBox">
																		<dl>
																			<dt>ドリンク</dt>
																			<dd>ハイネケン：160バーツ<br>
																				シンハー生ビア：150バーツ<br>
																				ジントニック：160バーツ<br>
																				バカルディ：160バーツ<br>
																				ウィスキー：140バーツ<br>
																				BLACK：160バーツ<br>
																				コーラ：150バーツ<br>
																				ミネラルウォーター：150バーツ
																			</dd>
																			<dt>女の子ドリンク</dt>
																			<dd>1ドリンク：160バーツ</dd>
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
img/shop/girl/girl_img01.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img02.jpg" alt="" class="img-width-100"></li>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img03.jpg" alt="" class="img-width-100"></li>
													</ul>
													<ul>
														<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/girl/girl_img04.jpg" alt="" class="img-width-100"></li>
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
														<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.8476362209462!2d100.562453!3d13.73689!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa97edae5d580cb0f!2sBaccara+Bar!5e0!3m2!1sja!2sus!4v1436771387656" width="90%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
