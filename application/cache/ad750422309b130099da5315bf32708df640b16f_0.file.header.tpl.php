<?php
/* Smarty version 3.1.29, created on 2020-09-14 04:09:57
  from "D:\xampp\htdocs\taiseisha0911\application\views\pc\include\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f5ed0f5360ef1_62244595',
  'file_dependency' => 
  array (
    'ad750422309b130099da5315bf32708df640b16f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\taiseisha0911\\application\\views\\pc\\include\\header.tpl',
      1 => 1599820352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ed0f5360ef1_62244595 ($_smarty_tpl) {
?>
<header class="l_header">
  <div class="header">
    <h1 class="header_logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/header-logo.png" alt="大成社"></a>
    </h1>
    <div class="header_address">
      <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/tel-icon1.png" alt="">
      <p class="header_address_tel">0120-000-000</p>
      <p class="header_address_hours">営業時間：00:00〜00:00(土日祝日除く)</p>
      <p class="header_address_hours">住所が入ります。住所が入ります。</p>
    </div><!-- .header_address -->
  </div><!-- .header -->
  <nav>
    <ul class="nav">
      <li class="nav_list">
        <a class="nav_list_text" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index">ホーム<span class="nav_list_text-en">Home</span></a>
      </li>
      <li class="nav_list">
        <a class="nav_list_text" href="#">サービス内容<span class="nav_list_text-en">Service</span></a>
      </li>
      <li class="nav_list">
        <a class="nav_list_text" href="#">ご利用の流れ<span class="nav_list_text-en">Flow</span></a>
      </li>
      <li class="nav_list">
        <a class="nav_list_text" href="#">会社概要<span class="nav_list_text-en">Company</span></a>
      </li>
      <li class="nav_list">
        <a class="nav_list_text" href="#">お問い合わせ<span class="nav_list_text-en">Contact</span></a>
      </li>
    </ul>
  </nav>
</header><?php }
}