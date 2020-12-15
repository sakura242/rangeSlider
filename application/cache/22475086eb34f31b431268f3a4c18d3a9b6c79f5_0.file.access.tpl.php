<?php
/* Smarty version 3.1.29, created on 2019-05-23 19:15:25
  from "/home/dev0006/www/thai-lover/production/application/views/admin/shop/access.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce672bdad4a08_70749610',
  'file_dependency' => 
  array (
    '22475086eb34f31b431268f3a4c18d3a9b6c79f5' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/shop/access.tpl',
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
function content_5ce672bdad4a08_70749610 ($_smarty_tpl) {
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

				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/" method="post">
					<div class="block block-frame5 block-spaceS cf">
						<table class="table table-borderLeftNone">
							<colgroup span="1" class="table_col-3"></colgroup>
							<colgroup span="1" class="table_col-7"></colgroup>
							<tbody>
								<tr>
									<th class="table_title table_title-borderBottom">地図コード</th>
									<td class="table_data table_data-positionLeft">
										<div class="textBox">
											<p class="textBox_text">Googleマップの地図コードを埋め込んでください。</p>
										</div>
										<textarea name="" class="table_data_textArea table_data_textArea-small" tabindex="1"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="block block-positionCenter block-spaceM cf">
							<li class="btn btn-small btn-inline btn-color5 btn-radius">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/lecture/" class="btn_link" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
							</li>
							<li class="btn btn-small btn-inline btn-radius btn-leftSpaceL">
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
		comment   : '地図・アクセスを登録してもよろしいですか？',
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
	}

});
//]]>
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
