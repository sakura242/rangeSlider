<?php
/* Smarty version 3.1.29, created on 2020-09-29 19:05:37
  from "C:\Users\sakur\Desktop\xampp\htdocs\menkyolab\application\views\pc\search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f736961642e76_36463544',
  'file_dependency' => 
  array (
    '049c65e7c8ba888d095e3ad73b0b5ebad47157f1' => 
    array (
      0 => 'C:\\Users\\sakur\\Desktop\\xampp\\htdocs\\menkyolab\\application\\views\\pc\\search.tpl',
      1 => 1601399135,
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
function content_5f736961642e76_36463544 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
" <?php }?>> <!-- WRAPPER -->
	<div class="l_wrapper">
		<!-- HEADER -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- / HEADER -->
		<div class="l_frame">
			<!-- FRAME -->
			<div class="l_contents">
				<!-- CONTENTS -->
				<p><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/img/underlayer-topbanner.png" alt="高校生限定 1度にまとめて10校以上の資料請求で、1,000円分図書カード"></a></p>
				<div class="topTextBox">
					<p class="topTextBox_text">PR</p>
					<p class="topTextBox_anchor"><a href="">今なら先着50名様、10,000円割引！今なら先着50名様、10,000円割引！</a></p>
				</div>
	
			
				<!-- 切り替えタブ -->
				<ul class="schoolTab schoolTab-search">
					<li><a class="schoolTab_item" href="#work1"><i class="schoolIcon schoolIcon-home"></i>教習所ごとに表示</a></li>
					<li><a class="schoolTab_item" href="#work2"><i class="schoolIcon schoolIcon-price"></i>地図上に表示</a></li>
				</ul>


				<section id="work1" class="block block-design2 tabsPanel">
				
				</section><!-- 教習所ごとに表示#work1 -->
				<section id="work2" class="block block-design2 tabsPanel">
				

				</section>
				<!-- 地図上に表示#work2 -->



			</div><!-- / CONTENTS -->
			<div class="l_side">
				<!-- SIDE BAR -->
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div><!-- / SIDE BAR-->
		</div><!-- / FRAME -->
		<!-- <p class="pageTop"><a href="#wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/page_top.png" alt="page top" width="78" height="78"></a></p> -->
		<!-- FOOTER -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- / FOOTER -->
	</div><!-- / WRAPPER -->
	
	<?php echo '<script'; ?>
>
		//<![CDATA[
		$(function () {}); //消さない
		//]]>
	<?php echo '</script'; ?>
>
	
	</body>
</html><?php }
}
