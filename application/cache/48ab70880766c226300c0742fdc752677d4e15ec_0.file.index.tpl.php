<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:20
  from "/home/dev0006/www/thai-lover/production/application/views/admin/voice/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c58d0cda3_49310431',
  'file_dependency' => 
  array (
    '48ab70880766c226300c0742fdc752677d4e15ec' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/voice/index.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include/head.tpl' => 1,
    'file:admin/include/header.tpl' => 1,
    'file:admin/include/sidebar.tpl' => 1,
    'file:admin/voice/voice_menu.tpl' => 1,
    'file:admin/voice/voice_search.tpl' => 1,
    'file:admin/include/pager.tpl' => 1,
  ),
),false)) {
function content_5ce27c58d0cda3_49310431 ($_smarty_tpl) {
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
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/voice/voice_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/voice/voice_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			<div class="block block-spaceS">
				<table class="table table-borderTopNone">
					<colgroup span="1" class="table_col-05"></colgroup>
					<colgroup span="1" style="width: 11%;"></colgroup>
					<colgroup span="1" class="table_col-07"></colgroup>
					<colgroup span="1" style="width: 12%;"></colgroup>
					<colgroup span="1" class="table_col-2half"></colgroup>
					<colgroup span="1" class="table_col-4"></colgroup>
					<thead>
						<tr>
							<th class="table_title">閲覧</th>
							<th class="table_title table_title-borderLeft">投稿日時</th>
							<th class="table_title table_title-borderLeft">ジャンル</th>
							<th class="table_title table_title-borderLeft">エリア</th>
							<th class="table_title table_title-borderLeft">店舗名</th>
							<th class="table_title table_title-borderLeft">コメント</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table_data">
								<div class="btn btn-xSmall btn-color2 btn-positionAuto btn-radius"><a href="#" class="js-open btn_link btn_link-spaceS" tabindex="1">表示</a></div>
							</td>
							<td class="table_data">2018/03/31  15:30:50</td>
							<td class="table_data"><span class="table_data_status table_data_status-color1">ゴーゴーバー</span></td>
							<td class="table_data">ラチャダービセーク</td>
							<td class="table_data">テキストテキストテキストテキストテキスト</td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
						</tr>
						
						<tr>
							<td colspan="6" class="table_data">表示する口コミがありませんでした。</td>
						</tr>
					</tbody>
				</table>
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/include/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
								<h2 class="title_text">口コミ[未承認]</h2>
							</div>
						</div>
						<div class="textBox textBox-spaceS">
							<p class="js-error textBox_text textBox_text-color1"></p>
						</div>
						<table class="table table-spaceM">
							<colgroup span="5" class="table_col-2"></colgroup>
							<tbody>
								<tr>
									<th colspan="3" class="table_title">投稿日時</th>
									<th colspan="2" class="table_title table_title-borderLeft">投稿者名</th>
								</tr>
								<tr>
									<td colspan="3" class="table_data">2018/01/01 13:50:50</td>
									<td colspan="2" class="table_data"></td>
								</tr>
								<tr>
									<th colspan="2" class="table_title">ジャンル</th>
									<th colspan="3" class="table_title table_title-borderLeft">エリア</th>
								</tr>
								<tr>
									<td colspan="2" class="table_data">ゴーゴーバー</td>
									<td colspan="3" class="table_data">ラチャダービセーク</td>
								</tr>
								<tr>
									<th colspan="5" class="table_title">店舗名</th>
								</tr>
								<tr>
									<td colspan="5" class="table_data">テキストテキストテキスト</td>
								</tr>
								<tr>
									<th class="table_title">価格面</th>
									<th class="table_title table_title-borderLeft">店員態度</th>
									<th class="table_title table_title-borderLeft">接客態度</th>
									<th class="table_title table_title-borderLeft">サービス</th>
									<th class="table_title table_title-borderLeft">日本語</th>
								</tr>
								<tr>
									<td class="table_data">
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon2"></i>
									</td>
									<td class="table_data">
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon2"></i>
										<i class="reviews reviews-icon2"></i>
										<i class="reviews reviews-icon2"></i>
									</td>
									<td class="table_data">
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
									</td>
									<td class="table_data">
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon2"></i>
										<i class="reviews reviews-icon2"></i>
										<i class="reviews reviews-icon2"></i>
										<i class="reviews reviews-icon2"></i>
									</td>
									<td class="table_data">
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon1"></i>
										<i class="reviews reviews-icon2"></i>
									</td>
								</tr>
								<tr>
									<th colspan="5" class="table_title table_title-medium">コメント</th>
								</tr>
								<tr>
									<td colspan="5" class="table_data table_data-positionLeft">テキストテキストテキスト</td>
								</tr>
							</tbody>
						</table>
					</section>
					<ul class="block block-positionCenter block-spaceM cf">
						<li class="btn btn-small btn-inline btn-radius">
							<a href="#" id="p1" class="js-confirm btn_link" tabindex="1"><i class="btn_icon btn_icon-6"></i>承認</a>
						</li>
						<li class="btn btn-small btn-inline btn-color2 btn-radius">
							<a href="#" id="p2" class="js-confirm btn_link" tabindex="1"><i class="btn_icon btn_icon-7"></i>非承認</a>
						</li>
						<li class="btn btn-small btn-inline btn-color6 btn-radius">
							<a href="#" class="js-delete btn_link" tabindex="1"><i class="btn_icon btn_icon-5"></i>削除</a>
						</li>
						<li class="btn btn-small btn-inline btn-color5 btn-radius">
							<a href="javascript:void(0)" class="js-close btn_link" onclick="$.colorbox.close(); return false;" tabindex="1"><i class="btn_icon btn_icon-9"></i>閉じる</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<!-- / modal popBox2 送金ボタンあり -->
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

	// プロフィール写真登録
	$('.js-open').on('click', function(e){
		e.preventDefault();
		$.colorbox({
			width:'700px',
			overlayClose: false,
			inline: true,
			scrolling: false,
			escKey: false,
			href: "#popBox_01"
		});

		// 登録モーダル
		$('.js-confirm').unbind().click(function(e) {
			e.preventDefault();
			var btn,
					content,
					clickedBtn = this.id;
			// 認証ボタンを押下した場合
			if (clickedBtn == 'p1') {
				btn = 1;
				content = 'この口コミを認証にしてもよろしいですか？';
			// 非認証ボタンを押下した場合
			} else {
				btn = 2;
				content = 'この口コミを非認証にしてもよろしいですか？';
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
</html>
<?php }
}
