<?php
/* Smarty version 3.1.29, created on 2019-05-23 19:23:19
  from "/home/dev0006/www/thai-lover/production/application/views/admin/master/area/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce6749759d692_47170137',
  'file_dependency' => 
  array (
    '9391999b89a0d2cc376d69086a34e9a3342cbff4' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/master/area/index.tpl',
      1 => 1558344465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include/head.tpl' => 1,
    'file:admin/include/header.tpl' => 1,
    'file:admin/include/sidebar.tpl' => 1,
    'file:admin/master/master_menu.tpl' => 1,
  ),
),false)) {
function content_5ce6749759d692_47170137 ($_smarty_tpl) {
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
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master/master_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="textBox textBox-spaceS">
					<p class="textBox_text">各エリアの登録は最大4つまでとなります。</p>
				</div>
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/" method="post">
					<div class="block block-frame6half block-spaceS cf">
						<div class="block_left block_left-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">ゴーゴーバー</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
						<div class="block_right block_right-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">カラオケ</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
					</div>
					<div class="block block-frame6half block-spaceM cf">
						<div class="block_left block_left-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">マッサージ</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
						<div class="block_right block_right-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">MP</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
					</div>
					<div class="block block-frame6half block-spaceM cf">
						<div class="block_left block_left-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">コヨーテ</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
						<div class="block_right block_right-frame4half">
							<section>
								<div class="title">
									<div class="title_bottomMark">
										<h3 class="title_text">ナイトスポット</h3>
									</div>
								</div>
								<table class="table table-borderTopNone">
									<colgroup span="1" class="table_col-5"></colgroup>
									<colgroup span="1" class="table_col-2"></colgroup>
									<colgroup span="1" class="table_col-3"></colgroup>
									<thead>
										<tr>
											<th class="table_title">エリア名</th>
											<th class="table_title table_title-borderLeft">登録店舗数</th>
											<th class="table_title table_title-borderLeft">公開範囲</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="table_data table_data-positionLeft">
												<p class="js-error error"></p>
												<input type="" name="" value="" class="js-areaName table_data_input" tabindex="1" placeholder="">
											</td>
											<td class="table_data js-shopNumber"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/">10</a></td>
											<td class="table_data table_data-positionLeft">
												<ul class="checkBox cf">
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="1" id="status1" tabindex="1" checked="checked">
														<label for="status1" class="checkBox_list_label">非公開</label>
													</li>
													<li class="checkBox_list">
														<input type="radio" name="gogo" value="2" id="status2" tabindex="1">
														<label for="status2" class="checkBox_list_label">公開</label>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</section>
						</div>
					</div>
					<div class="block block-frame7 block-positionCenter block-spaceL">
						<div class="btn btn-small btn-inline btn-radius">
							<a href="#" class="js-confirm btn_link" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
						</div>
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
	// 登録モーダル
	var confirm = new appCommon.confirm();
	confirm.init({
		textTitle : '確認',
		comment   : 'エリアを編集してもよろしいですか？',
		url       : ''
	});

	// クリア処理
	$('.js-clear').on('click', function() {
		var areaName   = '.js-areaName',
				shopNumber = $(this).parents('tr').find('.js-shopNumber > a'),
				error      = $(this).parents('tr').find('.js-error');
		if(shopNumber.length != '0') {
			error.html('登録されている店舗があるため削除できません。').show();
		} else {
			error.hide();
			$(this).parents('tr').find(areaName).val('');
			$(this).parents('tr').find('input[type="radio"]').eq(0).prop('checked', true);
		}
	});
});
//]]>
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
