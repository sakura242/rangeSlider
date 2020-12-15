<?php
/* Smarty version 3.1.29, created on 2020-12-11 04:46:31
  from "D:\xampp\htdocs\fullCalendar_3\application\views\pc\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd2eb978b9de1_11353081',
  'file_dependency' => 
  array (
    '8b7a507269893564931f317cd49683646a341446' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fullCalendar_3\\application\\views\\pc\\index.tpl',
      1 => 1607658373,
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
function content_5fd2eb978b9de1_11353081 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8"> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
" <?php }?>> <!-- WRAPPER -->
	<div class="l_wrapper"> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div class="l_frame">
			<!-- FRAME -->
			<div class="l_contents">
				<div id='calendar-view'></div>
				<!-- スケジュール -->
				<div class="btn">
					<p class="btn_box btn_box-design2 js-editjq">
            <i class="icon icon-spaceRightXS fas fa-pen-alt"></i>画面上で編集する
          </p>
				</div>
				<div class="block block-spaceM">
					<div id="schedule" class=""></div>
				</div>
			</div>
			<div class="l_side"> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div>
		</div><!-- / FRAME --> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div><!-- / WRAPPER -->
	</body>
</html><?php }
}
