{if $is_ie}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{/if}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" conten ="telephone=no">
<meta name="apple-mobile-web-app-title" content="テスト">
{if !empty($head_keywords)}
<meta name="keywords" content="{$head_keywords},テスト">
{/if}
{if !empty($description)}
<meta name="description" content="{$description}">
{/if}
{if empty($head_title)}
<meta property="og:title" content="テスト">
<meta property="og:type" content="website">
{else}
<meta property="og:title" content="{$head_title} | テスト">
<meta property="og:type" content="article">
{/if}
{if !empty($description)}
<meta property="og:description" content="{$description}">
{/if}
<meta property="og:image" content="{$base_url}images/compass_og.png">
<meta property="og:site_name" content="テスト">
<meta property="og:locale" content="ja_JP">
{if empty($head_title)}
<title>テスト</title>
{else}
<title>{$head_title} | テスト</title>
{/if}
<link rel="icon" href="{$base_url}favicon.ico">
<link rel="apple-touch-icon" href="/img/icon/apple-touch-icon.png">
{if !empty($canonical)}
<link rel="canonical" href="{$canonical}">
{/if}
<link rel="stylesheet" href="{$base_url}public/css/sp/reset.css">
<link rel="stylesheet" href="{$base_url}public/css/sp/style.css">
{if !empty($page_css1)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css1}">
{/if}
{if !empty($page_css2)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css2}">
{/if}
{if !empty($page_css3)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css3}">
{/if}
{if !empty($page_css4)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css4}">
{/if}
{if !empty($page_css5)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css5}">
{/if}
{if !empty($page_css6)}
<link rel="stylesheet" href="{$base_url}public/css/sp/{$page_css6}">
{/if}
<script src="{$base_url}public/js/jquery.js"></script>
<!-- <script src="{$base_url}public/js/sp/app/modules.js"></script>
<script src="{$base_url}public/js/sp/plugins/plugins.js"></script> -->
{if !empty($jq_cookie)}
<script src="{$base_url}public/js/jquery.cookie.js"></script>
{/if}
{if !empty($js_file1)}
<script src="{$base_url}public/js/sp/{$js_file1}"></script>
{/if}
{if !empty($js_file2)}
<script src="{$base_url}public/js/sp/{$js_file2}"></script>
{/if}
{if !empty($js_file3)}
<script src="{$base_url}public/js/sp/{$js_file3}"></script>
{/if}
{if !empty($js_file4)}
<script src="{$base_url}public/js/sp/{$js_file4}"></script>
{/if}
{if !empty($js_file5)}
<script src="{$base_url}public/js/sp/{$js_file5}"></script>
{/if}
{if !empty($js_file6)}
<script src="{$base_url}public/js/sp/{$js_file6}"></script>
{/if}
{if ($is_ie6 || $is_ie7 || $is_ie8)}
<script src="{$base_url}public/js/css3-mediaqueries.js"></script>
<script src="{$base_url}public/js/html5shiv-printshiv.js"></script>
{/if}
{include file='common/head_tag.tpl'}