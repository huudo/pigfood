<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="9211v6IrzwDO4vs4jLFn2sUg_44PugO_hMMIfQeur00" />
    <meta charset="UTF-8">
    <title>
        noithatthoinay
        
        
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     
    <meta name="description" content=""> 
     
    
        <link rel="shortcut icon" href="//bizweb.dktcdn.net/100/022/286/themes/28873/assets/favicon.png?1457574486889">
    
<link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap.min.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap-theme.min.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/font-awesome.min.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/normalize.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/jcarousel.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/owl.carousel.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/owl.transitions.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/jgrowl.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/style.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/res-style.css')}}>
<link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css' />

<script type="text/javascript" src={{Asset('public/js/jquery213.js')}}></script>
<script type="text/javascript" src={{Asset('public/js/jgrowl.js')}}></script>

<script>
var Bizweb = Bizweb || {};
Bizweb.store = 'noithatthoinay.bizwebvietnam.net';
Bizweb.theme = {"id":28873,"name":"DefaultTheme","role":"main","previewable":true,"processing":false,"created_on":"2015-10-15T03:22:11Z","modified_on":null}
Bizweb.template = 'index';
</script>

                <script>
                //<![CDATA[
                      (function() {
                        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                        s.src = '//bizweb.dktcdn.net/assets/themes_support/bizweb_stats.js?v=8';
                        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
                      })();

                //]]>
                </script>
<noscript><iframe height='0' width='0' style='display:none;visibility:hidden' src='/visit/record.gif?p=%2f&r=&s=dgviajbsmtneeehn12sp30q3'></iframe></noscript>

<script>
(function() {
function asyncLoad() {
var urls = [];
for (var i = 0; i < urls.length; i++) {
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = urls[i];
s.src = urls[i];
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);
}
}
window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
})();
</script>

<script type='text/javascript'>
(function() {
var log = document.createElement('script'); log.type = 'text/javascript'; log.async = true;
log.src = '//stats.bizweb.vn/delivery/22286.js?lang=vi';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(log, s);
})();
</script>

<!-- Google Tag Manager -->
<noscript>
<iframe src='//www.googletagmanager.com/ns.html?id=GTM-MS77Z9' height='0' width='0' style='display:none;visibility:hidden'></iframe>
</noscript>
<script>
(function (w, d, s, l, i) {
w[l] = w[l] || []; w[l].push({
'gtm.start':
new Date().getTime(), event: 'gtm.js'
}); var f = d.getElementsByTagName(s)[0],
j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
'//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-MS77Z9');
</script>
<!-- End Google Tag Manager -->



</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1727282974222089',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	@include('includes.header')
	<div id="main">
		 @yield('content')
	</div>
	@include('includes.footer')
</body>
</html>