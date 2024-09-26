<?php include 'headertop.php';?>

<body class="GreyBg DesktopHidden">
	
	<div class="menu MobileShow">
	  <?php include 'header.php';?>

	</div>
	<div class="posrelative welcomeBox" style="opacity: 0;">
		<div class="InnerContainer">
			<div class="FlexBox">
			<div class="ImgBox">
				<img src="images/intro_img.png"/>
			</div>	
			<div class="IntroContent">
			<p>If you are looking for, <br>
That moment in time;<br>
When you are more,<br>
Than you ever thought you<br>
 could be.<br><br>
		<a href="home.php" class="EnterClinic DesktopShow">ENTER CLINIC</a>
  				
		</p>
			
			</div>
			</div><!--FlexBox ends here-->	
			
		</div><!--InnerContainer ends here-->
	</div><!--GreyBg ends here-->
	   
<?php include 'loader.php';?>
<script type="text/javascript" src="js/jquery.js"></script>
	
<script>
(function($) {

	//"use strict";
	
	$WIN = $(window);
	
/* Preloader 
	 * -------------------------------------------------- */
	var ssPreloader = function() {

		$WIN.on('load', function() {	

			// force page scroll position to top at page refresh
			$('html, body').animate({ scrollTop: 0 }, 'normal');

	      // will first fade out the loading animation 
	    	$("#loader").fadeOut("slow", function(){
			$('body > div').removeClass('fadeInUp');	
			$('body > div').removeClass('animated');	
	        // will fade out the whole DIV that covers the website.
	        $("#preloader").delay(300).fadeOut("slow");
			 $(".menu").fadeIn(100);
			 $(".welcomeBox").animate({opacity: '1'});	

	      }); 
	  	});
	}; 
	(function ssInit() {

		ssPreloader();
		

	})();
})(jQuery);	
</script>
	
</body>
</html>
