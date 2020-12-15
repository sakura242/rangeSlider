<?php
/* Smarty version 3.1.29, created on 2020-09-29 18:43:32
  from "C:\Users\sakur\Desktop\xampp\htdocs\menkyolab\application\views\pc\school.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f736434c9ca44_99682360',
  'file_dependency' => 
  array (
    'd7672738be4b017e1d3ce90e0aca07c557bfb995' => 
    array (
      0 => 'C:\\Users\\sakur\\Desktop\\xampp\\htdocs\\menkyolab\\application\\views\\pc\\school.tpl',
      1 => 1601397789,
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
function content_5f736434c9ca44_99682360 ($_smarty_tpl) {
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

				<ul class="siteNav">
					<li class="siteNav_item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">ホーム</a></li>
					<li class="siteNav_item"><a href="">○○○</a></li>
					<li>足立自動車学校</li>
				</ul>


				<div class="title title-design6">
					<h2 class="title_text title_text-sizeXL title_text-color1">足立自動車学校/普通車</h2>
					<p class="title_text title_text-color2 title-lineHightM">東京都足立区 東六月町3−1( <a
							href="https://goo.gl/maps/8muNhQh53qFqL36r8" target="_blank">地図で見る</a> )</p>
				</div>
				<section class="carType">
					<div class="carType_available">
						<p class="carType_available_title">取り扱い車種</p>
						<ul class="carType_availableList">
						<li class="carType_availableList_item available">普通車AT</li>
						<li class="carType_availableList_item available">普通車MT</li>
						<li class="carType_availableList_item">小型二輪</li>
						<li class="carType_availableList_item">普通二輪</li>
						<li class="carType_availableList_item">大型二輪</li>
						<li class="carType_availableList_item">中型車</li>
						<li class="carType_availableList_item">大型車</li>
						<li class="carType_availableList_item">けん引</li>
						<li class="carType_availableList_item">大型特殊</li>
						<li class="carType_availableList_item">普通二種</li>
						<li class="carType_availableList_item">中型二種</li>
						<li class="carType_availableList_item">大型二種</li>
						<li class="carType_availableList_item">原付</li>
					</ul>
				</div>
					<div class="carType_box">
						<div class="carType_box_left">
							<div class="benefit">
								<div class="benefit_inner">
									<p class="benefit_inner_text">免ラボクーポン適用あり</p>
								</div>
							</div>
							<div class="pointBox">
								<dl>
									<dt>エリア</dt>
									<dd>東京</dd>
								</dl>
								<dl class="sizeL">
									<dt>最安値</dt>
									<dd class="price">190,000円～</dd>
								</dl>
								<dl>
									<dt>送迎バス</dt>
									<dd>あり</dd>
								</dl>
							</div>
						</div>
						<div class="carType_box_right">
							<p class="carType_box_text">予約専用ダイヤル</p>
							<p class="carType_box_hour">営業 10：00～19：00 (年中無休)</p>
							<p class="carType_box_number">0120-123-456</p>
						</div>
					</div>
					<div class="lowestPrice">
						<div>
							<div class="lowestPrice_title">
								<p class="lowestPrice_title_text">教習所最安値プランはこちら！</p>
							</div>
							<p  class="lowestPrice_text">ベーシックプラン / 普通車AT、免許なし・原付</p>
						</div>
						<div class="lowestPriceRightBox">
							<p class="lowestPrice_priceText">料金</p>
							<p class="lowestPrice_priceNumber">190,000<span>円(税込)</span></p>
						</div>
					</div>
					<div class="btn btn-spaceTopL">
						<p class="btn_inner btn_inner-design1 btn_inner-size5L">
							<a href="" class="btn_inner_anchor"><i class="schoolIcon"></i>仮お申し込みはこちら</a>
						</p>
					</div>
				</section>
				<!-- 切り替えタブ -->
				<div class="schoolMenu">
				<ul class="schoolTab">
					<li><a class="schoolTab_item" href="#work1"><i class="schoolIcon schoolIcon-home"></i>ホーム</a></li>
					<li><a class="schoolTab_item" href="#work2"><i class="schoolIcon schoolIcon-price"></i>料金プラン</a></li>
					<li><a class="schoolTab_item" href="#work3"><i class="schoolIcon schoolIcon-access"></i>アクセス</a></li>
				</ul>
				<div class="schoolMenu_textBox">
					<i class="schoolIcon schoolIcon-point"></i>
					<p class="schoolMenu_textBox_text">タブをクリックすると教習所の詳細情報が表示できます。</p>
				</div>
			</div>
				<section id="work1" class="block block-design2 tabsPanel">
					<section class="schoolTop">
						<div class="schoolTop_leftBox">
							<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo1.png" alt=""></p>
							<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo2.png" alt=""></p>
							<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo3.png" alt=""></p>
							<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo4.png" alt=""></p>
						</div>
						<div class="schoolTop_rightBox">
							<div class="title">
								<h3 class="title_text title_text-color1 title_text-sizeL">『スマイル』宣言!!</h3>
							</div>
							<div class="title">
								<h3 class="title_text title_text-color1 title_text-sizeL">ENJOY!! Driving School Life</h3>
							</div>
							<div class="textBox textBox-spaceL">
								<p class="textBox_text">
									当校は、笑顔あふれるアットホームな雰囲気の学校です。スタッフ一同、皆様の免許取得を全力サポート!!校内には、清潔感漂うパウダールームや教習の合間のひと時をゆったりと過ごせるラウンジなどがあり、フロントではいつも明るく親しみやすいフロントスタッフがお出迎えいたします。教習コースも広々としていますので運転に集中して受けることが出来ますよ(^_^)
								</p>
							</div>
							<div class="pointBox">
								<dl>
									<dt>イチオシPOINT!</dt>
									<dd>
										<ul>
											<li>毎日夜8時まで営業</li>
											<li>女性にうれしいきれいなパウダールームあり!</li>
											<li>お客様専用駐車場あり!</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">オススメプラン</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-underLayer list_item-underLayer-bg1">
								<div class="list_item_left">
									<p>ベーシックプラン・検定フリーパック/普通車AT、免許なし・原付</p>
									<p class="priceText">料金</p>
									<p class="priceNumber">267,040円（税込）</p>
								</div>
								<div class="btn btn-spaceNon list_item_right">
									<p class="btn_inner btn_inner-color2 btn_inner-sizeM">
										<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL">プランの詳細を見る</a>
									</p>
								</div>
							</li>
							<li class="list_item list_item-underLayer list_item-underLayer-bg1">
								<div class="list_item_left">
									<p>スピードプラン・安心パック/普通車MT、免許なし・原付</p>
									<p class="priceText">料金</p>
									<p class="priceNumber"><span>295,800円（税込）</span> ⇒ 285,800円（税込）</p>
								</div>
								<div class="btn btn-spaceNon list_item_right">
									<p class="btn_inner btn_inner-color2 btn_inner-sizeM">
										<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL">プランの詳細を見る</a>
									</p>
								</div>
							</li>
							<li class="list_item list_item-underLayer list_item-underLayer-bg1">
								<div class="list_item_left">
									<p>短期集中プラン・技能フリーパック/普通車AT、免許なし・原付</p>
									<p class="priceText">料金</p>
									<p class="priceNumber">288,640円（税込）</p>
								</div>
								<div class="btn btn-spaceNon list_item_right">
									<p class="btn_inner btn_inner-color2 btn_inner-sizeM">
										<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL">プランの詳細を見る</a>
									</p>
								</div>
							</li>
						</ul>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">送迎バス</h3>
						</div>
						<table class="schoolTable">
							<tr>
								<th>駅</th>
								<td>
									西新井駅より25分／竹ノ塚駅より25分／梅島駅より15分／五反野駅より10分／綾瀬駅より15分／北綾瀬駅より15分／青井駅より10分／六町駅より10分
								</td>
							</tr>
							<tr>
								<th>学校</th>
								<td>東京電機大学</td>
							</tr>
							<tr>
								<th>その他</th>
								<td>スーパーベルクスより8分／四家交差点（セブンイレブン前）より9分</td>
							</tr>
						</table>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">託児所</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">ご利用可能年齢</p>
								<p class="list_item_text">1歳～<br>※お子様が慣れるまでは2時間程度のお預かりで様子を見ます（飲食不可）。</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">ご利用時間</p>
								<p class="list_item_text">平日…9：00～16：00</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">ご利用方法</p>
								<p class="list_item_text">前日までにご予約ください</p>
							</li>
						</ul>
						<div class="btnBox btnBox-spaceM">
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i
											class="schoolIcon schoolIcon-tel"></i><span>電話予約</span></a>
								</p>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i class="schoolIcon"></i><span>ネット予約</span></a>
								</p>
							</div>
						</div>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">基本情報</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">教習所名</p>
								<p class="list_item_text">足立自動車学校</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">所在地</p>
								<p class="list_item_text">東京都足立区東六月町3-1 <a href="https://goo.gl/maps/rRgLYYSSgCz1Z5Ns6"
										target="_blank">地図を見る</a></p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">最寄駅</p>
								<p class="list_item_text">竹ノ塚駅 徒歩15分</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">取扱免許</p>
								<p class="list_item_text">普通免許 / 普通免許AT限定 / 中型免許 / 大型免許 / 大型二輪免許 / 大型特殊<br>免許/ けん引免許 / 普通二種免許</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">学校</p>
								<p class="list_item_text">東京電機大学</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">入校日</p>
								<p class="list_item_text">平日 9：00 ～ 20：00<br>土・日・祝日 9：00 ～ 20：00</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">入校式</p>
								<p class="list_item_text">毎日実施<br>※混雑状況により、開始時間に変更があります。お問合わせ下さい。<br>※入校受付は入校式の1時間前、または前日までに済ませて下さい。
								</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">運転授業</p>
								<p class="list_item_text">平日 9：00 ～ 20：00<br>土・日・祝日 9：00 ～ 18：30</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">学科授業</p>
								<p class="list_item_text">平日 9：00 ～ 20：00<br>土・日・祝日 9：00 ～ 18：30</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">教習所設備</p>
								<p class="list_item_text">駐輪場／駐車場10台／更衣室／自習室</p>
							</li>
						</ul>

						<div class="btnBox btnBox-spaceM">
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i
											class="schoolIcon schoolIcon-tel"></i><span>電話予約</span></a>
								</p>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i class="schoolIcon"></i><span>ネット予約</span></a>
								</p>
							</div>
						</div>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design4">
							<h3 class="title_text title_text-color3">近隣の教習所をピックアップ</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo5.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo6.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo7.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
						</ul>
						<div class="btnBox btnBox-spaceM">
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i
											class="schoolIcon schoolIcon-tel"></i><span>電話予約</span></a>
								</p>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i class="schoolIcon"></i><span>ネット予約</span></a>
								</p>
							</div>
						</div>
					</section>
				</section><!-- ホーム#work1 -->
				<section id="work2" class="block block-design2 tabsPanel">
					<section class="block block-spaceL">
						<div class="title title-design2 title-design2-decoration">
							<h3 class="title_text title_text-sizeL title_text-color2">免許ラボプラン</h3>
						</div>
						<div class="textBox">
							<p class="textBox_text textBox_text-color1 textBox_text-sizeL textBox_text-bold">選べる３つのプラン！あなたはどのプランにする？
							</p>
						</div>
						<div class="textBox">
							<p class="textBox_text">免許ラボでは「ベーシックプラン」「スピードプラン」「短期集中プラン」の3つのプランをご用意しております。</p>
							<p class="textBox_text">「ゆっくりでもいい」、「自分の都合に合わせたい」「とにかく早く取りたい」など、あなたの希望や予定に合わせて自由に教習スタイルを選べます。</p>
						</div>
						<p class="wordBalloon">さあ、下記プランから自分に合ったプランを選ぼう！</p>
						<section class="planBox planBox-color1 planBox-spaceL">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">免許ラボ一押しプラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star1.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th class="sizeM">料金</th>
									<th rowspan="3">
										<div class="btn btn-spaceNon">
											<p class="btn_inner btn_inner-design1">
												<a href="" class="btn_inner_anchor btn_inner_anchor-arrow2">このプランでの<br>仮申込みはこちら</a>
											</p>
										</div>
									</th>
								</tr>
								<tr class="borderDotted">
									<th class="planName">スピードプラン(AT)</th>
									<td class="price">220,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th class="planName">スピードプラン(MT)</th>
									<td class="price">230,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th>こんな人にオススメ！</th>
									<td colspan="2" class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th rowspan="2">内容</th>
									<td class="spaceL" colspan="2" rowspan="2">
										<div class="textBox">
											<p class="textBox_text">お客様のご予定をお伺いし、教習所のスタッフが段階毎に一括予約いたします。毎日は通えないけど自分の都合に沿ってなるべく早く免許取得したい方にオススメ！
											</p>
										</div>
									</td>
								</tr>
							</table>
							<div class="textBox textBox-alignRight textBox-spaceS">
								<p class="textBox_text">※教習所の「のぞみプラン」にあたります。</p>
							</div>
						</section>
						<section class="planBox planBox-color2">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">短期集中プラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star2.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th class="sizeM">料金</th>
									<th rowspan="3">
										<div class="btn btn-spaceNon">
											<p class="btn_inner btn_inner-design1">
												<a href="" class="btn_inner_anchor btn_inner_anchor-arrow2">このプランでの<br>仮申込みはこちら</a>
											</p>
										</div>
									</th>
								</tr>
								<tr class="borderDotted">
									<th class="planName">短期集中プラン(AT)</th>
									<td class="price">220,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th class="planName">短期集中プラン(MT)</th>
									<td class="price">230,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th>こんな人にオススメ！</th>
									<td colspan="2" class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th rowspan="2">内容</th>
									<td class="spaceL" colspan="2" rowspan="2">
										<div class="textBox">
											<p class="textBox_text">教習所の作成したスケジュールに沿って教習を進めていきます。</p>
										</div>
									</td>
								</tr>
							</table>
							<div class="textBox textBox-alignRight textBox-spaceS">
								<p class="textBox_text">※教習所の「マッハプラン」にあたります。</p>
							</div>
						</section>
						<section class="planBox planBox-color3">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">最安値プラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star3.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th class="sizeM">料金</th>
									<th rowspan="3">
										<div class="btn btn-spaceNon">
											<p class="btn_inner btn_inner-design1">
												<a href="" class="btn_inner_anchor btn_inner_anchor-arrow2">このプランでの<br>仮申込みはこちら</a>
											</p>
										</div>
									</th>
								</tr>
								<tr class="borderDotted">
									<th class="planName">ベーシックプラン(AT)</th>
									<td class="price">220,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th class="planName">ベーシックプラン(AT)</th>
									<td class="price">230,000円<span>(税込)</span></td>
								</tr>
								<tr class="borderBottom">
									<th>こんな人にオススメ！</th>
									<td colspan="2" class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th rowspan="2">内容</th>
									<td class="spaceL" colspan="2" rowspan="2">
										<div class="textBox">
											<p class="textBox_text">
												教習所に置いてある予約機、インターネット、携帯からお客様ご自身で2時限分(手持ち2時限)技能予約をお取り頂きます。第一段階は1日2時限、第二段階は1日3時限まで予約できます。</p>
										</div>
									</td>
								</tr>
							</table>
							<div class="textBox textBox-alignRight textBox-spaceS">
								<p class="textBox_text">※教習所の「スタンダードプラン」にあたります。</p>
							</div>
						</section>
						<section class="planBox planBox-color1 planBox-spaceM">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">免許ラボ一押しプラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star1.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th>内容</th>
								</tr>
								<tr class="borderBottom">
									<th class="planName">
										<label>
											<input type="radio" name="planOption" checked="checked">スピードプラン
										</label>
									</th>
									<td>
										<div class="textBox">
											<p class="textBox_text">お客様のご予定をお伺いし、教習所のスタッフが段階毎に一括予約いたします。毎日は通えないけど自分の都合に沿ってなるべく早く免許取得したい方にオススメ！
											</p>
										</div>
									</td>
								</tr>
								<tr>
									<th>こんな人にオススメ！</th>
									<td class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
							</table>
						</section>
						<section class="planBox planBox-color2 planBox-spaceM">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">短期集中プラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star2.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th>内容</th>
								</tr>
								<tr class="borderBottom">
									<th class="planName">
										<label>
											<input type="radio" name="planOption">短期集中プラン
										</label>
									</th>
									<td>
										<div class="textBox">
											<p class="textBox_text">
												教習所の作成したスケジュールに沿って教習を進めていきます。学科と技能教習がバランスよく組まれているので、卒業までスムーズに進められます。とにかく短期間で取得したい方にオススメのプランです。
											</p>
										</div>
									</td>
								</tr>
								<tr>
									<th>こんな人にオススメ！</th>
									<td class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
							</table>
						</section>
						<section class="planBox planBox-color3 planBox-spaceM">
							<div class="planBox_titleBox">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">最安値プラン</h4>
								</div>
								<p class="recommendLevel">おすすめ度<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/star3.png" alt=""></p>
							</div>
							<table class="planTable">
								<tr>
									<th class="sizeS">オプション名</th>
									<th>内容</th>
								</tr>
								<tr class="borderBottom">
									<th class="planName">
										<label>
											<input type="radio" name="planOption">ベーシックプラン
										</label>
									</th>
									<td>
										<div class="textBox">
											<p class="textBox_text">手持ち3時限。予約機・PC・モバイルからお客様ご自身で技能をご予約いただきます。学科も自分で組みます。</p>
										</div>
									</td>
								</tr>
								<tr>
									<th>こんな人にオススメ！</th>
									<td class="spaceM">
										<ul class="osusume">
											<li class="osusume_item disabled">高校生</li>
											<li class="osusume_item">大学生</li>
											<li class="osusume_item">短大生</li>
											<li class="osusume_item">専門学生</li>
											<li class="osusume_item">フリーター</li>
											<li class="osusume_item">社会人</li>
											<li class="osusume_item">主婦</li>
										</ul>
									</td>
								</tr>
							</table>
						</section>
					</section>

					<section class="block block-spaceL">
						<div class="title title-design2">
							<h3 class="title_text title_text-sizeL title_text-color3">保証オプション</h3>
						</div>
						<div class="textBox">
							<p class="textBox_text">お客様の要望に応える保証オプションをご用意しました。基本料金にプラスオプション料金を追加することで、更に快適な教習ライフをお過ごしいただけます。</p>
						</div>
						<div class="btn btn-alignRight">
							<p class="btn_inner btn_inner-color1 btn_inner-size3L">
								<a href="" class="btn_inner_anchor btn_inner_anchor-spaceS btn_inner_anchor-hoshou">
									<i class="schoolIcon schoolIcon-plus"></i><span>保証オプションって必要なの？</span>
								</a>
							</p>
						</div>
						<div class="optionDetail">
							<div class="textBox">
								<p class="textBox">
									プランには普通車AT31時限、普通車MT34時限の規定分の料金がパックされています。その時限オーバー（指導員によりきちんと内容を習得できたとの判断が得られない）した場合、再度同じ項目、内容を教習しなければなりません。その際には、１時限分の追加技能料金が発生します。
								</p>
							</div>
							<div class="textBox">
								<p class="textBox_text textBox_text-optionDetail1">免許ラボイチオシの保証オプション</p>
								<p class="textBox_text textBox_text-optionDetail2">「安心パック」に入っていれば安心！！</p>
							</div>
							<div class="optionDetail_imageBox">
								<div class="optionDetail_imageBox_left">
									<div class="textBox textBox-optionDetail1">
										<p class="textBox_text textBox_text-optionDetail3">技能オーバーしても…</p>
										<p class="textBox_text textBox_text-optionDetail3">検定試験に落ちても…</p>
									</div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/illust1.png" alt="">
								</div>
								<div class="optionDetail_imageBox_right">
									<div class="textBox textBox-optionDetail2">
										<p class="textBox_text textBox_text-optionDetail4">安心パックなら</p>
										<p class="textBox_text textBox_text-optionDetail4">技能教習・検定も追加料金なし！</p>
									</div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/illust2.png" alt="">
								</div>
							</div>

							<div class="textBox textBox-spaceM">
								<p class="textBox_text">
									安心パックとは、追加技能料金がかからなくなります。<br>また技能教習だけでなく、検定試験に不合格になった場合でも再検定の費用が必要ありませんので、<span
										class="textBox_text textBox_text-color2">思い切り教習に専念でき教習効果のアップも期待できます。</span>
								</p>
							</div>
						</div>


						<div class="textBox textBox-spaceL">
							<p class="textBox_text textBox_text-sizeM textBox_text-bold">保証オプションを選択して下さい。</p>
						</div>
						<table class="optionTable">
							<tr>
								<th class="tableTitle">オプション名</th>
								<th class="tableTitle">オプション料金</th>
								<th class="tableTitle widthL">内容</th>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">技能フリープラン<br>18～24歳
									</label>
								</th>
								<td class="price">+10,000円<span>(税込)</td>
								<td>
									<div class="textBox">
										<p class="textBox_text">技能の追加料金が掛かりません。</p>
										<p class="textBox_text">18～24歳対象の料金です。</p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">技能フリープラン<br>一般(31～39歳)
									</label>
								</th>
								<td class="price">+10,000円<span>(税込)</span></td>
								<td class="paddingL">
									<div class="textBox">
										<p class="textBox_text">修了検定・卒業検定の追加料金が掛かりません。</p>
										<p class="textBox_text">一般(31～39歳)対象となります</p>
									</div>
								</td>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">安心パック
									</label>
								</th>
								<td class="price">+15,000円<span>(税込)</span></td>
								<td class="paddingL">
									<div class="textBox">
										<p class="textBox_text">技能と終了検定・卒業検定の追加料金が掛かりません。</p>
									</div>
								</td>
							</tr>
						</table>


						<div class="textBox textBox-spaceS">
							<p class="textBox_text">※お客様が希望された教習（自由練習）は保証の対象外となります。</p>
							<p class="textBox_text">※修了検定・卒業検定が不合格になった時の補習教習は補償の対象外となります</p>
						</div>
					</section>

					<section class="block block-space2L">
						<div class="title title-design2 title-design2-decoration">
							<h3 class="title_text title_text-sizeL title_text-color2">仮申し込み <sapn class="title_text-sizeS">-プランのご選択-
								</sapn>
							</h3>
						</div>

						<ol class="applyFlow">
							<li class="applyFlow_item active">
								<p class="applyFlow_item_number">①</p>
								<p class="applyFlow_item_text">プランの<br>ご選択</p>
							</li>
							<li class="applyFlow_item">
								<p class="applyFlow_item_number">②</p>
								<p class="applyFlow_item_text">オプションの<br>ご選択</p>
							</li>
							<li class="applyFlow_item">
								<p class="applyFlow_item_number">③</p>
								<p class="applyFlow_item_text">基本情報の<br>ご入力</p>
							</li>
							<li class="applyFlow_item">
								<p class="applyFlow_item_number">④</p>
								<p class="applyFlow_item_text">入力内容の<br>ご確認</p>
							</li>
							<li class="applyFlow_item">
								<p class="applyFlow_item_number">⑤</p>
								<p class="applyFlow_item_text">仮申込み<br>完了</p>
							</li>
						</ol>
						<div class="textBox textBox-spaceM">
							<p class="textBox_text">下記よりご希望のプランを選択して「オプション選択へ」をクリックしてください。</p>
						</div>
						<section class="block_block">
							<div class="title title-design2">
								<h3 class="title_text title_text-sizeL title_text-color3">基本情報</h3>
							</div>
							<section class="planBox planBox-spaceM">
								<div class="title title-design5">
									<h4 class="title_text title_text-widthM">お申込み内容</h4>
								</div>
								<table class="planTable planTable-apply">
									<tr class="borderDotted">
										<th>学校名</th>
										<td>足立自動車</td>
									</tr>
									<tr class="borderDotted">
										<th>ご希望のプラン</th>
										<td>スピードプラン</td>
									</tr>
									<tr class="borderDotted">
										<th>予約オプション</th>
										<td>普通車AT/免なし・原付/高校生割引/グループ割引/女性割引</td>
									</tr>
									<tr class="borderDotted">
										<th>保証オプション</th>
										<td>安心パック</td>
									</tr>
									<tr class="borderDotted">
										<th>合計金額</th>
										<td class="price price-sizeS price-alignLeft">220,000円<span>(税込)</span></td>
									</tr>
								</table>
							</section>
							<table class="schoolTable schoolTable-apply">
								<tr>
									<th>
										<div>
											<p>お名前</p>
											<p class="required">必須</p>
										</div>
									</th>
									<td>
										<p>
											姓 <input type="text" class="name" placeholder="山田">
											名 <input type="text" class="name" placeholder="太郎">
										</p>
									</td>
								</tr>
								<tr>
									<th>
										<div>
											<p>ご連絡先</p>
											<p class="required">必須</p>
										</div>
									</th>
									<td>
										<p>
											<p>※日中連絡が可能な電話番号をご記入ください(携帯電話も可)。</p>
											<p>
												<input type="number" class="telNumber" maxlength="3" min="0" placeholder="090">-
												<input type="number" class="telNumber" maxlength="4" min="0" placeholder="1111">-
												<input type="number" class="telNumber" maxlength="4" min="0" placeholder="1111">
											</p>
										</p>
									</td>
								</tr>
								<tr>
									<th>
										<div>
											<p>メールアドレス</p>
											<p class="required">必須</p>
										</div>
									</th>
									<td>
										<input type="email" class="email" placeholder="menkyo-lab@gmail.com">
									</td>
								</tr>
							</table>
							<div class="btnBox btnBox-spaceL">
								<div class="btn btn-spaceS disabled">
									<p class="btn_inner btn_inner-design1 btn_inner-size4L">
										<a href=""
											class="btn_inner_anchor btn_inner_anchor-arrow2 btn_inner_anchor-arrow2-spaceS">オプション選択に戻る</a>
									</p>
								</div>
								<div class="btn btn-spaceS">
									<p class="btn_inner btn_inner-design1 btn_inner-size4L">
										<a href=""
											class="btn_inner_anchor btn_inner_anchor-arrow2 btn_inner_anchor-arrow2-spaceS">入力内容の確認</a>
									</p>
								</div>
								<div class="btn btn-spaceS disabled">
									<p class="btn_inner btn_inner-design1 btn_inner-size4L">
										<a href=""
											class="btn_inner_anchor btn_inner_anchor-arrow2 btn_inner_anchor-arrow2-spaceS">基本情報入力へ戻る</a>
									</p>
								</div>
								<div class="btn btn-spaceS">
									<p class="btn_inner btn_inner-design1 btn_inner-size4L">
										<a href="" class="btn_inner_anchor btn_inner_anchor-arrow2 btn_inner_anchor-arrow2-spaceS">送信する</a>
									</p>
								</div>
							</div>
						</section>
					</section>



					<!-- ここからいらない -->
					<section class="block block-spaceL">
						<div class="title title-design2">
							<h3 class="title_text title_text-sizeL title_text-color3">教習所基本料金</h3>
						</div>
						<div class="textBox">
							<p class="textBox_text">
								教習所に置いてある予約機、インターネット、携帯からお客様ご自身で2時限分(手持ち2時限)技能予約をお取り頂きます。第一段階は1日2時限、第二段階は1日3時限まで予約できます。</p>
						</div>
						<div class="btn btn-alignLeft btn-spaceTopBottomM">
							<p class="btn_inner btn_inner-color1 btn_inner-sizeM">
								<a href="" class="btn_inner_anchor btn_inner_anchor-spaceS">
									<i class="schoolIcon schoolIcon-plus"></i>手持ちとは・・？
								</a>
							</p>
						</div>
						<div class="textBox">
							<p class="textBox_text textBox_text-color1">手持ち予約数とは一度に技能予約ができる最大数のことです。</p>
						</div>
					</section>

					<section class="block block-spaceL">
						<div class="title title-design2">
							<h3 class="title_text title_text-sizeL title_text-color3">プランオプション</h3>
						</div>

						<table class="optionTable">
							<tr>
								<th class="tableTitle">オプション名</th>
								<th class="tableTitle">オプション料金</th>
								<th class="tableTitle widthL">内容</th>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">ベーシックプラン
									</label>
								</th>
								<td class="price">0円</td>
								<td class="paddingL">
									教習所の基本プランとなります。ゆっくりでもいい、安く済ませたいという方にオススメです。
									<dl class="osusume">
										<dt class="osusume_title">こんな人にオススメ！</dt>
										<dd class="osusume_target">
											<p class="osusume_item osusume_item-disabled">高校生</p>
											<p class="osusume_item">大学生</p>
											<p class="osusume_item">短大生</p>
											<p class="osusume_item">専門学生</p>
											<p class="osusume_item">フリーター</p>
											<p class="osusume_item">社会人</p>
											<p class="osusume_item">主婦</p>
										</dd>
									</dl>
								</td>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">スピードプラン
									</label>
								</th>
								<td class="price">+10,000円<span>(税込)</span></td>
								<td class="paddingL">
									お客様のご予定をお伺いし、教習所のスタッフが段階毎に一括予約(第一段階・第二段階)いたします。毎日は通えないけど自分の都合に沿ってなるべく早く免許取得したい方にオススメ！
									<dl class="osusume">
										<dt class="osusume_title">こんな人にオススメ！</dt>
										<dd class="osusume_target">
											<p class="osusume_item osusume_item-disabled">高校生</p>
											<p class="osusume_item">大学生</p>
											<p class="osusume_item">短大生</p>
											<p class="osusume_item">専門学生</p>
											<p class="osusume_item">フリーター</p>
											<p class="osusume_item">社会人</p>
											<p class="osusume_item">主婦</p>
										</dd>
									</dl>
								</td>
							</tr>
							<tr>
								<th class="checkBox">
									<label>
										<input type="radio" name="planOption">短期集中プラン
									</label>
								</th>
								<td class="price">+20,000円<span>(税込)</span></td>
								<td class="paddingL">
									教習所の作成したスケジュールに沿って教習を進めていきます。学科と技能教習がバランスよく組まれているので、卒業までスムーズに進められます。とにかく短期間で取得したい方にオススメのプランです。
									<dl class="osusume">
										<dt class="osusume_title">こんな人にオススメ！</dt>
										<dd class="osusume_target">
											<p class="osusume_item osusume_item-disabled">高校生</p>
											<p class="osusume_item">大学生</p>
											<p class="osusume_item">短大生</p>
											<p class="osusume_item">専門学生</p>
											<p class="osusume_item">フリーター</p>
											<p class="osusume_item">社会人</p>
											<p class="osusume_item">主婦</p>
										</dd>
									</dl>
								</td>
							</tr>
						</table>
						<div class="textBox textBox-spaceL">
							<p class="textBox_text">※ご入校後のプラン変更はできませんのでご注意ください。</p>
						</div>
					</section>

					<section class="block block-spaceL">
						<div class="title title-design2">
							<h3 class="title_text title_text-sizeL title_text-color3">保証オプション</h3>
						</div>
						<table class="table optionTable">
							<tr class="table_row">
								<th class="table_row_title table_row_title-name">オプション名</th>
								<th class="table_row_title table_row_title-price">オプション料金</th>
								<th class="table_row_title table_row_title-content">内容</th>
							</tr>
							<tr class="table_row">
								<th class="table_row_checkBox">
									<label>
										<input type="radio" name="planOption" checked>なし
									</label>
								</th>
								<td class="table_row_price">0円</td>
								<td class="table_row_content">オプションなしのプランとなります。</td>
							</tr>
							<tr class="table_row">
								<th class="table_row_checkBox">
									<label>
										<i class="schoolIcon schoolIcon-tel"></i>
										<input type="radio" name="planOption">技能フリーパック
									</label>
								</th>
								<td class="table_row_price">+10,000<span>(税込)</span></td>
								<td class="table_row_content">技能の追加料金が掛かりません。</td>
							</tr>
							<tr class="table_row">
								<th class="table_row_checkBox">
									<label>
										<i class="schoolIcon schoolIcon-tel"></i>
										<input type="radio" name="planOption">検定フリーパック
									</label>
								</th>
								<td class="table_row_price">+10,000<span>(税込)</span></td>
								<td class="table_row_content">修了検定・卒業検定の追加料金が掛かりません。</td>
							</tr>
							<tr class="table_row">
								<th class="table_row_checkBox">
									<label>
										<i class="schoolIcon schoolIcon-tel"></i>
										<input type="radio" name="planOption">安心フリーパック
									</label>
								</th>
								<td class="table_row_price">+15,000<span>(税込)</span></td>
								<td class="table_row_content">技能と終了検定・卒業検定の追加料金が掛かりません。</td>
							</tr>
						</table>
						<div class="textBox textBox-spaceL">
							<p class="textBox_text">※お客様が希望された教習（自由練習）は保証の対象外となります。</p>
							<p class="textBox_text">※修了検定・卒業検定が不合格になった時の補習教習は補償の対象外となります。</p>
						</div>
					</section>


					<section class="block block-spaceL block-request">
						<div class="block_box">




							<div class="title">
								<h3 class="title_text title_text-color3">ベーシックプラン/普通車ＡＴ(免なし・原付)/安心パック</h3>
							</div>
							<div class="tableBox">
								<table class="table table-left">
									<tr class="table_row">
										<th class="table_row_title">基本料金</th>
										<th class="table_row_title">免ラボクーポン適用</th>
										<th class="table_row_title">割引</th>
										<th class="table_row_title">保証オプション</th>
									</tr>
									<tr class="table_row">
										<td class="table_row_price">257,040円</td>
										<td class="table_row_price">-5,0000円</td>
										<td class="table_row_price">-5,0000円</td>
										<td class="table_row_price">+15,000円</td>
									</tr>
								</table>
								<table class="table table-right">
									<tr class="table_row">
										<th class="table_row_title">合計金額</th>
									</tr>
									<tr class="table_row">
										<td class="table_row_price">262,040円</td>
									</tr>
								</table>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL">このプランに申し込む</a>
								</p>
							</div>


						</div>
					</section>

				</section>
				<!-- 料金プラン#work2 -->
				<section id="work3" class="block block-design2 tabsPanel">
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">アクセス</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">教習所名</p>
								<p class="list_item_text">足立自動車学校</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">所在地</p>
								<p class="list_item_text">東京都足立区東六月町3-1 <a href="https://goo.gl/maps/rRgLYYSSgCz1Z5Ns6"
										target="_blank">地図を見る</a></p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">最寄駅</p>
								<p class="list_item_text">竹ノ塚駅 徒歩15分</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">入校日</p>
								<p class="list_item_text">毎日・年中無休（年末年始を除く）</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">入校受付時間</p>
								<p class="list_item_text">平日　9：00 ～ 20：00<br>土・日・祝日　9：00 ～ 20：00</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">入校式</p>
								<p class="list_item_text">毎日実施<br>※混雑状況により、開始時間に変更があります。お問合わせ下さい。<br>※入校受付は入校式の1時間前、または前日までに済ませて下さい。
								</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">教習所設備</p>
								<p class="list_item_text">駐輪場／駐車場10台／更衣室／自習室</p>
							</li>
						</ul>
						<div class="btnBox btnBox-spaceM">
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i
											class="schoolIcon schoolIcon-tel"></i><span>電話予約</span></a>
								</p>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i class="schoolIcon"></i><span>ネット予約</span></a>
								</p>
							</div>
						</div>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design3">
							<h3 class="title_text">駅</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">駅</p>
								<p class="list_item_text">西新井駅より25分／竹ノ塚駅より25分／梅島駅より15分／五反野駅より10分／綾瀬駅より15分／北綾瀬駅より15分／青井駅より10分／六町駅より10分
								</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">学校</p>
								<p class="list_item_text">東京電機大学</p>
							</li>
							<li class="list_item list_item-underLayer">
								<p class="list_item_title">その他</p>
								<p class="list_item_text">スーパーベルクスより8分／四家交差点（セブンイレブン前）より9分</p>
							</li>
						</ul>
						<div class="googleMap">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.5376662892613!2d139.8012747152617!3d35.78673168016993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601891c58a1e4507%3A0xba2ea81cefc61c6!2z44CSMTIxLTAwNzEg5p2x5Lqs6YO96Laz56uL5Yy65p2x5YWt5pyI55S677yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1601253065902!5m2!1sja!2sjp"
								width="670" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
								tabindex="0"></iframe>
						</div>
					</section>
					<section class="block block-spaceL">
						<div class="title title-design4">
							<h3 class="title_text title_text-color3">近隣の教習所をピックアップ</h3>
						</div>
						<ul class="list">
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo5.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo6.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
							<li class="list_item list_item-flex list_item-pickUp">
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/schoolpage-home-photo7.png" alt="○○○自動車学校">
								<div>
									<div class="textBox">
										<p class="textBox_text textBox_text-pref textBox_text-inline">神奈川</p>
										<p class="textBox_text textBox_text-school textBox_text-inline"><a href="#">○○○自動車学校</a></p>
									</div>
									<dl class="pickUpList">
										<dt class="pickUpList_title">住所</dt>
										<dd class="pickUpList_text">東京都調布市菊野台1-34-1</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">アクセス</dt>
										<dd class="pickUpList_text">京王線 柴咲駅北口より徒歩3分</dd>
									</dl>
									<dl class="pickUpList">
										<dt class="pickUpList_title">最安値</dt>
										<dd class="pickUpList_text pickUpList_text-price">200,000円～</dd>
									</dl>
								</div>
							</li>
						</ul>
						<div class="btnBox btnBox-spaceM">
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i
											class="schoolIcon schoolIcon-tel"></i><span>電話予約</span></a>
								</p>
							</div>
							<div class="btn btn-spaceM">
								<p class="btn_inner btn_inner-color2 btn_inner-size2L">
									<a href="" class="btn_inner_anchor btn_inner_anchor-spaceL"><i class="schoolIcon"></i><span>ネット予約</span></a>
								</p>
							</div>
						</div>
					</section>
				</section>
				<!-- アクセス#work3 -->


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
