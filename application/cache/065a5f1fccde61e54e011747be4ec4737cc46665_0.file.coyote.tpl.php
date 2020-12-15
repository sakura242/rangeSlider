<?php
/* Smarty version 3.1.29, created on 2019-05-21 19:11:40
  from "/home/dev0006/www/thai-lover/production/application/views/pc/search/coyote.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce3cedc15b664_03685510',
  'file_dependency' => 
  array (
    '065a5f1fccde61e54e011747be4ec4737cc46665' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/search/coyote.tpl',
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
function content_5ce3cedc15b664_03685510 ($_smarty_tpl) {
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
		<li>コヨーテ検索</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>コヨーテ検索</h1>
		<div class="mcBox">
			<section>
				<div class="inBox font">
					<h2>コヨーテとは・・・？</h2>
					<div class="subBox">
						<ul class="image">
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_coyote01.jpg" alt="" width="320" height="160"></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_coyote02.jpg" alt="" width="320" height="160"></li>
						</ul>
						<p>
							ゴーゴーバーと似ていますが、女の子を連れだすシステムはありません。セクシーダンスを鑑賞して楽しむお店と考えた方が良いでしょう。なお、気に入ったダンサーの子がいればウェイトレスに頼んで席に来て接客してもらうことも出来ます。
						</p>
						<p>
							観光客も気軽に行けるドンブリーエリアがオススメ！
						</p>
					</div>
				</div>
			</section>
			<nav id="areasearch">
				<div class="inBox font">
					<div class="subBox">
						<div class="borderline">
							<ul class="searchTab bc6">
								<li><a href="#ratya">スクンビット</a></li>
								
								<li class="line2"><a href="#kase">カセート<br>ナワミン</a></li>
								<li class="last"><a href="#sina">シーナカリン</a></li>
							</ul>
							<div class="searchList">
								<div class="area" id="sina">
									<div class="content">
										<div class="selection page1">
											<div class="item-box">
												<ul>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/florence/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_florence.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/florence/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/florence/">FLORENCE</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>916 Srinakarin Rd.,Suanluang, Bangkok 10240</span></li>
																		<li>営業時間<span>21:00～03：00</span></li>
																		
																	</ul>
																</dd>
															</dl>
														</div>
														
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pageList">
										<div id="sinaList"></div>
									</div>
								</div>

								<div class="area" id="kase">
									<div class="content">
										<div class="selection page1">
											<div class="item-box">
												<ul>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pimp/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_pimp.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pimp/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pimp/">PIMP</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>Pracha Uthit ( Rotchanamin Alley), Wang Thonglang, Bangkok 10310</span></li>
																		<li>営業時間<span>21:00～03：00</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pageList">
										<div id="kaseList"></div>
									</div>
								</div>
								<div class="area" id="ratya">
									<div class="content">
										<div class="selection page1">
											<div class="item-box">
												<ul>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/cezch/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_cezch.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/cezch/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/cezch/">Czech</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>41-43 Soi Sukhumvit 63,Ekamai Rd.,Across BIG-C Shopping Center,Bangkok 10110</span></li>
																		<li>営業時間<span>20:00～02：30</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/piano/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_piano.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/piano/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/piano/">Piano</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>45 Soi Sukhumvit 63,Ekamai Rd.,Across BIG-C Shopping Center,Bangkok 10110</span></li>
																		<li>営業時間<span>20:00～02：00</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pegasus/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_pegasus.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pegasus/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pegasus/">PEGASUS GRAND</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>112 Sukhumvit Soi 23 Rd, Klongtoey-Nua, Wattana, Bangkok 10110</span></li>
																		<li>営業時間<span>20:00～02：00</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/sherbet/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_sherbet.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/sherbet/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/sherbet/">Sherbet</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>Sukhumvit soi 63 Rd</span></li>
																		<li>営業時間<span>19:00 ～ 1:30</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/exotica/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_exotica.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/exotica/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/exotica/">Exotica</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>31/1 Wireless Road, Lumpini, Patumwan, Bangkok, Thailand 10330</span></li>
																		<li>営業時間<span>20:00～02：00</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
													<li>
														<div class="shop-info">
															<div>
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pent/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/coyote/coyote_img_pent.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pent/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pent/">Pent</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>31/1 Wireless Road, Lumpini, Patumwan, Bangkok, Thailand 10330</span></li>
																		<li>営業時間<span>20:00～02：00</span></li>
																	</ul>
																</dd>
															</dl>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pageList">
										<div id="ratyaList"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
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
$(function() {
	var pageNo = null;
	var url = location.href;
	var get = url.split("?key=");
	if(get[1]){
		pageNo = get[1].substr(0,1);
		if(pageNo > $('.searchTab > li').length ) pageNo = null;
	}
	if(pageNo){
			$('.borderline > .searchTab > li:eq('+pageNo+')').each(function(){
				$(this).addClass('active');
				$($(this).find('a').attr('href')).show();
			})
	}else {
		if($.cookie('thailand_search')){
			pageNo = $.cookie('thailand_search');
			$('.borderline > .searchTab > li:eq('+pageNo+')').each(function(){
				$(this).addClass('active');
				$($(this).find('a').attr('href')).show();
			})
		}else{
			$('.borderline > .searchList > .area:first').show();
			$('.searchTab > li:first').addClass('active');
		}
	}
	var setID = $('.searchTab > .active > a').attr("href");
	//クリックイベント
	$('.searchTab > li').click(
		function() {
			var pageNo = $(this).index();
			$.cookie("thailand_search",pageNo,{ expires: 1});
			$('.searchTab > li').removeClass('active');
			$(this).addClass('active');
			$('.area').hide();
			setID = $('.searchTab > .active > a').attr("href");
			var cheName =$(setID+'List .active .current').html();
			if(cheName == "前") cheName = 1;
			$('.searchList .content > .selection').hide();
			$(".searchList "+ setID +" .content > .page"+cheName).show();
			$($(this).find('a').attr('href')).fadeIn();
			return false;
		}
	);
	function show(pageNumber){
		var page=".searchList .content > .page"+pageNumber;
		$(setID + " .content").prepend('<p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/loading.gif" alt="" width="130" height="90" /></p>');
		$('.searchList .content > .selection').hide();
		$("html,body").animate({ scrollTop: $(".borderline").offset().top }, 'slow','swing',function(){
			$(page).fadeIn();
			$(setID + " .content .loading").remove();
		})
	}
	$(function(){
		$("#sinaList").pagination({
			items: 1, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
	$(function(){
		$("#rappuList").pagination({
			items: 1, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
	$(function(){
		$("#kaseList").pagination({
			items: 1, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
	$(function(){
		$("#ratyaList").pagination({
			items: 1, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
