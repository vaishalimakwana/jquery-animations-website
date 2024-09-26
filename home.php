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
	
	
</head>

<body style="overflow: hidden;">
	
	<div class="menu">
	<?php include 'header_home.php';?>
		
	</div>
	<div id="Homepage" class="posrelative GreyBg">
		<img src="images/clinic3.jpg" class="posrelative"/>
		<div id="chair" class="posabsolute"> <img src="images/chair.png" /></div>
		<div id="door1hover"></div><div id="door2hover"></div><div id="door3hover"></div><div id="door4hover"></div>
		<div class="door1 posabsolute opendoor">
			<img src="images/door1_active.png" class="GreyStyl"/>
			
		</div>
		<div class="door2 posabsolute opendoor">
			<img src="images/door2_active.png" class="GreyStyl" />
		</div>
		<div class="door3 posabsolute opendoor">
			<img src="images/door3_active.png" class="GreyStyl"/>
		</div>
		<div class="door4 posabsolute opendoor">
			<img src="images/door4_active.png" class="GreyStyl"/>
		</div>
	</div><!--Homepage ends here-->
	
	
<?php include 'loader.php';?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/loader.js"></script>	
<script type="text/javascript">

$(document).ready(function(){
 /* $("#door1hover").hover(function(){
    $(".door1 img").attr("src", 'images/door1_active.png');	 
  	}, function(){
	$(".door1 img").attr("src", 'images/door1.png');  
  });
  $("#door2hover").hover(function(){
    $(".door2 img").attr("src", 'images/door2_active.png');	 
  	}, function(){
	$(".door2 img").attr("src", 'images/door2.png');  
  });
  $("#door3hover").hover(function(){
    $(".door3 img").attr("src", 'images/door3_active.png');	 
  	}, function(){
	$(".door3 img").attr("src", 'images/door3.png');  
  });
  $("#door4hover").hover(function(){
    $(".door4 img").attr("src", 'images/door4_active.png');	 
  	}, function(){
	$(".door4 img").attr("src", 'images/door4.png');  
  });*/
	 $('#MeetDrDivya').hover(function(){
		 $('.door3 img').toggleClass('ClrGreyStyl');
	 });
	 $('#ReachUs').hover(function(){
		 $('.door4 img').toggleClass('ClrGreyStyl');
	 });

	 $('#ForDoctors').hover(function(){
		 $('.door2 img').toggleClass('ClrGreyStyl');
	 });
	$('#ForPatients').hover(function(){
		 $('.door1 img').toggleClass('ClrGreyStyl');
	 });
	 $('#door2hover, #ForDoctors').click(function(){
		 $('.door2 img').addClass('ClrGreyStyl');	 
		 $('.door2').addClass('opendoor2');
		 setTimeout(function(){
			window.location.replace("seminars.php");
		 },500);
	 });
	 $('#door1hover, #ForPatients').click(function(){
		;
		 $('.door1 img').addClass('ClrGreyStyl');
		 $('.door1').addClass('opendoor1');
		 setTimeout(function(){
			window.location.replace("forpatients.php");
		 },800);
	 });
	 $('#door3hover, #MeetDrDivya').click(function(){
		 $('.door3 img').addClass('ClrGreyStyl'); 
		 $('.door3').addClass('opendoor3');
		 setTimeout(function(){
			window.location.replace("ourteam.php");
		 },1000);
	 });
	 $('#door4hover, #ReachUs').click(function(){
		 $('.door4 img').addClass('ClrGreyStyl');	 
		 $('.door4').addClass('opendoor4');
		 setTimeout(function(){
			window.location.replace("reachus.php");
		 },500);
	 });
	
	
	 $('#door4hover').hover(function(){
	    $('#ReachUs a').css('border-bottom','2px solid #b0371c');
	 },function(){
		  $('#ReachUs a').css('border-bottom','2px solid transparent'); 
	  });
	 $('#door3hover').hover(function(){
		 $('#MeetDrDivya a').css('border-bottom','2px solid #b0371c');
		 $('#MeetDrDivya').find('ul.dropdown').show();
	 },function(){
		 $('#MeetDrDivya a').css('border-bottom','2px solid transparent');
		 $('#MeetDrDivya').find('ul.dropdown').hide();
	  });
	 $('#door2hover').hover(function(){
		 $('#ForDoctors a').css('border-bottom','2px solid #b0371c');
		 $('#ForDoctors').find('ul.dropdown').show();
	 },function(){
		 $('#ForDoctors a').css('border-bottom','2px solid transparent');
		 $('#ForDoctors').find('ul.dropdown').hide();
	  });
	 $('#door1hover').hover(function(){
		 $('#ForPatients a').css('border-bottom','2px solid #b0371c');
		 $('#ForPatients').find('ul.dropdown').show();
	 },function(){
		 $('#ForPatients a').css('border-bottom','2px solid transparent');
		 $('#ForPatients').find('ul.dropdown').hide();
	  });
	
});
</script>	
</body>
</html>
