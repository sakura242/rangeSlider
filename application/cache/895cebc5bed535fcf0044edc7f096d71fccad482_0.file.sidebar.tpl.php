<?php
/* Smarty version 3.1.29, created on 2020-09-16 05:09:46
  from "D:\xampp\htdocs\taiseisha\application\views\pc\include\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f6181fa877f98_39645316',
  'file_dependency' => 
  array (
    '895cebc5bed535fcf0044edc7f096d71fccad482' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha\\application\\views\\pc\\include\\sidebar.tpl',
      1 => 1600225783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6181fa877f98_39645316 ($_smarty_tpl) {
?>
<div class="side">
  <div class="sideAddress">
    <p class="sideAddress_text">お問い合わせはこちら</p>
    <p class="sideAddress_text-en">CONTACT</p>
    <div  class="sideAddress_tel">
      <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/tel-icon1.png" alt="">
      <p>0120-000-000</p>
    </div>
    <p class="sideAddress_hours">受付時間：00:00〜00:00</p>
    <p class="sideAddress_hours sideAddress_hours-textRight">(土日祝日除く)</p>
    <p class="sideAddress_btn">
      <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/mail-icon1.png" alt="">お問合わせフォーム</a>
    </p>
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
