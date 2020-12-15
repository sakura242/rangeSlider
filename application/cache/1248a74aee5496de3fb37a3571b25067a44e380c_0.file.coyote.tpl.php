<?php
/* Smarty version 3.1.29, created on 2019-06-28 03:07:58
  from "/home/dev0006/www/thai-lover/production/application/views/sp/strategyr/coyote.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5d1505fe242d03_65171959',
  'file_dependency' => 
  array (
    '1248a74aee5496de3fb37a3571b25067a44e380c' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/strategyr/coyote.tpl',
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
function content_5d1505fe242d03_65171959 ($_smarty_tpl) {
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
		<h1>コヨーテ<br><small>楽しみ方 / 遊び方</small></h1>
		<div class="mcBox">
			<section>
				<div class="inBox font">
					<div class="subBox">
						<div class="menuBox">
							<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/strategyr/st_coyote_img.jpg" alt="コヨーテ">
							<div class="chartBox">
								<div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/strategyr/strategyr_coyote_date.png" alt="コヨーテ" class="img-width-100">
								</div>
								<p class="pt10">
									コヨーテとはゴーゴーバーなどで踊るダンサーの女の子の事を言いますが、
									コヨーテ専門のお店もあります。
									会員制クラブとなっているお店もあり、
									入店の際には会員になるか、お店のボトルを購入する必要があります。
									また、ゴーゴーバーと似通っている部分もありますが、
									<mark>女の子を連れ出す事ができないので注意ください！</mark>
								</p>
								<p class="pt10">
									お店に入ると席に案内されます。
									店内を見渡して座りたい席があれば伝えればＯＫです！
									席に座ったら飲み物や食べ物を注文しよう♪
									飲み物は1杯単品で頼むことも出来るし、
									ボトルを注文してキープする事もできますよ♪
								</p>
								<p class="pt10">
									コヨーテの雰囲気を肌で楽しみつつ、気に入った女の子がいたら
									席に呼んで一緒にお酒を飲んで楽しむことが可能です。
									念押ししますが、女の子は連れ出せませんからね！笑
									女の子のドリンク代は、<em>時間でサービス料と飲み物代のパッケージ料金を
									設定している場所もあれば、席に付くサービス料とは別に
									1ドリンク毎に料金を取るお店もあるので確認してください。</em>
								</p>
								<p class="pt10">
									ちなみにですが、女の子は複数呼んでもＯＫです。
									もちろん、女の子を複数呼んだら呼んだ分だけサービス料と、
									ドリンク代が掛かりますが・・・。
									お店を出るときは女の子にチップを渡すのをお忘れなく！
									だいたい500～1000バーツ程度渡すのが一般的ですよ。
								</p>
							</div>
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
