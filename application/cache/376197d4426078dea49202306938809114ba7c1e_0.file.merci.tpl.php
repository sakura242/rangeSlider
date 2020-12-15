<?php
/* Smarty version 3.1.29, created on 2019-06-22 23:15:36
  from "/home/dev0006/www/thai-lover/production/application/views/sp/shop/mp/merci.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5d0e38082a60c9_70082965',
  'file_dependency' => 
  array (
    '376197d4426078dea49202306938809114ba7c1e' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/shop/mp/merci.tpl',
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
function content_5d0e38082a60c9_70082965 ($_smarty_tpl) {
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
				<h1>お店情報（Merci）</h1>
				<div class="mcBox mcb">
					<div>
						<p><b>このページはただいま準備中です。<br>もうしばらくお待ちください。</b></p>
						<dl class="areaBox">
							<dt>エリア：</dt>
							<dd><strong>ペッブリー</strong></dd>
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
img/search/mp/mp_main_merci.png" alt="Merci"></div>
												<div class="bg"><h2>Merci<small>メルシー</small></h2></div>
											</div>
											<div class="inBox font">
												<p>
													地下鉄の「ラマ9世」駅を降り、徒歩1分近くラマ9世通りを歩くと大きな神殿のような建物がある。
													それが「Amsterdam」。店内も高級感ある雰囲気に満ちています。女の子の質＆料金もハイレベル！
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
img/shop/shop_icon_jp_off.png" alt="日本語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_en_off.png" alt="英語">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_card_off.png" alt="カード">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_yen_off.png" alt="日本円">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_dol_off.png" alt="ドル">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_receipt_off.png" alt="領収書">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_smoking_off.png" alt="喫煙">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_vip_off.png" alt="VIPルーム">
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
																	<th>店舗名</th><td>メルシー（Merci）</td>
																</tr>
																<tr>
																	<th>地域</th><td>ラチャダービセーク</td>
																</tr>
																<tr>
																	<th>業態</th><td>マッサージパーラー</td>
																</tr>
																<tr>
																	<th>住所</th><td>167/23-24 Ratchadaphisek Rd., Dindaeng, Bangkok 10400</td>
																</tr>
																<tr>
																	<th>連絡先</th><td>02-692-8266</td>
																</tr>
																<tr>
																	<th>営業時間</th><td>14:00～24:00</td>
																</tr>
																<tr>
																	<th>定休日</th><td>無休</td>
																</tr>
																<tr>
																	<th>アクセス</th><td>－</td>
																</tr>
																<tr>
																	<th>取扱いカード</th>
																	<td>VISA、MASTER、AMEX
																		<span>
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_viza.png" alt="VISA">
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_mc.png" alt="MC">
																			<img src="http://dev.cmps.jp/thailand/img/shop/credit_ae.png" alt="AE">
																		</span>
																	</td>
																</tr>
																<tr>
																	<th>VIPルーム</th>
																	<td>－</td>
																</tr>
																<tr>
																	<th>メニュー</th>
																	<td>－</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</section>
											<!--<section>
												<h3>インフォメーション</h3>
												<div class="subBox">
													<div class="newsBoxList">
														<ul>
															<li><time datetime="2014-08-03T19:20:00+09:00"><span>2014.08.03</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><br>今なら来店時に「たいらぶ見たよ！」と一言いうだけで600バーツで90分間飲み放題です！</a></time></li>
															<li><time datetime="2014-08-03T19:15:00+09:00"><span>2014.08.03</span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><br>今なら来店時に「たいらぶ見たよ！」と一言いうだけで600バーツで90分間飲み放題です！</a></time></li>
														</ul>
													</div>
												</div>
											</section>-->
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
												<p>coming-soon</p>
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
