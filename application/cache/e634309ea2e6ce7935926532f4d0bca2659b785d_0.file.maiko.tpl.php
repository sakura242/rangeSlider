<?php
/* Smarty version 3.1.29, created on 2019-05-21 14:04:12
  from "/home/dev0006/www/thai-lover/production/application/views/sp/shop/karaoke/maiko.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce386cc308ff3_96714716',
  'file_dependency' => 
  array (
    'e634309ea2e6ce7935926532f4d0bca2659b785d' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/shop/karaoke/maiko.tpl',
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
function content_5ce386cc308ff3_96714716 ($_smarty_tpl) {
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
				<h1>お店情報（舞妓）</h1>
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
img/search/karaoke/karaoke_main_maiko.png" alt="playgirl"></div>
												<div class="bg"><h2>Maiko<small>舞妓</small></h2></div>
											</div>
<!--
											<div class="inBox font">
												<p>
													スクンビットソイ39沿いに「Red Apple」があります。
													タイのカラオケというと女の子と歌って飲んだりが一般的ですが、
													タイのカラオケには珍しくカラオケ設備がないので、お酒を純粋に楽しみたいって方にはとてもオススメ！
													もちろん女の子たちのノリもいいし、日本語も話せる子もいるので気分よくお酒が飲めますよ！
												</p>
											</div>
-->
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
																	<th>店舗名</th><td>舞妓（Maiko）</td>
																</tr>
																<tr>
																	<th>地域</th><td>タニヤ</td>
																</tr>
																<tr>
																	<th>業態</th><td>カラオケ</td>
																</tr>
																<tr>
																	<th>住所</th><td>Sukhumvit 39,Bangkok 10110</td>
																</tr>
																<tr>
																	<th>連絡先</th><td>02-662-1905</td>
																</tr>
																<tr>
																	<th>営業時間</th><td>19:00～01:00</td>
																</tr>
																<tr>
																	<th>定休日</th><td>禁酒日（仏教の日、王室関係の日、選挙の日など）</td>
																</tr>
																<tr>
																	<th>アクセス</th><td>BTSプロンポン駅より徒歩約15分</td>
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
																	<th>VIPルーム</th><td>50部屋以上※部屋代金が別途かかります。</td>
																</tr>
																<tr>
																	<th>セット料金</th>
																	<td>60分1,500バーツ（ウイスキー・焼酎・ビール飲み放題）<br>※スナック又はフルーツ付き</td>
																</tr>
																<tr>
																	<th>メニュー</th>
																	<td class="menuBox">
																		<dl>
																			<dt>ドリンク</dt>
																			<dd>
																				ウイスキー（シーバス/ブラックレーベル）：1,950バーツ<br>
																				焼酎（いいちこ）：1,950バーツ<br>
																				シャンパン：950バーツ<br>
																				ワイン（白/赤）：950バーツ<br>
																				ビール（Singha/Heineken）：150バーツ（350ml）<br>
																				ソフトドリンク（コーラ/ソーダ/水/氷）：無料<br>
																				レディードリンク(60分)：200バーツ<br>
																				※メンバー7,500バーツから有り。
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
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7251326588453!2d100.56895021529732!3d13.735084101380016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29efe50048b05%3A0x24d3a201fe931be3!2z44Kr44Op44Kq44KxIOiInuWmkw!5e0!3m2!1sja!2sjp!4v1455676919783" width="90%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
