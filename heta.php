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
				<img src="images/heta_img.png"/>
			</div>	
			<div class="TeamInfoContent">
				<h2 class="InfoHeading">Dr.Heta Pasad</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">Clickety clack her fingers run quickly on the computer as she amazingly keeps speed with the rapid fire question- answer, that Dr Divya employs sometimes especially in follow ups. <br><br>

The tech savvy one amongst us, her favourite “big heavy laptop” (the iron man) is her constant companion. <br><br>

She is a person of great depth, but of few words; only the toddler patients can make her talkative, with sweet flowing babytalk and a dimple peeping through. <br><br>

Her mid day work blues can only be tamed with the most vital cup of her chai that helps her drive through an afternoon case and keeps her mind on toes and fingers on tips thereby allowing  her lightening typing speed.<br><br>

She is also blessed with a vocal tone that mimics Dr Khyati’s tone., which sometimes creates a comedy of identity errors on phone with the patients. <br><br>

Along with all this she is also a dedicated student thereby pursuing her higher studies( MD In Organon Of Medicine ) after graduating with a BHMS degree in 2016, along with her own homeopathic - practice.



 

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
