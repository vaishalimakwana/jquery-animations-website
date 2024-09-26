<?php include 'headertop.php';?>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			
			<div class="SeminarsContent">
				<h2 class="InfoHeading">Join us in Mumbai!</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">
					<div align="center"><img src="images/ocean.jpg"/></div><br>
					It is time to uncover the state in the unconscious and <strong>cure it with the perfectly chosen Similimum.</strong><br><br>

Let’s gear up to <strong>Leap to the Similimum,</strong> to transform the health of the patients and to propel us on the path to reach the beyond and explore the unconscious.<br><br> 

Do join us with Dr.Divya Chhabra, at <strong>‘The Other Song’</strong>, as we discover the method to reach that bull’s eye remedy and take healing to a whole new level. 
<br><br>
Leap and Be Empowered!!<br>
<strong>Dates: 4th and 5th May, 2019.</strong><br>
<strong>Eligibility: Students and Practicing Homeopaths.</strong><br><br>


If interested, please contact at <a href="mailto:drdivyaclinic@gmail.com"  class="addhover"><strong>drdivyaclinic@gmail.com</strong></a> 
<br><br>
To hear Dr.Divya, speak about the method click on the link below.<br>    
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
