<?php
/* Smarty version 3.1.29, created on 2019-05-21 13:53:21
  from "/home/dev0006/www/thai-lover/production/application/views/sp/search/karaoke.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ce38441650aa2_65504628',
  'file_dependency' => 
  array (
    '65e1ef1a93a1aa9bf3cd6cbddb5d86e941674310' => 
    array (
      0 => '/home/dev0006/www/thai-lover/production/application/views/sp/search/karaoke.tpl',
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
function content_5ce38441650aa2_65504628 ($_smarty_tpl) {
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
				<h1>カラオケ検索</h1>
				<div class="mcBox mcb">
					<section>
						<div class="inBox font">
							<h2><span class="tl"></span>カラオケとは・・・？</h2>
							<div class="subBox">
								<div class="subBox">
									<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/search/img_karaoke01.jpg" alt=""></p>
									<p>
										日本で言うところのキャバクラに近い商売をしているお店をカラオケと呼びます。日本人専用なのでお店の看板は日本語で、お店の人もある程度の日本語であれば通用します。
									</p>
									<p>
										また、日本のキャバクラと同じように女の子と飲むだけのお店と取れだせるお店があります。ただし、連れ出せるお店でも連れ出しＯＫな女の子と連れ出しＮＧの子がいるので注意！
									</p>
								</div>
							</div>
						</div>
					</section>
					<nav id="areasearch">
						<div>
							<div class="subBox">
								<div class="borderline">
									<ul class="searchTab bc2">
										<li class="last"><a href="#tani">タニヤ</a></li>
										
									</ul>
									<div class="searchList">
										<div class="area" id="tani">
											<div class="content">
												<div class="selection page1">
													<div class="item-box">
														<ul>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/f1/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_club_f1.png" alt=""></a>
																			
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/f1/?key=info">CLUB F1</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日(仏教の日、王室関係の日、選挙投票日)、タイ旧正月(4/13～15)</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
																
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/m/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_club_m.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/m/?key=info">CLUB M</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日(仏教の日、王室関係の日、選挙投票日)、タイ旧正月(4/13～15)</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/kusunoki/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_kusunoki.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/kusunoki/?key=info">楠</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～02：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/mermaid/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_mermaid.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/mermaid/?key=info">Mermaid</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日(仏教の日、王室関係の日、選挙投票日)、タイ旧正月(4/13～15)</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/mr/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_mr.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/mr/?key=info">Moulin Rouge</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日(仏教の日、王室関係の日、選挙投票日)、タイ旧正月(4/13～15)</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/ageha/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_ageha.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/ageha/?key=info">Ageha</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>14:00-01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/phoenix/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_phoenix.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/phoenix/?key=info">Phoenix Club</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00-01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）、タイ旧正月（4/13-15）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/redapple/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_redapple.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/redapple/?key=info">Red Apple</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>18:00-01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約1分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/caro/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_caro.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/caro/?key=info">caro</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00-01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSトンロー駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="selection page2">
													<div class="item-box">
														<ul>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/gion/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_gion.png" alt=""></a>
																			
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/gion/?key=info">祇園</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
																
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/maiko/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_maiko.png" alt=""></a>
																			
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/maiko/?key=info">舞妓</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
																
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/geiko/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_geiko.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/geiko/?key=info">芸子</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01：00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/line/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_line.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/line/?key=info">Club Line</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01：00</dd>
																				<dt>■定 休 日 </dt><dd>－</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/ai/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_ai.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/ai/?key=info">Club 愛</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/miyabi/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_miyabi.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/miyabi/?key=info">Club 雅</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～02:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/joejoe/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_joejoe.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/joejoe/?key=info">JOE JOE</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）、タイ旧正月（4/13-15）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/kirara/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_kirara.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/kirara/?key=info">Kirara</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（王室関連の祝日,仏教行事の祭日,法令で定められた日）</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/marcopolo/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_marco_maerma.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/marcopolo/?key=info">Marco Polo</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（王室関連の祝日,仏教行事の祭日,法令で定められた日）</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/marmalade/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_marco_maerma.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/marmalade/?key=info">Marmalade</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（王室関連の祝日,仏教行事の祭日,法令で定められた日）</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="selection page3">
													<div class="item-box">
														<ul>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/satika/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_satika.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/satika/?key=info">Satika</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>－</dd>
																				<dt>■定 休 日 </dt><dd>－</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/she2/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_she2.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/she2/?key=info">SHE2</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）</dd>
																				<dt>■アクセス</dt><dd>BTSプロンポン駅より徒歩約15分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/queen/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_queen.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/queen/?key=info">Super Queen</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（王室関連の祝日,仏教行事の祭日,法令で定められた日）</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/tiara/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/no_image_pic.jpg" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/tiara/?key=info">Tiara</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>月・火・水 20:00～1:00<br>木・土 20:00～2:00</dd>
																				<dt>■定 休 日 </dt><dd>－</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/trendy/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_trendy.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/trendy/?key=info">Trendy Club</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～01:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）、タイ旧正月（4/13-15）</dd>
																				<dt>■アクセス</dt><dd>BTSサラデーン駅より徒歩約5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/no1/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_no1.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/no1/?key=info">ナンバーワン</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>－</dd>
																				<dt>■定 休 日 </dt><dd>－</dd>
																				<dt>■アクセス</dt><dd>－</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
															<li>
																<div class="shop-info">
																	<div>
																		<div class="img">
																			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/roommate/?key=info"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/search/karaoke/karaoke_img_room.png" alt=""></a>
																		</div>
																	</div>
																	<dl>
																		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/karaoke/sub/roommate/?key=info">Roommate</a></dt>
																		<dd>
																			<dl class="listBox">
																				<dt>■営業時間</dt><dd>19:00～25:00</dd>
																				<dt>■定 休 日 </dt><dd>禁酒日（仏教の日、王室関係の日、選挙の日など）、タイ旧正月（4/13-15）</dd>
																				<dt>■アクセス</dt><dd>BTS エカマエ駅 徒歩5分</dd>
																			</dl>
																		</dd>
																	</dl>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="pageList">
												<div id="taniList"></div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
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
<div id="footer_banner">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/sp/top_about_btn.png" alt="資料請求まずはこちらから"></a></p>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sp/include/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
//<![CDATA[
$(function() {
	var pageNo = null;
	var url = location.href;
	var get = url.split("?key=");
	$('.searchList .content > .selection').hide();
	$('.searchList .content > .selection.page1').show();
	if(get[1]){
		pageNo = get[1].substr(0,1);
		if(pageNo > $('.searchTab > li').length ) pageNo = null;
	}
	if(pageNo){
			$('.borderline > .searchTab > li:eq('+pageNo+')').each(function(){
				$(this).addClass('active');
				$($(this).find('a').attr('href')).show();
			})
	}else {
		if($.cookie('thailand_search')){
			pageNo = $.cookie('thailand_search');
			$('.borderline > .searchTab > li:eq('+pageNo+')').each(function(){
				$(this).addClass('active');
				$($(this).find('a').attr('href')).show();
			})
		}else{
			$('.borderline > .searchList > .area:first').show();
			$('.searchTab > li:first').addClass('active');
		}
	}
	var setID = $('.searchTab > .active > a').attr("href");
	//クリックイベント
	$('.searchTab > li').click(
		function() {
			var pageNo = $(this).index();
			$.cookie("thailand_search",pageNo,{ expires: 1});
			$('.searchTab > li').removeClass('active');
			$(this).addClass('active');
			$('.area').hide();
			setID = $('.searchTab > .active > a').attr("href");
			var cheName =$(setID+'List .active .current').html();
			if(cheName == "前") cheName = 1;
			$('.searchList .content > .selection').hide();
			$(".searchList "+ setID +" .content > .page"+cheName).show();
			$($(this).find('a').attr('href')).fadeIn();
			return false;
		}
	);
	function show(pageNumber){
		var page=".searchList .content > .page"+pageNumber;
		$(setID + " .content").prepend('<p class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/loading.gif" alt="" /></p>');
		$('.searchList .content > .selection').hide();
		$("html,body").animate({ scrollTop: $(".borderline").offset().top }, 'slow','swing',function(){
			$(page).fadeIn();
			$(setID + " .content .loading").remove();
		})
	}
	$(function(){
		$("#taniList").pagination({
			items: 3, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
	$(function(){
		$("#sukumuList").pagination({
			items: 2, 
			onPageClick: function(pageNumber){show(pageNumber)}
		})
	});
});
//]]>
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
