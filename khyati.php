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
				<img src="images/khyati_img.png"/>
			</div>	
			<div class="TeamInfoContent">
				<h2 class="InfoHeading">Dr Khyati Kapoor</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">She graduated with a homeopathic degree in the year 2015. While honing this degree with practical experience, she is also trained to be a certified Diabetes Educator. Over the last 3 years she is also steadily building her own practice.<br><br>
She is extremely skilled in advising yoga techniques to help hasten the cure process in various ailments.
She is well known for her patience and meticulousness in getting down to every little detail of what the patient is going through.<br><br>

Diligence, responsibility and organization are her best qualities, but do not get deceived by her serious mannerism; it gets quickly replaced with a mischievous smile especially when interacting with our cute baby patients.<br><br>

Naturally sympathetic by temperament, the bridge from sympathy to empathy was a challenge for her.
Beware! her concern for the environment makes her militant in the face of wastage.<br><br>

Last but not the least, Homeopathy is not the only ‘magic’ she excels in. Say the word ‘Harry Potter!’ and watch her eyes twinkle.<br><br>
Contact Details:  <a href="mailto:khykapoor@gmail.com"><strong>khykapoor@gmail.com</strong></a>
 

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
