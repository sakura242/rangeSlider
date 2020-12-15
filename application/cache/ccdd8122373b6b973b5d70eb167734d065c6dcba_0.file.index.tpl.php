<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:51:03
  from "/home/dev0006/www/thai-lover/production/application/views/pc/inquiry/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce383b77675f6_30586822',
  'file_dependency' => 
  array (
    'ccdd8122373b6b973b5d70eb167734d065c6dcba' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/pc/inquiry/index.tpl',
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
function content_5ce383b77675f6_30586822 ($_smarty_tpl) {
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
inquiry/conf/" method="post">
							<div class="inputBox">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['subject'])===null||$tmp==='' ? '' : $tmp);?>

								<table>
									<tr>
										<th>&#9632;お問い合わせの種類<b class="red">【必須】</b></th>
										<td>
											<select name="subject" class="select">
											<option value="">選択して下さい</option>
											<?php
$_from = $_smarty_tpl->tpl_vars['inquiry_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_wording_0_saved_item = isset($_smarty_tpl->tpl_vars['wording']) ? $_smarty_tpl->tpl_vars['wording'] : false;
$_smarty_tpl->tpl_vars['wording'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['wording']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wording']->value) {
$_smarty_tpl->tpl_vars['wording']->_loop = true;
$__foreach_wording_0_saved_local_item = $_smarty_tpl->tpl_vars['wording'];
?>
											<?php if (isset($_smarty_tpl->tpl_vars['subject']->value) && $_smarty_tpl->tpl_vars['subject']->value == $_smarty_tpl->tpl_vars['wording']->value) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['wording']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['wording']->value;?>
</option>
											<?php } else { ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['wording']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wording']->value;?>
</option>
											<?php }?>
											<?php
$_smarty_tpl->tpl_vars['wording'] = $__foreach_wording_0_saved_local_item;
}
if ($__foreach_wording_0_saved_item) {
$_smarty_tpl->tpl_vars['wording'] = $__foreach_wording_0_saved_item;
}
?>
											</select>
										</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['name'])===null||$tmp==='' ? '' : $tmp);?>

								<table>
									<tr>
										<th>&#9632;お名前<b class="red">【必須】</b><br>(ニックネーム可)</th>
										<td>
											<input type="text" name="name" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="name" placeholder="山田太郎" tabindex="1">
										</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>

								<table>
									<tr>
										<th>&#9632;メールアドレス<b class="red">【必須】</b></th>
										<td>
											<input type="text" name="mail" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="mail" placeholder="thailove@gmail.com" maxlength="200" tabindex="1">
										</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel1'])) {?>
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel1'])===null||$tmp==='' ? '' : $tmp);?>

								<?php } elseif (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel2'])) {?>
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel2'])===null||$tmp==='' ? '' : $tmp);?>

								<?php } elseif (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel3'])) {?>
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel3'])===null||$tmp==='' ? '' : $tmp);?>

								<?php }?>
								<table>
									<tr>
										<th>&#9632;お電話番号</th>
										<td>
											<input type="text" name="tel1" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel1']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="090" tabindex="1" maxlength="4"> - 
											<input type="text" name="tel2" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel2']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="1111" tabindex="1" maxlength="4"> - 
											<input type="text" name="tel3" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel3']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="1111" tabindex="1" maxlength="4">
										</td>
									</tr>
								</table>
							</div>
							<div class="inputBox">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['demand'])===null||$tmp==='' ? '' : $tmp);?>

								<table>
									<tr>
										<th>&#9632;お問い合わせ内容<b class="red">【必須】</b></th>
										<td class="pt20 pb20"><textarea name="demand" class="textarea" tabindex="1"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
									</tr>
								</table>
							</div>
							<div class="submitBtn"><input type="submit" name="" class="checkBtn" value="入力内容の確認" tabindex="1"></div>
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
