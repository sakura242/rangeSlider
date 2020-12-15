<?php
/* Smarty version 3.1.29, created on 2019-05-23 19:23:25
  from "/home/dev0006/www/thai-lover/production/application/views/admin/master/lecture/create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce6749d371388_97005690',
  'file_dependency' => 
  array (
    'ef2075175f819a96f84e9001d297999b11b16574' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/master/lecture/create.tpl',
      1 => 1558344465,
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
function content_5ce6749d371388_97005690 ($_smarty_tpl) {
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
					<div class="block block-frame3 block-spaceS cf">
						<table class="table table-borderLeftNone">
							<colgroup span="1" class="table_col-3half"></colgroup>
							<colgroup span="1" class="table_col-6half"></colgroup>
							<tbody>
								<tr>
									<th class="table_title table_title-borderBottom">ジャンル<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<select name="" class="table_data_select table_data_select-size3half" tabindex="1">
											<option value=""></option>
											<option value="">日常会話</option>
											<option value="">夜の会話</option>
										</select>
									</td>
								</tr>
								<tr>
									<th class="table_title table_title-borderBottom">カテゴリー<span class="table_title_required"></span></th>
									<td class="table_data table_data-positionLeft">
										<input type="text" name="name" value="" class="table_data_input" maxlength="20" tabindex="1">
										<br>※20文字以内
								</tr>
							</tbody>
						</table>
						<ul class="block block-positionCenter block-spaceM cf">
							<li class="btn btn-small btn-inline btn-color5 btn-radius">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/master/lecture/" class="btn_link" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
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
		comment   : 'カテゴリーを登録してもよろしいですか？',
		url       : ''
	});
});
//]]>
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
