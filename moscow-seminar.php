<?php include 'headertop.php';?>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			
			<div class="SeminarsContent">
				<h2 class="InfoHeading">Join us in Moscow!</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">
					<div align="center"><img src="images/swan.jpg"/></div><br>
					The <strong>reflection</strong> is blurred, <strong>the state</strong> itself is clear. Hence, prescribing on reflections has a higher chance of error, while prescribing on <strong>the state</strong> directly reduces this. The <strong>state</strong> is in the <strong>unconscious.</strong><br><br>

With the confluence of neuroscience, psychology and homeopathy, we reach the <strong>state</strong> and piece together its pieces, with clarity, precision and unprejudiced observation. <br><br>                                        
Change is the only constant.<br>
The <strong>'Leap to the Similimum'</strong> is an unique opportunity to grow and perfect your path to the Similimum.<br><br>

Let’s leap together to learn, share, grow and unitedly face the deadly critical onslaught at <strong>MOSCOW</strong> on <strong>18th, 19th &amp; 20th April, 2019.</strong>

Contact - Margarita Ashilhmina at <a href="mailto:ma@syshom.ru"  class="addhover"><strong>ma@syshom.ru</strong></a> 
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
