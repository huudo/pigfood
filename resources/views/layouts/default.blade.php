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
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href={{Asset('public/css/normalize.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/jcarousel.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/owl.carousel.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/owl.transitions.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/jgrowl.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/style.css')}}>
<link rel="stylesheet" type="text/css" href={{Asset('public/css/res-style.css')}}>
<link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css' />

<script type="text/javascript" src={{Asset('public/js/cycle.js')}}></script>
<script type="text/javascript" src={{Asset('public/js/cycle.js')}}></script>
<script type="text/javascript" src={{Asset('public/js/mousewheel.js')}}></script>

<script type="text/javascript" src={{Asset('public/js/jquery213.js')}}></script>
<script type="text/javascript" src={{Asset('public/js/jgrowl.js')}}></script>
             
<noscript><iframe height='0' width='0' style='display:none;visibility:hidden' src='/visit/record.gif?p=%2f&r=&s=dgviajbsmtneeehn12sp30q3'></iframe></noscript>

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