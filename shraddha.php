<?php include 'headertop.php';?>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			<div class="ImgBox">
				<img src="images/shraddha_img.png"/>
			</div>	
			<div class="TeamInfoContent">
				<h2 class="InfoHeading">Dr Shraddha Kedia</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">Since her graduation in 2010 she has put her heart and soul in the practise of Homeopathy. She is one of the senior most doctors on the team. And juggles her time with her own flourishing practise and the ever increasing demands at our clinic with admirable ease. 
Efficiency, diagnostic acumen and precise homeopathic case taking are a given.<br><br>

What often makes her stand apart is her speed. You will see her often walking from one room to the other with a swift gait and a rapid speech which are only attempting to keep pace with her brilliant mind. <br><br>
The rapidity of her thought chain allows her to multitask and yet absorb every iota of information given by the patient. This is backed up by a sharp memory recall that sometimes puts our computer hard drive to shame. <br><br>

Her abiding fascination for the human nature causes her to devour books on psychology . 
This with her innate ability of lateral thinking allows her to sidestep the emotion, the intellect and explore the unconscious. 
Crisp yet sympathetically warm, motherly scolding yet youthful bubbliness mirrors her diet. Crisp chips, terrible sour candies on one side and yet corn, fruits and salad on the other side. <br><br>

This portrait of her is incomplete without her bright, warm colours she fills in the background of the beautiful canvases she creates. <br><br>
 Contact: <a href="mailto:shraddha.kedia1986@gmail.com"><strong>shraddha.kedia1986@gmail.com</strong></a>
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
			"border-radius":"15px;"
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
