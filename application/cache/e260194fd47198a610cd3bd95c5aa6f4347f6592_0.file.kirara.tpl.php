<?php
/* Smarty version 3.1.29, created on 2019-06-06 04:26:38
  from "/home/dev0006/www/thai-lover/production/application/views/sp/shop/karaoke/kirara.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cf8176e99a991_03765167',
  'file_dependency' => 
  array (
    'e260194fd47198a610cd3bd95c5aa6f4347f6592' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/shop/karaoke/kirara.tpl',
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
function content_5cf8176e99a991_03765167 ($_smarty_tpl) {
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
				<h1>お店情報（Kirara）</h1>
				<div class="mcBox mcb">
					<div>
						<dl class="areaBox">
							<dt>エリア：</dt>
							<dd><strong>タニヤ</strong></dd>
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
img/search/karaoke/karaoke_main_kirara.png" alt="Kirara"></div>
												<div class="bg"><h2>Kirara<small>キララ</small></h2></div>
											</div>
											<section>
												<h3>設備／こだわり情報</h3>
												<div class="subBox">
													<div class="tableBox">
														<table>
															<tbody>
																<tr>
																	<th>お店情報<br><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_on.png" alt="wi-fi">あり<br><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/shop_icon_wifi_off.png" alt="wi-fi">なし</th>
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
																		VIZA、MASTER、JCB
																		<span>
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_viza.png" alt="VISA">
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_mc.png" alt="MC">
																			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/shop/credit_jcb.png" alt="JCB">
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
