{literal}
<script>
//<![CDATA[
$(function(){var topBtn=$('#topButton');topBtn.hide();$(window).scroll(function(){if($(this).scrollTop()>100){topBtn.fadeIn()}else{topBtn.fadeOut()}});$(window).bind("scroll",function(){scrollHeight=$(document).height();scrollPosition=$(window).height()+$(window).scrollTop();footHeight=$("#globalFooter .footer-bg .logo").innerHeight();bannerHeight=$("#footer_banner").innerHeight();if(scrollHeight-scrollPosition<=footHeight){$("#topButton").css({"position":"fixed","bottom":bannerHeight})}else{$("#topButton").css({"position":"fixed","bottom":bannerHeight})}});topBtn.click(function(){$('body,html').animate({scrollTop:0},500);return false})});
$(function(){var topBtn=$('#footer_banner');topBtn.hide();$(window).scroll(function(){if($(this).scrollTop()>100){topBtn.fadeIn()}else{topBtn.fadeOut()}});$(window).bind("scroll",function(){scrollHeight=$(document).height();scrollPosition=$(window).height()+$(window).scrollTop();footHeight=$("footer").innerHeight();if(scrollHeight-scrollPosition<=footHeight){$("#footer_banner").css({"position":"fixed","bottom":0})}else{$("#footer_banner").css({"position":"fixed","bottom":0})}});});
//]]>
</script>
{/literal}