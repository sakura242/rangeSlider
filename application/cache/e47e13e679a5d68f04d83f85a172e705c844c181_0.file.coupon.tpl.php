<?php
/* Smarty version 3.1.29, created on 2019-05-23 19:20:40
  from "/home/dev0006/www/thai-lover/production/application/views/admin/shop/coupon.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce673f87b0200_63587755',
  'file_dependency' => 
  array (
    'e47e13e679a5d68f04d83f85a172e705c844c181' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/shop/coupon.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include/head.tpl' => 1,
    'file:admin/include/header.tpl' => 1,
    'file:admin/include/sidebar.tpl' => 1,
    'file:admin/shop/shop_menu.tpl' => 1,
  ),
),false)) {
function content_5ce673f87b0200_63587755 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body class="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
">
<div class="l_wrapper"><!-- WRAPPER  -->
<!-- HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / HEADER -->
<div class="l_frame"><!-- FRAME -->
<!-- SIDE BAR -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / SIDE BAR-->
<div class="b_contents"><!-- CONTENTS -->
	<div class="inner">
		<section>
			<div class="block">
				<div class="title">
					<div class="title_leftMark">
						<h2 class="title_text"><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
</h2>
					</div>
				</div>
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/shop/shop_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="btn btn-inline btn-midium btn-radius btn-spaceS">
					<a href="#" id="p1" class="js-open btn_link"><i class="btn_icon btn_icon-1"></i>クーポン登録</a>
				</div>
				<div class="block block-frame8 block-spaceS">
					<table class="table table-borderTopNone">
						<colgroup span="1" class="table_col-05"></colgroup>
						<colgroup span="1" style="width: 47%;"></colgroup>
						<colgroup span="1" style="width: 17%;"></colgroup>
						<colgroup span="1" class="table_col-1"></colgroup>
						<colgroup span="1" class="table_col-1half"></colgroup>
						<colgroup span="1" class="table_col-05"></colgroup>
						<thead>
							<tr>
								<th class="table_title">表示</th>
								<th class="table_title table_title-borderLeft">タイトル名</th>
								<th class="table_title table_title-borderLeft">有効期限</th>
								<th class="table_title table_title-borderLeft">公開・非公開</th>
								<th class="table_title table_title-borderLeft">更新日時</th>
								<th class="table_title table_title-borderLeft">削除</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table_data">
									<div class="btn btn-xSmall btn-color2 btn-positionAuto btn-radius">
										<a href="#" id="p2" class="js-open btn_link btn_link-spaceS" tabindex="1">表示
											<input type="hidden" name="" value="タイトル" class="js-title">
											<input type="hidden" name="" value="利用条件" class="js-use">
											<input type="hidden" name="" value="提示条件" class="js-show">
											<input type="hidden" name="" value="2019/01/01" class="js-dateSt">
											<input type="hidden" name="" value="2019/12/31" class="js-dateEd">
											<input type="hidden" name="" value="1" class="js-allow">
											<input type="hidden" name="" value="詳細" class="js-detail">
										</a>
									</div>
								</td>
								<td class="table_data table_data-positionLeft">テキストテキスト</td>
								<td class="table_data">2019/01/01～2019/12/31</td>
								<td class="table_data">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img class=table_data_img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/btn_icon_preview_on.png" alt="公開"> 公開</a>
								</td>
								<td class="table_data">2018/12/31 15:30:50</td>
								<td class="table_data">
									<div class="btn btn-xSmall btn-color5 btn-positionAuto btn-radius">
										<a href="" class="js-delete btn_link btn_link-spaceS" tabindex="1">削除</a>
									</div>
								</td>
							</tr>
							
							<tr>
								<td colspan="6" class="table_data">表示する店舗がありませんでした。</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
	<!-- modal popBox1 -->
	<div class="popBox">
		<div id="popBox_01" class="modal_box-1">
			<div class="block">
				<form method="GET" action="" accept-charset="UTF-8">
					<section>
						<div class="title">
							<div class="title_leftMark">
								<h2 class="title_text">クーポン登録</h2>
							</div>
						</div>
						<div class="textBox textBox-spaceS">
							<p class="js-error textBox_text textBox_text-color1"></p>
						</div>
						<table class="table table-borderLeftNone table-spaceM">
							<colgroup span="1" class="table_col-2half"></colgroup>
							<colgroup span="1" class="table_col-7half"></colgroup>
							<tbody>
								<tr>
									<th class="table_title table_title-borderBottom">タイトル<span class="table_title_required"></span></th>
									<td class="table_data"><input type="text" name="" value="" class="js-mo_title table_data_input" tabindex="1"></td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">利用条件</th>
									<td class="table_data"><textarea name="" class="js-mo_use table_data_textArea" tabindex="1"></textarea></td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">提示条件</th>
									<td class="table_data"><textarea name="" class="js-mo_show table_data_textArea" tabindex="1"></textarea></td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">有効期限</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="js-mo_dateSt table_data_input table_data_input-positionCenter table_data_input-size2 datepicker" tabindex="1" readonly="readonly"> &#8764;
										<input type="text" name="" value="" class="js-mo_dateEd table_data_input table_data_input-positionCenter table_data_input-size2 datepicker" tabindex="1" readonly="readonly">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">公開範囲</th>
									<td class="table_data table_data-positionLeft">
										<select name="" class="js-mo_allow table_data_select table_data_select-size1half" tabindex="1">
											<option value="1">公開</option>
											<option value="2">非公開</option>
										</select>
									</td>
								</tr>
								<tr>
									<th class="table_title">詳細</th>
									<td class="table_data"><textarea name="" class="js-mo_detail table_data_textArea" tabindex="1"></textarea></td>
								</tr>
							</tbody>
						</table>
					</section>
					<ul class="block block-positionCenter block-spaceM cf">
						<li class="btn btn-small btn-inline btn-color5 btn-radius">
							<a href="javascript:void(0)" class="js-close btn_link" onclick="$.colorbox.close(); return false;" tabindex="1"><i class="btn_icon btn_icon-9"></i>閉じる</a>
						</li>
						<li class="btn btn-small btn-inline btn-radius btn-leftSpaceL">
							<a href="#" id="p1" class="js-confirm btn_link" tabindex="1"><i class="btn_icon btn_icon-6"></i>登録</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<!-- / modal popBox1  -->
</div><!-- / CONTENTS -->
</div><!-- / FRAME -->
</div><!-- / WRAPPER  -->

<?php echo '<script'; ?>
>
//<![CDATA[
$(function(){
	// // ひらがなで入力した文字をカタカナに変換する
	appCommon.convertKana();
	// 全角英数字で入力した文字を半角に変換する
	appCommon.convertNumber().init();
	// 匿名・不明にチェックが入ったら「お客様名」にdisabledがつく
	appCommon.anonCheck();
	// 削除モーダル
	appCommon.delete();

	var mo_title  = $('.js-mo_title'),
			mo_use    = $('.js-mo_use').val(''),
			mo_show   = $('.js-mo_show').val(''),
			mo_dateSt = $('.js-mo_dateSt').val(''),
			mo_dateEd = $('.js-mo_dateEd').val(''),
			mo_allow  = $('.js-mo_allow').val('1'),
			mo_detail = $('.js-mo_detail').val('');

	// プロフィール写真登録
	$('.js-open').on('click', function(e){
		e.preventDefault();
		// モーダルを開いたら入力されていた値を消す
		mo_title.val('');
		mo_use.val('');
		mo_show.val('');
		mo_dateSt.val('');
		mo_dateEd.val('');
		mo_allow.val('1');
		mo_detail.val('');
		// モーダルの表示
		var clickedBtn = this.id;
		if(clickedBtn == 'p1') {
			$.colorbox({ width:'700px', overlayClose: false, inline: true, scrolling: false, escKey: false, href: "#popBox_01"});
		} else {
			$.colorbox({ width:'700px', overlayClose: false, inline: true, scrolling: false, escKey: false, href: "#popBox_01" });
			// 表示ボタンを押下した場合、hiddenの値を取得
			var js_title  = $(this).closest('td').find('.js-title').val(),
					js_use    = $(this).closest('td').find('.js-use').val(),
					js_show   = $(this).closest('td').find('.js-show').val(),
					js_dateSt = $(this).closest('td').find('.js-dateSt').val(),
					js_dateEd = $(this).closest('td').find('.js-dateEd').val(),
					js_open   = $(this).closest('td').find('.js-allow').val(),
					js_detail = $(this).closest('td').find('.js-detail').val();
			// hiddenの値をvalueに入れる
			mo_title.val(js_title);
			mo_use.val(js_use);
			mo_show.val(js_show);
			mo_dateSt.val(js_dateSt);
			mo_dateEd.val(js_dateEd);
			mo_allow.val(js_open);
			mo_detail.val(js_detail);
		}

		// 登録モーダル
		$('.js-confirm').unbind().click(function(e) {
			e.preventDefault();
			var btn,
					content;
			// 認証ボタンを押下した場合
			if (clickedBtn == 'p1') {
				btn = 1;
				content = 'クーポンを登録してもよろしいですか？';
			// 非認証ボタンを押下した場合
			} else {
				btn = 2;
				content = 'クーポンを編集してもよろしいですか？';
			}
			$.confirm({
				theme: 'supervan',
				title: '確認',
				content: content,
				type: 'red',
				buttons: {
					はい: function() {
						btn.submit();
					},
					いいえ: function () {
					}
				}
			});
		});
	});
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
