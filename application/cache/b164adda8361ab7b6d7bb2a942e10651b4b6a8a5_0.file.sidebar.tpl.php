<?php
/* Smarty version 3.1.29, created on 2020-09-14 04:09:57
  from "D:\xampp\htdocs\taiseisha0911\application\views\pc\include\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f5ed0f5389b93_53248245',
  'file_dependency' => 
  array (
    'b164adda8361ab7b6d7bb2a942e10651b4b6a8a5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha0911\\application\\views\\pc\\include\\sidebar.tpl',
      1 => 1599796409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ed0f5389b93_53248245 ($_smarty_tpl) {
?>
<div class="side">
  <div class="sideAddress">
    <p class="sideAddress_text">お問い合わせはこちら</p>
    <p class="sideAddress_text-en">CONTACT</p>
    <img class="sideAddress_telicon" src="img/tel-icon1.png" alt="">
    <p class="sideAddress_tel">0120-000-000</p>
    <p class="sideAddress_hours">受付時間：00:00〜00:00</p>
    <p class="sideAddress_hours sideAddress_hours-textRight">(土日祝日除く)</p>
    <p class="sideAddress_btn"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/mail-icon1.png" alt="">お問合わせフォーム</a></p>
  </div>
  <nav>
    <ul class="sideNav">
      <li class="sideNav_list">
        <a class="sideNav_list_content" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/design">デザイン制作<span>Design</span></a>
      </li>
      <li class="sideNav_list">
        <a class="sideNav_list_content sideNav_list_content-bg1" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/system">システム開発<span>Stystem</span></a>
      </li>
      <li class="sideNav_list">
        <a class="sideNav_list_content sideNav_list_content-bg2" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/printing">印刷事業<span>Printing</span></a>
      </li>
      <li class="sideNav_list">
        <a class="sideNav_list_content sideNav_list_content-bg3" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/business">営業代行業務<span>Business</span></a>
      </li>
    </ul>
  </nav>
</div><?php }
}
