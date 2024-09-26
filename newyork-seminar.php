<?php include 'headertop.php';?>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			
			<div class="SeminarsContent">
				<h2 class="InfoHeading">Join us in New York!</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">
					<div align="center"><img src="images/sketch.jpg"/></div><br>
					  <strong> Leap to the Similimum</strong> - with <strong>Dr.Divya Chhabra</strong> in October 2019.<br><br>
					
					  

The highest ideal of cure occurs only when the remedy given is the Similimum to the <strong>hidden state in the unconscious.</strong><br><br>
When the remedy matches to the apparent state in the conscious, the patient may improve mentally, but the pathology stays the same, or vice versa. <br><br>
If this is your experience, or after giving a remedy the improvement reaches a certain point and frustratingly stops, then come and open the <strong>doors to the unconscious.</strong>
<br><br>


Contact us at <a href="mailto:susansonz@gmail.com"  class="addhover"><strong>susansonz@gmail.com</strong></a> 
<br><br>
Further Details coming soon...<br><br>
To hear Dr.Divya, speak about the method click on the link below.  <br>   
   
<a href="https://www.youtube.com/watch?v=x2ZP6keD8j0" class="addhover" target="_blank"><strong>www.youtube.com/IntroductionbyDrDivya</strong></a>         

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
