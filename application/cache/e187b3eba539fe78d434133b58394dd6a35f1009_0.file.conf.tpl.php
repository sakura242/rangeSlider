<?php
/* Smarty version 3.1.29, created on 2019-06-24 12:29:55
  from "/home/dev0006/www/thai-lover/production/application/views/sp/inquiry/conf.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5d1043b3b03a58_68052427',
  'file_dependency' => 
  array (
    'e187b3eba539fe78d434133b58394dd6a35f1009' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/inquiry/conf.tpl',
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
function content_5d1043b3b03a58_68052427 ($_smarty_tpl) {
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
inquiry/modify/" method="post">
								<div class="setBtn">
									<dl>
										<dt>■お問い合わせの種類</dt>
										<dd class="input"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お名前(ニックネーム可)</dt>
										<dd class="input"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■メールアドレス</dt>
										<dd class="input"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お電話番号</dt>
										<dd class="input">
										<?php if (!empty($_smarty_tpl->tpl_vars['tel1']->value) || !empty($_smarty_tpl->tpl_vars['tel2']->value) || !empty($_smarty_tpl->tpl_vars['tel3']->value)) {?>
										<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel1']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel2']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['tel3']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>

										<?php }?>
										</dd>
									</dl>
								</div>
								<div class="setBtn">
									<dl>
										<dt>■お問い合わせ内容</dt>
										<dd class="textarea"><?php echo (($tmp = @nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value, ENT_QUOTES, 'UTF-8', true)))===null||$tmp==='' ? '' : $tmp);?>
</dd>
									</dl>
								</div>
								<p class="submitbtn2">
									<span><input type="image" name="sendbtn" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/send_btn.png" alt="送信する"></span>
									<span><input type="image" name="modifybtn" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/back_btn.png" alt="戻る"></span>
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
