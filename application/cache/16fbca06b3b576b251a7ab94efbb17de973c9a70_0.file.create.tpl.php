<?php
/* Smarty version 3.1.29, created on 2019-05-23 19:26:05
  from "/home/dev0006/www/thai-lover/production/application/views/admin/info/create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce6753de43ce3_97117584',
  'file_dependency' => 
  array (
    '16fbca06b3b576b251a7ab94efbb17de973c9a70' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/info/create.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include/head.tpl' => 1,
    'file:admin/include/header.tpl' => 1,
    'file:admin/include/sidebar.tpl' => 1,
  ),
),false)) {
function content_5ce6753de43ce3_97117584 ($_smarty_tpl) {
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
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/" method="post">
					<div class="block block-frame4half block-spaceS cf">
						<table class="table table-borderLeftNone">
							<colgroup span="1" class="table_col-3"></colgroup>
							<colgroup span="1" class="table_col-7"></colgroup>
							<tbody>
								<tr>
									<th class="table_title table_title-borderBottom">公開日<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input table_data_input-positionCenter table_data_input-size2 datepicker" tabindex="1" readonly="readonly">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">公開範囲</th>
									<td class="table_data table_data-positionLeft">
										<select name="" id="tp_status" class="table_data_select table_data_select-size1half" tabindex="1">
											<option value="">公開</option>
											<option value="">非公開</option>
										</select>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">タイトル<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderLeft table_title-borderBottom">画像</th>
									<td class="table_data table_data-positionLeft">
										画像形式はjpg(jpeg)のみとなります。<br>
										横幅640px以上の画像は自動的にリサイズされます。
										<div class="block cf">
											<div class="block_left" style="width: 120px;">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/no_image.jpg" width="120" height="90" alt="たいらぶ">
											</div>
											<div class="block_left block_left-spaceS">
												<div style="margin-top: 35px;">
													<div class="js-fileName textBox textBox-fileIcon">
														<p class="textBox_text"></p>
													</div>
													<div class="fileBox">
														<div class="fileBox_item">
															<div class="js-profile_image">
																<label class="fileBox_item_uploadBtn">ファイルを選択<input type="file" id="upload-form-fileselect" name="profile_image" value="" accept="image/jpeg" tabindex="1"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderLeft table_title-borderBottom">詳細</th>
									<td class="table_data table_data-positionLeft">
										<textarea name="" class="table_data_textArea" tabindex="1"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="block block-positionCenter block-spaceM cf">
							<li class="btn btn-small btn-inline btn-color5 btn-radius">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/lecture/" class="btn_link" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
							</li>
							<li class="btn btn-small btn-inline btn-radius">
								<a href="#" class="js-confirm btn_link" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</section>
	</div>
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
	// 削除モーダル
	appCommon.delete();
	// 登録モーダル
	var confirm = new appCommon.confirm();
	confirm.init({
		textTitle : '確認',
		comment   : 'お知らせを登録してもよろしいですか？',
		url       : ''
	});

	// ファイル添付処理
	var fileName = $('.js-fileName'),
			callCount = 0;
	// ファイルがアップロードされているかチェックをする
	fileCheck();
	// ページを開いたとき、ファイルが添付されていなければ非表示
	fileName.text('').hide();
	$('#upload-form-fileselect').val('');

	// ファイル選択を行った場合
	$("input:file").change(function (){
		$('.fileBox').css('margin-top', '10px');
		fileCheck();
	});

	// ファイルのチェック
	function fileCheck(files=null) {
		// アップされたファイル名を取得する
		var nameArray = new Array(),
		// 描写用の変数
				inputData = "",
		// アップされたファイルの数
				fileCount = $("#upload-form-fileselect").prop('files');
		// 取得したファイルを格納する
		for (var i = 0; i < fileCount.length; i++) {
			nameArray.push(fileCount[i].name);
		}
		// 複数ファイルがアップロードされた場合は、複数分処理を行う
		$.each(nameArray, function(i, val) {
			inputData += "<p class='textBox_text'>" + fileCount[i].name + "</p>";
		});
		fileName.html(inputData).show();
		// ファイルアップロード実行
		// execUploadFile();
	}

	// // ファイルアップロード処理
	// function execUploadFile() {
	// 	if (callCount > 1) { return }
	// 	var fileData = new FormData($('#form_attachment').get(0));
	// 	// ファイルアップロード
	// 	$.ajax({
	// 		url         : 'https://demo.nron.jp/hoks/upload_file',
	// 		type        : 'POST',
	// 		processData : false,
	// 		contentType : false,
	// 		cache       : false,
	// 		dataType    : 'json',
	// 		mimeType    : "multipart/form-data",
	// 		data        : fileData
	// 	}).done(function (data) {
	// 		callCount = 0;
	// 		// ファイル選択またはドロップしたファイルの個数とファイルのタイプをチェック
	// 		// resultに「false」があった場合、処理をしない
	// 		if (data.upload_file['result'] == false) {
	// 			$('.js-error').html(data.upload_file['error']).show();
	// 			$.colorbox.resize();
	// 			return false;
	// 		// resultが全て「true」の場合、保存する
	// 		} else {
	// 			$('.js-error').hide();
	// 			$.colorbox.resize();
	// 		}
	// 		// ファイルリスト再作成
	// 		recreateFileList(data.current_list);
	// 	}).fail(function(){
	// 		alert('ファイルアップロードに失敗しました');
	// 		callCount = 0;
	// 	});
	// }


});
//]]>
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
