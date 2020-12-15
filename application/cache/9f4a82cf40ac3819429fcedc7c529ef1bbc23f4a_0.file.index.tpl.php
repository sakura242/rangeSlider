<?php
/* Smarty version 3.1.29, created on 2020-12-15 08:06:56
  from "D:\xampp\htdocs\rangeSlider\application\views\pc\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd860905f20d9_15835399',
  'file_dependency' => 
  array (
    '9f4a82cf40ac3819429fcedc7c529ef1bbc23f4a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\rangeSlider\\application\\views\\pc\\index.tpl',
      1 => 1607937328,
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
function content_5fd860905f20d9_15835399 ($_smarty_tpl) {
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

        <!-- 経過日数 -->
        <div class="time sliderBox">
          <p class="time_start">開始<span id="val_start"></span></p>
          <p class="time_finish">終了予定<span id="val_finish"></span></p>
          <input type="range" min="1" max="" value="1" step="1" class="" id="slider_days" disabled>
          <p class="time_now">今日の日付<span id="val_now"></span></p>
          <p class="time_days">経過日数<span id="val_days"></span></p>
          <p class="time_term">期間<span id="val_term"></span></p>
        </div>


        <!-- 点数最大最小可変_1 -->
        <!-- A -->
        <div class="scoreBox js-scoreBox-a">
          <div class="scoreBox_score">
            <p class="scoreBox_score_insert">現在のレベル<span class="js-score_score"></span></p>
          </div>
          <div class="scoreBox_slider">
            <i class="fas fa-minus-circle js-minus"></i>
            <input type="range" min="" max="" value="" step="" class="" id="" class="">
            <i class="fas fa-plus-circle js-plus"></i>
          </div>
          <p class="scoreBox_minMax">
            <span class="js-score_min"></span>
            <span class="js-score_max"></span>
          </p>
        </div>
        <!-- B -->
        <div class="scoreBox js-scoreBox-b">
          <div class="scoreBox_score">
            <p class="scoreBox_score_insert">現在のレベル<span class="js-score_score"></span></p>
          </div>
          <div class="scoreBox_slider">
            <i class="fas fa-minus-circle js-minus"></i>
            <input type="range" min="" max="" value="" step="" class="" id="" class="">
            <i class="fas fa-plus-circle js-plus"></i>
          </div>
          <p class="scoreBox_minMax">
            <span class="js-score_min"></span>
            <span class="js-score_max"></span>
          </p>
        </div>
        <!-- C -->
        <div class="scoreBox js-scoreBox-c">
          <div class="scoreBox_score">
            <p class="scoreBox_score_insert">現在のレベル<span class="js-score_score"></span></p>
          </div>
          <div class="scoreBox_slider">
            <i class="fas fa-minus-circle js-minus"></i>
            <input type="range" min="" max="" value="" step="" class="" id="" class="">
            <i class="fas fa-plus-circle js-plus"></i>
          </div>
          <p class="scoreBox_minMax">
            <span class="js-score_min"></span>
            <span class="js-score_max"></span>
          </p>
        </div>
        <!-- 点数最大最小可変_2 -->
        <div id="scoreSlider" class="block">
          <!-- D -->
          <div class="block_body block_body-flexCenter js-scoreBox-d">
            <div class="radioDownBtn">
              <input type="radio" id="UpDown1" name="UpDown-group1">
              <label for="UpDown1" class="js-changeBtn js-minus"></label>
            </div>
            <div class="rangeBox">
              <div class="rangeContainer">
                <div class="rangeContainer_box">
                  <p class="rangeContainer_box_label">現在のレベル<span class="js-score_score"></span></p>
                </div>
              </div>
              <span class="rangeBox_minText js-score_min"></span>
              <input type="range" name="speed" value="" min="0" max="100" step="1" tabindex="1" class="rangeBox_body able">
              <span class="rangeBox_maxText js-score_max"></span>
            </div>
            <div class="radioUpBtn">
              <input type="radio" id="UpDown2" name="UpDown-group1">
              <label for="UpDown2" class="js-changeBtn js-plus"></label>
            </div>
          </div>
          <!-- E -->
          <div class="block_body block_body-flexCenter js-scoreBox-e">
            <div class="radioDownBtn">
              <input type="radio" id="UpDown1" name="UpDown-group1">
              <label for="UpDown1" class="js-changeBtn js-minus"></label>
            </div>
            <div class="rangeBox">
              <div class="rangeContainer">
                <div class="rangeContainer_box">
                  <p class="rangeContainer_box_label">現在のレベル<span class="js-score_score"></span></p>
                </div>
              </div>
              <span class="rangeBox_minText js-score_min"></span>
              <input type="range" name="speed" value="" min="0" max="100" step="1" tabindex="1" class="rangeBox_body able">
              <span class="rangeBox_maxText js-score_max"></span>
            </div>
            <div class="radioUpBtn">
              <input type="radio" id="UpDown2" name="UpDown-group1">
              <label for="UpDown2" class="js-changeBtn js-plus"></label>
            </div>
          </div>
          <!-- F -->
          <div class="block_body block_body-flexCenter js-scoreBox-f">
            <div class="radioDownBtn">
              <input type="radio" id="UpDown1" name="UpDown-group1">
              <label for="UpDown1" class="js-changeBtn js-minus"></label>
            </div>
            <div class="rangeBox">
              <div class="rangeContainer">
                <div class="rangeContainer_box">
                  <p class="rangeContainer_box_label">現在のレベル<span class="js-score_score"></span></p>
                </div>
              </div>
              <span class="rangeBox_minText js-score_min"></span>
              <input type="range" name="speed" value="" min="0" max="100" step="1" tabindex="1" class="rangeBox_body able">
              <span class="rangeBox_maxText js-score_max"></span>
            </div>
            <div class="radioUpBtn">
              <input type="radio" id="UpDown2" name="UpDown-group1">
              <label for="UpDown2" class="js-changeBtn js-plus"></label>
            </div>
          </div>
        </div>





        <!-- 使用率 -->
        <div class="countBox_a">
          <p>教室A</p>
          <input type="range" min="" max="" value="" step="" class="" id="" class="" disabled>
          <p>最小<span class="count_min"></span>人</p>
          <p>現在の人数<span class="count_count"></span>人</p>
          <p>最大<span class="count_max"></span>人</p>
          <p>使用率<span class="count_rate"></span>%</p>
        </div>
        <div class="countBox_b">
          <p>教室B</p>
          <input type="range" min="" max="" value="" step="" class="" id="" class="" disabled>
          <p>最小<span class="count_min"></span>人</p>
          <p>現在の人数<span class="count_count"></span>人</p>
          <p>最大<span class="count_max"></span>人</p>
          <p>使用率<span class="count_rate"></span>%</p>
        </div>



        <!-- chart.js -->
        <div class="chart">
          <canvas id="ex_chart" class=""></canvas>
        </div>



      </div><!-- / CONTENTS -->
      <div class="l_side">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
    </div><!-- / FRAME --> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div><!-- / WRAPPER -->
  </body>
</html><?php }
}
