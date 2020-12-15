<?php
/* Smarty version 3.1.29, created on 2019-05-22 06:51:33
  from "/home/dev0006/www/thai-lover/production/application/views/pc/search/night.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce472e5a8e050_81822295',
  'file_dependency' => 
  array (
    'b2701abe6dbe646f45573d555da86ff45a5e4978' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/search/night.tpl',
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
function content_5ce472e5a8e050_81822295 ($_smarty_tpl) {
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
		<li>ナイトスポット検索</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<section class="page">
		<h1>ナイトスポット検索</h1>
		<div class="mcBox">
			<section>
				<div class="inBox font">
					<h2>ナイトスポットとは・・・？</h2>
					<div class="subBox">
						<ul class="image">
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_night01.jpg" alt="" width="320" height="160"></li>
							<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_night02.jpg" alt="" width="320" height="160"></li>
						</ul>
						<p>
							タイでは女の子たちと出会えるスポットがあります。その代表格と言えば「テーメーカフェ」です。
							表向きはバー＆コーヒーショップですが、実態はマッサージ店やゴーゴーバーなどのお店に属さないフリーの女の子たちが集まり、
							その晩のお客を探す場所となっています。プロの女の子もいれば、学生や昼間の仕事をしている素人の女の子が小遣い稼ぎに来ている事も。
						</p>
						<p>
							その他には、ナナホテルやルンピニー公園など女性と出会えるスポットもあるので要チェック！
						</p>
					</div>
				</div>
			</section>
			<nav id="areasearch">
				<div class="inBox font">
					<div class="subBox">
						<div class="borderline">
							<ul class="searchTab bc7">
								<li><a href="#other">ナイトスポット</a></li>
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
																<div><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/night/sub/cafe/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/night/night_img_cafe.png" alt="" width="130" height="90"></a></div>
																<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/night/sub/cafe/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/search_list_map_btn.png" alt="MAPを見る" width="140" height="26" width="140" height="26"></a>
															</div>
															<dl>
																<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/night/sub/cafe/?key=info">テーメーカフェ</a></dt>
																<dd>
																	<ul>
																		<li>住所<span>Maxx Hotel 22 Fl., 288 Rama 9 Road, Huaykwang, Bangkok 10320</span></li>
																		<li>営業時間<span>20：00～02：00</span></li>
																		
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
