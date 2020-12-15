<?php
/* Smarty version 3.1.29, created on 2019-06-18 21:02:43
  from "/home/dev0006/www/thai-lover/production/application/views/sp/info/useful.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5d08d2e32a0f61_09295845',
  'file_dependency' => 
  array (
    '5b4c0b1b7b5fd6b1b7a89db6f0b6b02d20b7f714' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/info/useful.tpl',
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
function content_5d08d2e32a0f61_09295845 ($_smarty_tpl) {
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
		<h1>タイの基本情報</h1>
		<div class="mcBox">
			<div class="page-box">
				<div class="inBox font">
					<p class="pageTitle">微笑みの国　タイ王国</p>
					<p>タイは厳格なイメージのある寺院、日本でも有名なタイ古式マッサージ、世界有数なビーチリゾート、辛味、酸味、甘味などを多彩に組み合わさったタイ料理、同性愛・性転換に寛容など様々な魅力のある国です。たいらぶは世界一の性風俗の盛んなタイについて基本情報をまとめました。タイに行く際に役立てて頂けると嬉しい限りです。</p>
					<div class="infoBtn">
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_btn.png" alt="タイの基本情報へ戻る"></a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/qa/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_qa_btn.png" alt="タイのあれこれＱ＆Ａへ"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<section>
				<h2><span class="tl"></span>お役立ち情報へ</h2>
				<div class="inBox font">
					<div class="subBox">
						<div>
							<dl class="usefulBox">
								<dt>BTS(スカイトレイン)の乗り方について</dt>
								<dd><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_img01.png" alt="BTSトレイン"></dd>
								<dd>
									通称スカイトレインと呼ばれている鉄道で、バンコク旅行を楽しむためには欠かせない乗り物の一つです。
									高架線を走行しているので、車窓からの眺めも抜群！利用可能時間は朝の6時から24時まで。
									乗車券は日本同様、切符販売機で購入となります。現在はシーロム線とスクンビット線の2ルートを走行しております。
								</dd>
							</dl>
							<p class="pageBtn">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_bts/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_bts_btn.png" alt="BTSの乗り方はこちら"></a>
							</p>
						</div>
						<div>
							<dl class="usefulBox">
								<dt>MRT(地下鉄)の乗り方について</dt>
								<dd><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_img02.png" alt="MRT(地下鉄)"></dd>
								<dd>
									バンコク主要都市を走行する地下鉄です。
									2004年7月に開通し、人々の大切な移動手段の一つとなっております。
									「MRT」の乗り方やポイントを抑えておけば、バンコクでの旅行がさらに楽しくなる事間違いなし！
								</dd>
							</dl>
							<p class="pageBtn">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_mrt/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_mrt_btn.png" alt="MRTの乗り方はこちら"></a>
							</p>
						</div>
						<div>
							<dl class="usefulBox">
								<dt>タクシーの乗り方について</dt>
								<dd><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_img03.png" alt="タクシー"></dd>
								<dd>
									タクシーの初乗り料金は35バーツです。
									現在ではほとんどのタクシーがメーター制になっていますが、交渉制だったり、メーターを表示していないタクシーもあります。
									乗車する前にきちんと確認してから利用するように心掛けましょう。
								</dd>
							</dl>
							<p class="pageBtn">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_taxi/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_taxi_btn.png" alt="タクシーの乗り方はこちら"></a>
							</p>
						</div>
						<div>
							<dl class="usefulBox">
								<dt>トゥクトゥクの乗り方について</dt>
								<dd><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_img04.png" alt="トゥクトゥク"></dd>
								<dd>
									タクシーの初乗り料金は35バーツです。
									現在ではほとんどのタクシーがメーター制になっていますが、交渉制だったり、メーターを表示していないタクシーもあります。
									乗車する前にきちんと確認してから利用するように心掛けましょう。
								</dd>
							</dl>
							<p class="pageBtn">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_tuktuk/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_tuktuk_btn.png" alt="トゥクトゥクの乗り方はこちら"></a>
							</p>
						</div>
						<div>
							<dl class="usefulBox">
								<dt>バイクタクシーの乗り方について</dt>
								<dd><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_img05.png" alt="バイクタクシー"></dd>
								<dd>
									その名の通りバイク版のタクシーです。
									乗り物の中でもフットワークの軽さは№1！
									渋滞の激しい場所や車が通れないような細い道で大活躍です！
								</dd>
							</dl>
							<p class="pageBtn">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_bike/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/info/info_bike_btn.png" alt="バイクタクシーの乗り方はこちら"></a>
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="mcBoxbottom"></div>
	</section>
</div>
</div>
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

</body>
</html><?php }
}
