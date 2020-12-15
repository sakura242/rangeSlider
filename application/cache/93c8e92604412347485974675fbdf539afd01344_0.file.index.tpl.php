<?php
/* Smarty version 3.1.29, created on 2019-06-01 20:59:03
  from "/home/dev0006/www/thai-lover/production/application/views/sp/inquiry/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cf26887ca4737_14344855',
  'file_dependency' => 
  array (
    '93c8e92604412347485974675fbdf539afd01344' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/inquiry/index.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sp/include/head.tpl' => 1,
    'file:sp/include/header.tpl' => 1,
    'file:sp/include/footer.tpl' => 1,
    'file:sp/include/common.tpl' => 1,
  ),
),false)) {
function content_5cf26887ca4737_14344855 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
"<?php }?>>
<!-- FRAME -->
<div id="frame">
<!-- HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- / HEADER -->
<!-- FRAME -->
<div id="wrap">
	<div id="contents"><!-- CONTENTS -->
		<div class="mc">
			<section class="page">
				<h1>お問い合わせフォーム</h1>
				<div class="mcBox">
					<div class="inBox font">
						<div class="formBox">
							<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inquiry/conf/" method="post">
								<div class="setBtn">
									<dl>
										<dt>■お問い合わせの種類<b>【必須】</b></dt>
										<dd class="input">
											<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['subject'])===null||$tmp==='' ? '' : $tmp);?>

											<select name="subject">
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
										</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お名前(ニックネーム可)<b>【必須】</b></dt>
										<dd class="input">
											<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['name'])===null||$tmp==='' ? '' : $tmp);?>

											<input type="text" name="name" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="text" placeholder="山田太郎" tabindex="1">
										</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■メールアドレス<b>【必須】</b></dt>
										<dd class="input">
											<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>

											<input type="email" name="mail" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="text" placeholder="thailove@gmail.com" tabindex="1">
										</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お電話番号</dt>
										<dd class="input">
											<?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel1'])) {?>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel1'])===null||$tmp==='' ? '' : $tmp);?>

											<?php } elseif (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel2'])) {?>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel2'])===null||$tmp==='' ? '' : $tmp);?>

											<?php } elseif (!empty($_smarty_tpl->tpl_vars['error_msg']->value['tel3'])) {?>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['tel3'])===null||$tmp==='' ? '' : $tmp);?>

											<?php }?>
											<input type="tel" name="tel1" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel1']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="090" tabindex="1" maxlength="4"> - 
											<input type="tel" name="tel2" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel2']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="1111" tabindex="1" maxlength="4"> - 
											<input type="tel" name="tel3" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel3']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" class="tel" placeholder="1111" tabindex="1" maxlength="4">
										</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お問い合わせ内容<b>【必須】</b></dt>
										<dd class="textarea">
											<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value['demand'])===null||$tmp==='' ? '' : $tmp);?>

											<textarea name="demand" placeholder="お問い合わせ内容をご記入ください。"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
										</dd>
									</dl>
								</div>
								<p class="submitbtn"><span><input type="image" name="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/conf_btn.png" alt="入力内容を確認"></span></p>
							</form>
						</div>
					</div>
				</div>
				<div class="mcBoxbottom"></div>
			</section>
		</div>
	</div><!-- / CONTENTS -->
</div>
</div><!-- / FRAME -->
<footer id="globalFooter"><!-- FOOTER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</footer><!-- / FOOTER -->
<div id="topButton"><p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/page_top.png" alt="ページトップへ"></p></div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
