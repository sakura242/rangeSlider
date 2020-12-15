<?php
/* Smarty version 3.1.29, created on 2019-05-30 18:28:38
  from "/home/dev0006/www/thai-lover/production/application/views/sp/search/night.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cefa246a8cc35_67611661',
  'file_dependency' => 
  array (
    'a2c9813388b5c11fea5a4a2d1d9d3c57a850f8fc' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/search/night.tpl',
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
function content_5cefa246a8cc35_67611661 ($_smarty_tpl) {
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
				<h1>ナイトスポット検索</h1>
				<div class="mcBox">
					<section>
						<div class="inBox font">
							<h2><span class="tl"></span>ナイトスポットとは・・・？</h2>
							<div class="subBox">
								<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_night01.jpg" alt=""></p>
								<p>
									タイでは女の子たちと出会えるスポットがあります。その代表格と言えば「テーメーカフェ」です。
									表向きはバー＆コーヒーショップですが、実態はマッサージ店やゴーゴーバーなどのお店に属さないフリーの女の子たちが集まり、その晩のお客を探す場所となっています。
									プロの女の子もいれば、学生や昼間の仕事をしている素人の女の子が小遣い稼ぎに来ている事も。
								</p>
								<p>
									その他には、ナナホテルやルンピニー公園など女性と出会えるスポットもあるので要チェック！
								</p>
							</div>
						</div>
					</section>
					<nav id="areasearch">
						<div>
							<div class="subBox">
								<div class="borderline">
									<ul class="searchTab bc7">
										<li class="last"><a href="#other">ナイトスポット</a></li>
									</ul>
									<div class="searchList">
										<div class="area" id="other">
											<div class="content">
												<div class="selection page1">
													<div class="item-box">
														<ul>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/night/sub/cafe/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/night/night_img_cafe.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/night/sub/cafe/?key=info">テーメーカフェ</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>20：00～02：00/dd>
																				<dt>■定 休 日 </dt><dd>王室関連の祝日、仏教行事の祭日、選挙投票日</dd>
																				<dt>■アクセス</dt><dd>BTSのアソーク駅、ナナ駅の中間辺り(徒歩約10分)</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
																<!--<div class="shop-coupon">
																	<div><p>たいらぶを見た！と言えばオールコース２００バーツ割引！！たいらぶを見た！と言えばオールコース２００バーツ割引！！</p></div>
																	<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_coupon.png" alt="特別クーポン"></p>
																</div>-->
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="pageList">
												<div id="otherList"></div>
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
		$("#otherList").pagination({
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
