<?php
/* Smarty version 3.1.29, created on 2020-10-16 05:36:54
  from "D:\xampp\htdocs\menkyolab\application\views\pc\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f8915569ef7f6_19108125',
  'file_dependency' => 
  array (
    '1cd953008231286f07f905004b0e790f1e178188' => 
    array (
      0 => 'D:\\xampp\\htdocs\\menkyolab\\application\\views\\pc\\index.tpl',
      1 => 1602819066,
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
function content_5f8915569ef7f6_19108125 ($_smarty_tpl) {
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
				<!-- CONTENTS -->
				<p><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-top-bannar.png" alt="2015年 夏休み合宿免許のご予約は今すぐ！お早めに！"></a></p>
				<div class="textBox textBox-flex textBox-spaceS">
					<p class="textBox_text textBox_text-design4">PR</p>
					<p class="textBox_text"><a href="">今なら先着50名様、10,000円割引！今なら先着50名様、10,000円割引！</a></p>
				</div>
				<div class="l_contents_flex">
					<div class="l_contents_flex_contents">
						<section class="block block-design1 block-color1 select">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-circle"></i>
								<h2 class="title_text title_text-color2">条件で探す</h2>
							</div>
							<form method="post" accept-charset="UTF-8" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/search">
								<div class="block block-paddingS">
									<div class="textBox textBox-flex">
										<i class="mainIcon mainIcon-card2"></i>
										<p class="textBox_text textBox_text-bold textBox_text-sizeXS">取得したい免許の種類</p>
									</div>
									<div class="block block-design4">
										<div class="textBox textBox-flex textBox-lineHightM">
											<i class="mainIcon mainIcon-car"></i>
											<p class="textBox_text textBox_text-bold textBox_text-sizeXS js-SelectedCarType">普通車</p>
										</div>
										<div class="btn">
											<p class="btn_inner btn_inner-sizeXS btn_inner-color3 btn_inner-borderNon btn_inner-spaceNon">
												<a href=""
													class="btn_inner_anchor btn_inner_anchor-fontSizeS btn_inner_anchor-spaceXS js-modalOpen">変更する</a>
											</p>
										</div>
										<label>
											<input type="radio" name="type" checked="checked">AT </label>
										<label>
											<input type="radio" name="type">MT </label>
										<label>
											<input type="radio" name="type">こだわらない </label>
									</div>
								</div>
								<table class="table table-fontSizeS table-select">
									<colgroup style="width: 20%;"></colgroup>
									<colgroup style="width: 80%;"></colgroup>
									<tbody>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												所持免許</th>
											<td class="table_data table_data-innerSpace2S">
												<label>
													<input type="radio" name="possession" checked="checked">免許なし・原付 </label>
												<label>
													<input type="radio" name="possession">免許あり </label>
											</td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												生年月日</th>
											<td class="table_data table_data-innerSpace2S">
												<select name="year">
													<option value="1900">1900</option>
													<option value="1901">1901</option>
													<option value="1902">1902</option>
													<option value="1903">1903</option>
													<option value="1904">1904</option>
													<option value="1905">1905</option>
													<option value="1906">1906</option>
													<option value="1907">1907</option>
													<option value="1908">1908</option>
													<option value="1909">1909</option>
													<option value="1910">1910</option>
													<option value="1911">1911</option>
													<option value="1912">1912</option>
													<option value="1913">1913</option>
													<option value="1914">1914</option>
													<option value="1915">1915</option>
													<option value="1916">1916</option>
													<option value="1917">1917</option>
													<option value="1918">1918</option>
													<option value="1919">1919</option>
													<option value="1920">1920</option>
													<option value="1921">1921</option>
													<option value="1922">1922</option>
													<option value="1923">1923</option>
													<option value="1924">1924</option>
													<option value="1925">1925</option>
													<option value="1926">1926</option>
													<option value="1927">1927</option>
													<option value="1928">1928</option>
													<option value="1929">1929</option>
													<option value="1930">1930</option>
													<option value="1931">1931</option>
													<option value="1932">1932</option>
													<option value="1933">1933</option>
													<option value="1934">1934</option>
													<option value="1935">1935</option>
													<option value="1936">1936</option>
													<option value="1937">1937</option>
													<option value="1938">1938</option>
													<option value="1939">1939</option>
													<option value="1940">1940</option>
													<option value="1941">1941</option>
													<option value="1942">1942</option>
													<option value="1943">1943</option>
													<option value="1944">1944</option>
													<option value="1945">1945</option>
													<option value="1946">1946</option>
													<option value="1947">1947</option>
													<option value="1948">1948</option>
													<option value="1949">1949</option>
													<option value="1950">1950</option>
													<option value="1951">1951</option>
													<option value="1952">1952</option>
													<option value="1953">1953</option>
													<option value="1954">1954</option>
													<option value="1955">1955</option>
													<option value="1956">1956</option>
													<option value="1957">1957</option>
													<option value="1958">1958</option>
													<option value="1959">1959</option>
													<option value="1960">1960</option>
													<option value="1961">1961</option>
													<option value="1962">1962</option>
													<option value="1963">1963</option>
													<option value="1964">1964</option>
													<option value="1965">1965</option>
													<option value="1966">1966</option>
													<option value="1967">1967</option>
													<option value="1968">1968</option>
													<option value="1969">1969</option>
													<option value="1970">1970</option>
													<option value="1971">1971</option>
													<option value="1972">1972</option>
													<option value="1973">1973</option>
													<option value="1974">1974</option>
													<option value="1975">1975</option>
													<option value="1976">1976</option>
													<option value="1977">1977</option>
													<option value="1978">1978</option>
													<option value="1979">1979</option>
													<option value="1980">1980</option>
													<option value="1981">1981</option>
													<option value="1982">1982</option>
													<option value="1983">1983</option>
													<option value="1984">1984</option>
													<option value="1985">1985</option>
													<option value="1986">1986</option>
													<option value="1987">1987</option>
													<option value="1988">1988</option>
													<option value="1989">1989</option>
													<option value="1990">1990</option>
													<option value="1991">1991</option>
													<option value="1992">1992</option>
													<option value="1993">1993</option>
													<option value="1994">1994</option>
													<option value="1995">1995</option>
													<option value="1996">1996</option>
													<option value="1997">1997</option>
													<option value="1998">1998</option>
													<option value="1999">1999</option>
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002</option>
													<option value="2003">2003</option>
													<option value="2004">2004</option>
													<option value="2005">2005</option>
													<option value="2006">2006</option>
													<option value="2007">2007</option>
													<option value="2008">2008</option>
													<option value="2009">2009</option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015" selected>2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
												</select>年 <select name="month">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12" selected>12</option>
												</select>月 <select name="day">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12" selected>12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>日 </td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												性別</th>
											<td class="table_data table_data-innerSpace2S">
												<label>
													<input type="radio" name="gender" checked="checked">男性 </label>
												<label>
													<input type="radio" name="gender">女性 </label>
											</td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												職業</th>
											<td class="table_data table_data-innerSpace2S">
												<select name="industry">
													<option value=""></option>
													<option value="製造業">製造業</option>
													<option value="建築業">建築業</option>
													<option value="設備業">設備業</option>
													<option value="運輸業">運輸業</option>
													<option value="流通業">流通業</option>
													<option value="農林水産業">農林水産業</option>
													<option value="印刷・出版業">印刷・出版業</option>
													<option value="金融業・保険業">金融業・保険業</option>
													<option value="不動産業">不動産業</option>
													<option value="IT・情報通信業">IT・情報通信業</option>
													<option value="サービス業">サービス業</option>
													<option value="教育・研究機関">教育・研究機関</option>
													<option value="病院・医療機関">病院・医療機関</option>
													<option value="官公庁・自治体">官公庁・自治体</option>
													<option value="法人団体">法人団体</option>
													<option value="その他の業種">その他の業種</option>
												</select>
											</td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												郵便番号</th>
											<td class="table_data table_data-innerSpace2S">
												<input type="tel" name="tel" maxlength="3" class="postcode1"> - <input type="tel" maxlength="4"
													class="postcode2">
											</td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												地域</th>
											<td class="table_data table_data-innerSpace2S table_data-flex">
												<select name="pref">
													<option value=""></option>
													<option value="北海道">北海道</option>
													<option value="青森県">青森県</option>
													<option value="岩手県">岩手県</option>
													<option value="宮城県">宮城県</option>
													<option value="秋田県">秋田県</option>
													<option value="山形県">山形県</option>
													<option value="福島県">福島県</option>
													<option value="茨城県">茨城県</option>
													<option value="栃木県">栃木県</option>
													<option value="群馬県">群馬県</option>
													<option value="埼玉県">埼玉県</option>
													<option value="千葉県">千葉県</option>
													<option value="東京都">東京都</option>
													<option value="神奈川県">神奈川県</option>
													<option value="新潟県">新潟県</option>
													<option value="富山県">富山県</option>
													<option value="石川県">石川県</option>
													<option value="福井県">福井県</option>
													<option value="山梨県">山梨県</option>
													<option value="長野県">長野県</option>
													<option value="岐阜県">岐阜県</option>
													<option value="静岡県">静岡県</option>
													<option value="愛知県">愛知県</option>
													<option value="三重県">三重県</option>
													<option value="滋賀県">滋賀県</option>
													<option value="京都府">京都府</option>
													<option value="大阪府">大阪府</option>
													<option value="兵庫県">兵庫県</option>
													<option value="奈良県">奈良県</option>
													<option value="和歌山県">和歌山県</option>
													<option value="鳥取県">鳥取県</option>
													<option value="島根県">島根県</option>
													<option value="岡山県">岡山県</option>
													<option value="広島県">広島県</option>
													<option value="山口県">山口県</option>
													<option value="徳島県">徳島県</option>
													<option value="香川県">香川県</option>
													<option value="愛媛県">愛媛県</option>
													<option value="高知県">高知県</option>
													<option value="福岡県">福岡県</option>
													<option value="佐賀県">佐賀県</option>
													<option value="長崎県">長崎県</option>
													<option value="熊本県">熊本県</option>
													<option value="大分県">大分県</option>
													<option value="宮崎県">宮崎県</option>
													<option value="鹿児島県">鹿児島県</option>
													<option value="沖縄県">沖縄県</option>
												</select>
												<div class="btn">
													<p class="btn_inner btn_inner-sizeS btn_inner-color3 btn_inner-borderNon btn_inner-spaceNon">
														<a href=""
															class="btn_inner_anchor btn_inner_anchor-fontSizeS btn_inner_anchor-spaceXS">地域・エリア検索</a>
													</p>
												</div>
											</td>
										</tr>
										<tr class="table_row table_row-borderNon table_row-bgColor4">
											<th
												class="table_title table_title-bold table_title-innerSpaceS table_title-bgColor1 table_title-borderRight5">
												エリア</th>
											<td class="table_data table_data-innerSpace2S">
												<label>
													<input type="checkbox" name="area" checked="checked">東京 </label>
												<label>
													<input type="checkbox" name="area">神奈川 </label>
												<label>
													<input type="checkbox" name="area">埼玉 </label>
												<label>
													<input type="checkbox" name="area">千葉 </label>
												<br>
												<label>
													<input type="checkbox" name="area">群馬 </label>
												<label>
													<input type="checkbox" name="area">茨城 </label>
												<label>
													<input type="checkbox" name="area">栃木 </label>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="btn btn-flex btn-spaceM">
									<p class="btn_inner btn_inner-design3">
										<a href="" class="btn_inner_anchor btn_inner_anchor-design3">こだわり条件を追加</a>
									</p>
									<button type="submit" class="btn_inner btn_inner-sizeL">
										<span class="btn_inner_anchor btn_inner_anchor-fontSizeM btn_inner_anchor-spaceM"><i
												class="mainIcon mainIcon-loupe"></i><span>検索する</span></span>
									</button>
								</div>
							</form>
						</section>
						<section class="block block-design1 block-color2 block-bottomSpaceS">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-people"></i>
								<h2 class="title_text title_text-color2">スタッフオススメ教習所はコチラ</h2>
							</div>
							<ul class="list">
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/orangebox-photo1.png" alt="">
									<div class="block">
										<div class="textBox textBox-flex textBox-alignStart">
											<p class="textBox_text textBox_text-design2">東京</p>
											<p class="textBox_text textBox_text-design6"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/orangebox-photo2.png" alt="">
									<div class="block">
										<div class="textBox textBox-flex textBox-alignStart">
											<p class="textBox_text textBox_text-design2">神奈川</p>
											<p class="textBox_text textBox_text-design6"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/orangebox-photo3.png" alt="">
									<div class="block">
										<div class="textBox textBox-flex textBox-alignStart">
											<p class="textBox_text textBox_text-design2">大分</p>
											<p class="textBox_text textBox_text-design6"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/school" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
						<section class="block block-design1 block-color3 block-bottomSpaceS">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-ribbon"></i>
								<h2 class="title_text title_text-color2">トクするキャンペーン実施校はコチラ</h2>
							</div>
							<ul class="list">
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/pinkbox-photo1.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/pinkbox-photo2.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/pinkbox-photo3.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text"><a href="">〇〇〇自動車学校</a></p>
										</div>
										<div class="textBox">
											<p class="textBox_text textBox_text-sizeS textBox_text-bold">普通車&emsp;AT&emsp;<span
													class="textBox_text-color2">200,000円～</span></p>
										</div>
										<div class="textBox textBox-lineHightL">
											<p class="textBox_text textBox_text-sizeXS">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index/school_version2" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
						<section class="block block-design1 block-color4">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-building"></i>
								<h2 class="title_text title_text-color2">短期間で取れる合宿プランがオススメ</h2>
							</div>
							<ul class="list list-paddingS list-flex">
								<li class="list_item list_item-2clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/purplebox-photo1-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキストテキストテキストテキスト</a></p>
									</div>
								</li>
								<li class="list_item list_item-2clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/purplebox-photo1-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキストテキストテキストテキスト</a></p>
									</div>
								</li>
								<li class="list_item list_item-2clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/purplebox-photo2-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキストテキストテキストテキスト</a></p>
									</div>
								</li>
								<li class="list_item list_item-2clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/purplebox-photo2-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキストテキストテキストテキスト</a></p>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner">
									<a href="" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
					</div>
					<!-- 2列目 -->
					<div class="l_contents_flex_contents">
						<section class="block block-design1 block-color5 block-bottomSpaceNon">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-location"></i>
								<h2 class="title_text title_text-color2">地図から探す</h2>
							</div>
							<div class="map">
								<ul class="map_list map_list-hokkaido">
									<li class="map_list_item"><a href="">北海道</a></li>
								</ul>
								<ul class="map_list map_list-tohoku">
									<li class="map_list_item"><a href="">青森</a></li>
									<li class="map_list_item"><a href="">岩手</a></li>
									<li class="map_list_item"><a href="">宮城</a></li>
									<li class="map_list_item"><a href="">秋田</a></li>
									<li class="map_list_item"><a href="">山形</a></li>
									<li class="map_list_item"><a href="">福島</a></li>
								</ul>
								<ul class="map_list map_list-kanto">
									<li class="map_list_item"><a href="">茨城</a></li>
									<li class="map_list_item"><a href="">栃木</a></li>
									<li class="map_list_item"><a href="">群馬</a></li>
									<li class="map_list_item"><a href="">埼玉</a></li>
									<li class="map_list_item"><a href="">千葉</a></li>
									<li class="map_list_item"><a href="">東京</a></li>
									<li class="map_list_item"><a href="">神奈川</a></li>
								</ul>
								<ul class="map_list map_list-chubu">
									<li class="map_list_item"><a href="">新潟</a></li>
									<li class="map_list_item"><a href="">富山</a></li>
									<li class="map_list_item"><a href="">石川</a></li>
									<li class="map_list_item"><a href="">福井</a></li>
									<li class="map_list_item"><a href="">山梨</a></li>
									<li class="map_list_item"><a href="">長野</a></li>
									<li class="map_list_item"><a href="">岐阜</a></li>
									<li class="map_list_item"><a href="">静岡</a></li>
									<li class="map_list_item"><a href="">愛知</a></li>
									<li class="map_list_item"><a href="">三重</a></li>
								</ul>
								<ul class="map_list map_list-kinki">
									<li class="map_list_item"><a href="">三重</a></li>
									<li class="map_list_item"><a href="">滋賀</a></li>
									<li class="map_list_item"><a href="">京都</a></li>
									<li class="map_list_item"><a href="">大阪</a></li>
									<li class="map_list_item"><a href="">兵庫</a></li>
									<li class="map_list_item"><a href="">奈良</a></li>
									<li class="map_list_item"><a href="">和歌山</a></li>
								</ul>
								<ul class="map_list map_list-chugoku">
									<li class="map_list_item"><a href="">鳥取</a></li>
									<li class="map_list_item"><a href="">島根</a></li>
									<li class="map_list_item"><a href="">岡山</a></li>
									<li class="map_list_item"><a href="">広島</a></li>
									<li class="map_list_item"><a href="">山口</a></li>
								</ul>
								<ul class="map_list map_list-shikoku">
									<li class="map_list_item"><a href="">徳島</a></li>
									<li class="map_list_item"><a href="">香川</a></li>
									<li class="map_list_item"><a href="">愛媛</a></li>
									<li class="map_list_item"><a href="">愛知</a></li>
								</ul>
								<ul class="map_list map_list-kyushu">
									<li class="map_list_item"><a href="">福岡</a></li>
									<li class="map_list_item"><a href="">佐賀</a></li>
									<li class="map_list_item"><a href="">長崎</a></li>
									<li class="map_list_item"><a href="">熊本</a></li>
									<li class="map_list_item"><a href="">大分</a></li>
									<li class="map_list_item"><a href="">宮崎</a></li>
									<li class="map_list_item"><a href="">鹿児島</a></li>
								</ul>
								<ul class="map_list map_list-okinawa">
									<li class="map_list_item"><a href="">沖縄</a></li>
								</ul>
							</div>
						</section>
						<!-- スリックスライダー -->
						<!-- <div class="slideshowBox"> -->
						<div class="slick">
							<a href="" class="slick_image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slick1.png"
									alt="LoveLONDONイギリス特集 暮らすように滞在したい アパートメントに止まる ロンドン8日間 239,000円～439,000円">
							</a>
							<a href="" class="slick_image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slick2.png"
									alt="LoveLONDONイギリス特集 暮らすように滞在したい アパートメントに止まる ロンドン8日間 239,000円～439,000円">
							</a>
							<a href="" class="slick_image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slick3.png"
									alt="LoveLONDONイギリス特集 暮らすように滞在したい アパートメントに止まる ロンドン8日間 239,000円～439,000円">
							</a>
						</div>
						<div class="arrows">
							<div class="dots"></div>
						</div>
						<div class="list-flex">
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar1-1.png" alt=""></a>
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar2-1.png" alt=""></a>
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar1-2.png" alt=""></a>
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar2-2.png" alt=""></a>
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar1-3.png" alt=""></a>
							<a class="list_item list_item-spaceS" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/main-bannar2-3.png" alt=""></a>
						</div>
						<section class="block block-design1 block-color6 block-spaceM block-bottomSpaceS">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-star"></i>
								<h2 class="title_text title_text-color2">お役立ちコンテンツ</h2>
							</div>
							<ul class="list">
								<li class="list_item list_item-flex list_item-paddingM list_item-paddingRightNon">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/yellowbox-photo1.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text"><a href="">AT・MTの違いって何さ？</a></p>
										</div>
										<div class="textBox textBox_rightSpaceM">
											<p class="textBox_text textBox_text-sizeXS"> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM list_item-paddingRightNon">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/yellowbox-photo2.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text"><a href="">短期間で免許取得したい！！</a></p>
										</div>
										<div class="textBox textBox_rightSpaceM">
											<p class="textBox_text textBox_text-sizeXS"> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
										</div>
									</div>
								</li>
								<li class="list_item list_item-flex list_item-paddingM list_item-paddingRightNon">
									<img class="image-spaceS" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/yellowbox-photo3.png" alt="">
									<div class="block">
										<div class="textBox">
											<p class="textBox_text textBox_text-letterSpaceS"><a href="">格安で取れるコツを教えちゃいます!</a></p>
										</div>
										<div class="textBox textBox_rightSpaceM">
											<p class="textBox_text textBox_text-sizeXS"> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner">
									<a href="" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
						<section class="block block-design1 block-color7 block-spaceM">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-check"></i>
								<h2 class="title_text title_text-color2">特集から探す</h2>
							</div>
							<ul class="list list-paddingS list-flex">
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">短期間で免許取得できる教習所をピックアップ！</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">とにかく安さを求める方必見！</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-3.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">旅行気分で免許取得したい人にオススメのプランご紹介！</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo2-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">女性にオススメの教習所はどこ？</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo2-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキスト</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo2-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">テキストテキストテキストテキスト</a></p>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner btn_inner-topSpaceL">
									<a href="" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
						<section class="block block-design1 block-color8">
							<div class="title title-design1">
								<i class="mainIcon mainIcon-card"></i>
								<h2 class="title_text title_text-color2">もっと知りたい免許のあれこれ</h2>
							</div>
							<ul class="list list-paddingS list-flex">
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">AT・MTの違いって何さ？</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">短期間で免許取得するにはどうすればいいの？</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-3.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">格安で免許を取れるコツを教えちゃいます！</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-1.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">AT・MTの違いって何さ？</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-2.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">短期間で免許取得するにはどうすればいいの？</a></p>
									</div>
								</li>
								<li class="list_item list_item-3clm">
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/redbox-photo1-3.png" alt="">
									<div class="textBox textBox-lineHightL">
										<p class="textBox_text textBox_text-sizeXS"><a href="">格安で免許を取れるコツを教えちゃいます！</a></p>
									</div>
								</li>
							</ul>
							<div class="btn btn-spaceS">
								<p class="btn_inner btn_inner-topSpaceL">
									<a href="" class="btn_inner_anchor btn_inner_anchor-arrow">もっと見る</a>
								</p>
							</div>
						</section>
					</div>
				</div><!-- / l_contents_flex -->
			</div><!-- / CONTENTS -->
			<div class="l_side"> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div>
		</div><!-- / FRAME --> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pc/include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div><!-- / WRAPPER -->
	</body>
</html><?php }
}
