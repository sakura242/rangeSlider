<?php
/* Smarty version 3.1.29, created on 2019-05-20 19:06:16
  from "/home/dev0006/www/thai-lover/production/application/views/admin/login/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce27c18bd1ab4_79140058',
  'file_dependency' => 
  array (
    'b9ac4ae8295eb8f5945caca4e87c9ad5da874258' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/admin/login/index.tpl',
      1 => 1558344464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include/head.tpl' => 1,
  ),
),false)) {
function content_5ce27c18bd1ab4_79140058 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body class="login_body">
<div class="l_wrapper"><!-- WRAPPER  -->
<!-- HEADER -->
<!-- / HEADER -->
<div class="l_frame"><!-- FRAME -->
<div class="b_contents-login"><!-- CONTENTS -->
	<div class="login">
		<div class="login_outSide">
			<div class="login_outSide_logo"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo.png" alt="たいらぶ" width="215"></div>
		</div>
		<div class="login_box login_box-small">
			<div class="login_box_inner">
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/shop/" method="post">
					<dl class="login_box_innerItem">
						<dt><b>ログインID</b></dt>
						<p class="error"></p>
						<dd>
							<input type="text" name="login_id" maxlength="20" value="">
						</dd>
					</dl>
					<dl class="login_box_innerItem">
						<dt><b>パスワード</b></dt>
						<p class="error"></p>
						<dd>
							<input type="password" name="password" maxlength="20" value="">
						</dd>
					</dl>
					<div class="login_box_innerBtn">
						<input type="submit" name="login" value="ログイン">
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!-- / CONTENTS -->
</div><!-- / FRAME -->
</div><!-- / WRAPPER  -->
<?php echo '<script'; ?>
>
//<![CDATA[
//]]>
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
