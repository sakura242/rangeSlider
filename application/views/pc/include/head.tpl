{if $is_ie}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{/if}
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="Range Slider">
{if !empty($head_keywords)}
<meta name="keywords" content="{$head_keywords},Range Slider">
{/if}
{if !empty($description)}
<meta name="description" content="{$description}">
{/if}
{if empty($head_title)}
<meta property="og:title" content="Range Slider">
<meta property="og:type" content="website">
{else}
<meta property="og:title" content="{$head_title} | Range Slider">
<meta property="og:type" content="article">
{/if}
{if !empty($description)}
<meta property="og:description" content="{$description}">
{/if}
<meta property="og:image" content="{$base_url}img/fb_image.jpg">
<meta property="og:site_name" content="Range Slider">
<meta property="og:locale" content="ja_JP">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
{if empty($head_title)}
<title>Range Slider</title>
{else}
<title>{$head_title} | Range Slider</title>
{/if}
<link rel="icon" href="{$base_url}favicon.ico">
<link rel="apple-touch-icon" href="{$base_url}img/apple-touch-icon.png">
{if !empty($canonical)}
<link rel="canonical" href="{$canonical}">
{/if}
<!-- css -->
<link rel="stylesheet" href="{$base_url}css/pc/reset.css">
<!-- font awesome -->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="{$base_url}css/pc/style.css" rel="stylesheet">
<!-- js -->
<script src="{$base_url}/js/common/jquery-3.5.1.js"></script>
<!-- chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="{$base_url}/js/global.js"></script>