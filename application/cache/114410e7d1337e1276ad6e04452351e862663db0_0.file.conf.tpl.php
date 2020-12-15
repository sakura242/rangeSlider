<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:51:49
  from "/home/dev0006/www/thai-lover/production/application/views/pc/inquiry/conf.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce383e5667b90_82516331',
  'file_dependency' => 
  array (
    '114410e7d1337e1276ad6e04452351e862663db0' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/inquiry/conf.tpl',
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
function content_5ce383e5667b90_82516331 ($_smarty_tpl) {
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
		<li>お問い合わせフォーム</li>
	</ul>
</nav>
<div id="contents"><!-- CONTENTS -->
<div class="mc">
	<article class="page">
		<h1>お問い合わせフォーム</h1>
		<div class="mcBox mcb">
			<section>
				<div class="inBox font">
					<div class="basicForm">
						<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inquiry/modify/" method="post">
							<div class="inputBox">
								<table>
									<tr>
										<th>&#9632;お問い合わせの種類</th>
										<td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<table>
									<tr>
										<th>&#9632;お名前(ニックネーム可)</th>
										<td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<table>
									<tr>
										<th>&#9632;メールアドレス</th>
										<td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<table>
									<tr>
										<th>&#9632;お電話番号</th>
										<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['tel1']->value) || !empty($_smarty_tpl->tpl_vars['tel2']->value) || !empty($_smarty_tpl->tpl_vars['tel3']->value)) {?>
										<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel1']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel2']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel3']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

										<?php }?>
										</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<table>
									<tr>
										<th>&#9632;お問い合わせ内容</th>
										<td class="pt20"><?php echo (($tmp = @nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value, ENT_QUOTES, 'UTF-8', true)))===null||$tmp==='' ? '' : $tmp);?>
</td>
									</tr>
								</table>
							</div>
							<p class="submitBtn">
								<input type="submit" name="sendbtn" class="sendBtn" value="送信" tabindex="1">
								<input type="submit" name="modifybtn" class="backBtn" value="戻る" tabindex="1">
							</p>
							
							<?php
$_from = $_smarty_tpl->tpl_vars['input_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_data_0_saved_item = isset($_smarty_tpl->tpl_vars['post_data']) ? $_smarty_tpl->tpl_vars['post_data'] : false;
$__foreach_post_data_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['post_data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post_data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['post_data']->value) {
$_smarty_tpl->tpl_vars['post_data']->_loop = true;
$__foreach_post_data_0_saved_local_item = $_smarty_tpl->tpl_vars['post_data'];
?>
								<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_data']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<?php
$_smarty_tpl->tpl_vars['post_data'] = $__foreach_post_data_0_saved_local_item;
}
if ($__foreach_post_data_0_saved_item) {
$_smarty_tpl->tpl_vars['post_data'] = $__foreach_post_data_0_saved_item;
}
if ($__foreach_post_data_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_post_data_0_saved_key;
}
?>
						</form>
					</div>
				</div>
			</section>
		</div>
		<div class="mcBoxbottom"></div>
	</article>
</div>
</div><!-- / CONTENTS -->
<div id="side"><!-- SIDE BAR -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!-- / SIDE BAR-->
<div id="topButton"><p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/page_top.png" alt=""></p></div>
</div><!-- / FRAME -->
<footer id="globalFooter"><!-- FOOTER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</footer><!-- / FOOTER -->
</div><!-- / FRAME -->
</body>
</html><?php }
}
