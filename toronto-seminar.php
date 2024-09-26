<?php include 'headertop.php';?>

<body style="background-color: transparent;background-image:none !important;">
	
<!--<a href="javascript:parent.jQuery.fancybox.close();">X</a>-->
	<div class="posrelative">
	
			<div class="FlexBox2">
			
			<div class="SeminarsContent">
				<h2 class="InfoHeading">Join us in Toronto!</h2>
				<div id="demo" class="custom-scroll custom-scroll-2">
					 
					<div align="center"><img src="images/archeryboard.jpg"/></div><br>
					  
The stories, delusions, emotions are where we get stuck and stay in the conscious realm, often prescribing a partial similimum. At this seminar in Toronto, learn the refined method to leap and get to <strong>Bull's Eye Similimum.</strong><br><br>
<strong>'Leap to the Similimum'</strong> takes a <strong>quantum leap</strong>, beyond the conscious mind into the <strong>unconscious</strong>, where lies the <strong>state.</strong><br><br>
Let us leap together at the <strong>University of Toronto</strong> from <strong>22nd March to 24th March, 2019.</strong> 

<br><br>


Contact us at <a href="mailto:jaynemarquis@me.com"  class="addhover"><strong>jaynemarquis@me.com</strong></a> 
<br><br>
Dr.Leslie Scott (Toronto) shares  "I have just spent several weeks with Dr.Divya in her clinic. I am amazed at how she has revised her technique to keep the patient in experience. It is truly astounding how the patient's hand you the remedy. You really don't want to miss this!"    
 <br><br> 
To hear Dr.Divya, speak about the method click on the link below.     <br>
					
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
