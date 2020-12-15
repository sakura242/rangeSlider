<?php
/* Smarty version 3.1.29, created on 2019-05-22 22:14:41
  from "/home/dev0006/www/thai-lover/production/application/views/sp/search/coyote.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce54b41b0b913_45831694',
  'file_dependency' => 
  array (
    '77de7b0dda1485b848ab72e65fa76ac04fe19947' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/search/coyote.tpl',
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
function content_5ce54b41b0b913_45831694 ($_smarty_tpl) {
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
				<h1>コヨーテ検索</h1>
				<div class="mcBox">
					<section>
						<div class="inBox font">
							<h2><span class="tl"></span>コヨーテとは・・・？</h2>
							<div class="subBox">
								<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_coyote01.jpg" alt=""></p>
								<p>
									ゴーゴーバーと似ていますが、女の子を連れだすシステムはありません。セクシーダンスを鑑賞して楽しむお店と考えた方が良いでしょう。
									なお、気に入ったダンサーの子がいればウェイトレスに頼んで席に来て接客してもらうことも出来ます。
								</p>
								<p>
									観光客も気軽に行けるドンブリーエリアがオススメ！
								</p>
							</div>
						</div>
					</section>
					<nav id="areasearch">
						<div>
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
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/florence/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_florence.png" alt=""></a>
																			
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/florence/">FLORENCE</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>21:00～03:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>MRTオンヌット駅よりタクシーで約30分</dd>
																			</dl>
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
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/pimp/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_pimp.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pimp/">PIMP</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>21:00～03：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>MRT地下鉄タイカルチャーセンター駅よりタクシーで約20分</dd>
																			</dl>
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
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/cezch/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_cezch.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/cezch/">Czech</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20:00～02：30</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>MRTエカマイ駅よりタクシーで約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/piano/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_piano.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/piano/">Piano</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20:00～02：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>MRTエカマイ駅よりタクシーで約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/pegasus/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_pegasus.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pegasus/">PEGASUS GRAND</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20:00～02：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>MRT地下鉄スクンビット駅より徒歩約10分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/exotica/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_exotica.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/exotica/">Exotica</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20:00～02：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSスカイトレインチットロム駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/pent/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_pent.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/pent/">pent</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20:00～02：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSスカイトレインチットロム駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/coyote/sherbet/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/coyote/coyote_img_sherbet.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/coyote/sub/sherbet/">Sherbet</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00 ～ 1:30</dd>
																				<dt>■定 休 日 </dt><dd>－</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
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
img/loading.gif" alt="" /></p>');
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
