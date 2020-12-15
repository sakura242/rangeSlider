<?php
/* Smarty version 3.1.29, created on 2019-06-07 15:17:33
  from "/home/dev0006/www/thai-lover/production/application/views/pc/info/useful_taxi.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cfa017d0869c4_70230331',
  'file_dependency' => 
  array (
    '7225cf049e2798cb689d6ee2a699a143c0c2a52e' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/info/useful_taxi.tpl',
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
function content_5cfa017d0869c4_70230331 ($_smarty_tpl) {
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
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/sub/useful/">お役立ち情報</a></li>
		<li>タクシーの乗り方</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>タクシーの乗り方</h1>
		<div class="mcBox mcb">
			<section>
				<div class="inBox font">
					<h2>お役立ち情報</h2>
					<div class="infoBox">
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
							</div>
							<div class="rideBox">
								<p>■ 乗り方</p>
								<ol>
									<li>
										<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_taxi_img01.jpg" alt="" width="146" height="116">
										<div class="ride_bts">
											<p>&#9312;タクシーを停める。日本では手を挙げて停めますが、タイでは斜め下に腕を突き出して合図をするのがタイ式の停め方となります。</p>
										</div>
									</li>
									<li>
										<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_taxi_img02.jpg" alt="" width="146" height="116">
										<div class="ride_bts">
											<p>&#9313;行き先を告げてタクシーに乗りましょう。その際にメーターを使用せず、運賃を交渉してくる運転手がいるので注意。メーターを使ってくれるように伝えましょう。それでもダメな場合は他のタクシーに移りましょう。</p>
										</div>
									</li>
									<li>
										<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/info/info_taxi_img03.jpg" alt="" width="146" height="116">
										<div class="ride_bts">
											<p>&#9314;目的地に着いたら運転の支払いをしましょう。チップを支払う必要は本来ありませんが、お釣の小銭をチップとしてあげてしまうのがスマートです。例えばメーターで55バーツの場合、60バーツ払ってそのまま「ＯＫ！」って言えば十分です。逆に41バーツの場合は40バーツでもＯＫのことが殆ど、結構大雑把な所もあります。なるべく細かいお金を持っておくとよいでしょう。</p>
										</div>
									</li>
								</ol>
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
