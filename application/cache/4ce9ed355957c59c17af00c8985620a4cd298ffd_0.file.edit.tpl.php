<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:07:45
  from "/home/dev0006/www/thai-lover/production/application/views/admin/shop/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c71659fd5_32881151',
  'file_dependency' => 
  array (
    '4ce9ed355957c59c17af00c8985620a4cd298ffd' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/shop/edit.tpl',
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
function content_5ce27c71659fd5_32881151 ($_smarty_tpl) {
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
					<div class="block block-spaceS cf">
						<table class="table table-borderLeftNone">
							<colgroup span="1" class="table_col-1"></colgroup>
							<colgroup span="1" class="table_col-4"></colgroup>
							<colgroup span="1" class="table_col-1"></colgroup>
							<colgroup span="1" class="table_col-4"></colgroup>
							<tbody>
								<tr>
									<th class="table_title table_title-borderBottom">カテゴリー<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<select name="condition[tp_status]" id="tp_status" class="table_data_select table_data_select-size3half" tabindex="1">
											<option value="">未選択</option>
											<option value="">ゴーゴーバー</option>
											<option value="">カラオケ</option>
											<option value="">マッサージ</option>
											<option value="">MP</option>
											<option value="">コヨーテ</option>
											<option value="">ナイトスポット</option>
										</select>
									</td>
									<th class="table_title table_title-borderBottom">店舗名<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">住所</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
									<th class="table_title table_title-borderBottom">連絡先</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">営業時間</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
									<th class="table_title table_title-borderBottom">定休日</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
								</tr>
								<tr>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">アクセス</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
									<th class="table_title table_title-borderBottom">支払方法</th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="" value="" class="table_data_input" tabindex="1">
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">設備<br>こだわり情報</th>
									<td colspan="3" class="table_data table_data-positionLeft">
										<div class="textBox">
											<p class="textBox_text">お店に備え付けられているものを選択してください。</p>
										</div>
										<ul class="FacilityList cf">
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon01_off.png" class="js-iconBtn" alt="wi-fi" width="55" height="37">
												<input type="hidden" name="equipment_wifi" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon02_off.png" class="js-iconBtn" alt="日本語" width="55" height="37">
												<input type="hidden" name="equipment_jp" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon03_off.png" class="js-iconBtn" alt="英語" width="55" height="37">
												<input type="hidden" name="equipment_en" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon04_off.png" class="js-iconBtn" alt="カード" width="55" height="37">
												<input type="hidden" name="equipment_card" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon05_off.png" class="js-iconBtn" alt="日本円" width="55" height="37">
												<input type="hidden" name="equipment_yen" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon06_off.png" class="js-iconBtn" alt="ドル" width="55" height="37">
												<input type="hidden" name="equipment_dollar" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon07_off.png" class="js-iconBtn" alt="領収書" width="55" height="37">
												<input type="hidden" name="equipment_receipt" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon08_off.png" class="js-iconBtn" alt="喫煙" width="55" height="37">
												<input type="hidden" name="equipment_smoking" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon09_off.png" class="js-iconBtn" alt="VIPルーム" width="55" height="37">
												<input type="hidden" name="equipment_vip" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon10_off.png" class="js-iconBtn" alt="バスタブ" width="55" height="37">
												<input type="hidden" name="equipment_bath" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon11_off.png" class="js-iconBtn" alt="シャワー" width="55" height="37">
												<input type="hidden" name="equipment_shower" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon12_off.png" class="js-iconBtn" alt="店外デート" width="55" height="37">
												<input type="hidden" name="equipment_date" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon13_off.png" class="js-iconBtn" alt="コスプレ" width="55" height="37">
												<input type="hidden" name="equipment_cosplay" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon14_off.png" class="js-iconBtn" alt="おもちゃ持込" width="55" height="37">
												<input type="hidden" name="equipment_toy" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon15_off.png" class="js-iconBtn" alt="コンドーム" width="55" height="37">
												<input type="hidden" name="equipment_condom" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon16_off.png" class="js-iconBtn" alt="ローション" width="55" height="37">
												<input type="hidden" name="equipment_lotion" value="0">
											</li>
											<li class="FacilityList_item">
												<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/admin/shop/shop_icon17_off.png" class="js-iconBtn" alt="2回線" width="55" height="37">
												<input type="hidden" name="equipment_twice" value="0">
											</li>
										</ul>
										<textarea name="" class="table_data_textArea" tabindex="1"></textarea>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">VIPルーム</th>
									<td colspan="3" class="table_data table_data-positionLeft">
										<textarea name="" class="table_data_textArea" tabindex="1"></textarea>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">メニュー</th>
									<td colspan="3" class="table_data table_data-positionLeft">
										<textarea name="" class="table_data_textArea" tabindex="1"></textarea>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">その他</th>
									<td colspan="3" class="table_data table_data-positionLeft">
										<textarea name="" class="table_data_textArea" tabindex="1"></textarea>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderLeft table_title-borderBottom">画像</th>
									<td colspan="3" class="table_data table_data-positionLeft">
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
	// 匿名・不明にチェックが入ったら「お客様名」にdisabledがつく
	appCommon.anonCheck();
	// 削除モーダル
	appCommon.delete();
	// 登録モーダル
	var confirm = new appCommon.confirm();
	confirm.init({
		textTitle : '確認',
		comment   : '基本情報を登録してもよろしいですか？',
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

	// 設備のon・off
	$('.js-iconBtn').on('click', function() {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			$(this).attr('src', $(this).attr('src').replace('_off', '_on'));
			$(this).next('input').val(1);
		} else {
			$(this).removeClass('active');
			$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
			$(this).next('input').val(0);
		}
	});

});
//]]>
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
