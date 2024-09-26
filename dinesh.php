<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<title>Dr Divya Chhabbra</title>
	<meta name="author" content="Dr Divya Chhabbra"/>
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow"/>
	
	<meta property="og:title" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:url" content="http://www.drdivyaclinic.com"/>   
	
	<link rel="shortcut icon" href="images/favicon.png"/>
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>	
	<link rel="stylesheet" type="text/css" href="css/simple-scrollbar.css"/>

	
</head>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			<div class="ImgBox">
				<img src="images/dinesh_img.png"/>
			</div>	
			<div class="TeamInfoContent">
				<h2 class="InfoHeading">Dinesh Damale</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">Also known as the “ meetha goli uncle”.You will often see our kiddy  patients queuing up, for the “meetha goli” coaxing him to give it to them.Has a knack with children which makes him famous in the clinic.<br><br>

His sudden witty remarks said with a perfectly straight face would make him a strong contender against even the best stand up comedian. <br><br>

Unfazed by the mountain of files, he handles appointments, patients, couriers and finding even the hidden rare medicines with a deceptive ease. <br><br>

When Dr. Divya is on leave, everything functions perfectly but when Dinesh is on leave everyone goes into a panic mode. 
He has a sensitive nature and abiding love for animals. The loss of our fish in the fish tank still affects him deeply.
His magic is the secret ingredient in the tea and the coffee he brews without which  our day cannot start.

 

</div>
			</div>
			</div><!--FlexBox ends here-->	
		
	</div><!--GreyBg ends here-->
	
	
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scrollbot.min.js"></script>
<script>
//var normal = new scrollbot("#demo");
$(document).ready(function(){	
	var customScrolls = [];

		//var custom1 = new scrollbot(".custom-scroll-1");

		custom2 = new scrollbot(".custom-scroll-2",10).setStyle({
			"background":"#0b0400",
			"z-index":"2",
			"border-radius":"15px"
		},{
			"background":"rgba(0,0,0,0)"
		});
		var psuedo = document.createElement("div");
		psuedo.style.cssText = "height:100%;width:10px;left:0px;background:#c5c5c5;position:absolute;z-index:1;border-radius:15px";
		custom2.scrollBarHolder.appendChild(psuedo);
		
	
		document.onreadystatechange = function(){
			custom2.refresh();

		}
});
</script>	
</body>
</html>
