<?php
/* Smarty version 3.1.29, created on 2019-05-22 16:03:00
  from "/home/dev0006/www/thai-lover/production/application/views/pc/info/useful.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce4f424ea44a6_08390468',
  'file_dependency' => 
  array (
    '1fb73e36b66b19bd27fe83917626a5fbf1de4e08' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/info/useful.tpl',
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
function content_5ce4f424ea44a6_08390468 ($_smarty_tpl) {
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
info/">タイの基本情報</a></li>
		<li>お役立ち情報</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>お役立ち情報</h1>
		<div class="mcBox mcb">
			<section>
				<div class="inBox font">
					<h2>お役立ち情報</h2>
					<div class="infoBox">
						<section>
							<div class="cf">
								<h3>BTS(スカイトレイン)の乗り方について</h3>
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_img01.png" alt="" width="215" height="160">
									<p>通称スカイトレインと呼ばれている鉄道で、バンコク旅行を楽しむためには欠かせない乗り物の一つです。<br>
										高架線を走行しているので、車窓からの眺めも抜群！利用可能時間は朝の6時から24時まで。<br>
										乗車券は日本同様、切符販売機で購入となります。<br>
										現在はシーロム線とスクンビット線の2ルートを走行しております。
									</p>
								</div>
								<p class="infoBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_bts/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_bts_btn.png" alt="BTSの乗り方はこちら" width="185"></a></p>
							</div>
						</section>
						<section>
							<div class="cf">
								<h3>MRT(地下鉄)の乗り方について</h3>
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_img02.png" alt="" width="215" height="160">
									<p>バンコク主要都市を走行する地下鉄です。<br>
										2004年7月に開通し、人々の大切な移動手段の一つとなっております。<br>
										「MRT」の乗り方やポイントを抑えておけば、バンコクでの旅行がさらに楽しくなる事間違いなし！
									</p>
								</div>
								<p class="infoBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_mrt/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_mrt_btn.png" alt="MRTの乗り方はこちら" width="185"></a></p>
							</div>
						</section>
						<section>
							<div class="cf">
								<h3>タクシーの乗り方について</h3>
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_img03.png" alt="" width="215" height="160">
									<p>タクシーの初乗り料金は35バーツです。<br>
										現在ではほとんどのタクシーがメーター制になっていますが、交渉制だったり、メーターを表示していないタクシーもあります。<br>
										乗車する前にきちんと確認してから利用するように心掛けましょう。
									</p>
								</div>
								<p class="infoBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_taxi/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_taxi_btn.png" alt="タクシーの乗り方はこちら" width="185"></a></p>
							</div>
						</section>
						<section>
							<div class="cf">
								<h3>トゥクトゥクの乗り方について</h3>
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_img04.png" alt="" width="215" height="160">
									<p>タイらしい乗り物と言えばこれを忘れてはいけません！<br>
										バンコクのシンボル的な乗り物で、タイヤが3つしかない三輪自動車です。<br>
										また、トゥクトゥクの特徴的なエンジン音や、車体の様子から観光客にも人気の高い乗り物となっております。
										<br>旅行最中に何度も目にする乗り物だと思うので、ぜひ一度挑戦してみてはいかが？
									</p>
								</div>
								<p class="infoBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_tuktuk/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_tuktuk_btn.png" alt="トゥクトゥクの乗り方はこちら" width="185"></a></p>
							</div>
						</section>
						<section>
							<div class="cf">
								<h3>バイクタクシーの乗り方について</h3>
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_img05.png" alt="" width="215" height="160">
									<p>その名の通りバイク版のタクシーです。<br>
										乗り物の中でもフットワークの軽さは№1！<br>
										渋滞の激しい場所や車が通れないような細い道で大活躍です！
									</p>
								</div>
								<p class="infoBtn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful_bike/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_bike_btn.png" alt="バイクタクシーの乗り方はこちら" width="185"></a></p>
							</div>
						</section>
					</div>
				</div>
			</section>
			<div class="otherBox">
				<div class="inBox font">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_btn.png" alt="タイの基本情報" width="195" height="40"></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/qa/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_qa_btn.png" alt="タイのあれこれＱ＆Ａへ" width="195" height="40"></a></li>
					</ul>
				</div>
			</div>
		<div class="mcBoxbottom"></div>
	</section>
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
