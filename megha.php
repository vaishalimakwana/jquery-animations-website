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
				<img src="images/megha_img.png"/>
			</div>	
			<div class="TeamInfoContent">
				<h2 class="InfoHeading">Dr. Megha Shah</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">She graduated in the year 2017. Calm, measured, reliable and polite, her quirky humour shines through in her witty comebacks, some said and some (thankfully) unsaid. <br><br>

Along with her graduation in the field of homeopathy, she has also done her Post Graduation Diploma In Emergency Medical Services as well as a Diploma Course in Clinical Nutrition &amp; Health, helping her evolve as a holistic physician in her tenure of practice. <br><br>

Organized and systematic, she follows things carefully to the end and is an essential ingredient for coordinating effective patient care in the clinic. She will, without a thought, go that extra mile to get the patients the care they need. <br><br>

She loves her work as much as she likes her shot of caffeine while doing the remedy research, which makes her eyes light up. The crazy side of this determined Capricorn, shows up in her favourite Matte red lipstick and also when she reads zodiac signs to us, her excitement and passion for predicting our day, would put Bejan Daruwala in a shade. <br><br>

It is only her dedication to reach perfection in the practise of homeopathy that makes her wake up early (which she hates) and do the dreaded commute to reach the clinic on time (which she never does).


 

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
