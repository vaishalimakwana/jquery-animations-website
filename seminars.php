<?php include 'headertop.php';?>

<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />

<body class="GreyBg">

	

	<div class="menu">

		<?php include 'header.php';?>



	</div>



		<div class="InnerContainer">

			

			

				<h2 class="MainHeading">Seminars</h2>

				<div class="SeminarMap posrelative">

					<div id="flag1" class="flagimg posabsolute">
						<a href="toronto-seminar.php"  data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">

							<div>Toronto<span>06-08 Mar 2020</span></div>

						</a>
						

					</div>

					<div id="flag2" class="flagimg posabsolute">

						<a href="mumbai-seminar.php"  data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">

							<div>Mumbai<span>04-05 May 2019</span></div>

						</a>

					</div>

					<div id="flag3" class="flagimg posabsolute">

						<a href="newyork-seminar.php"  data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">

							<div>New York<span>04-06 Oct 2019</span></div>

						</a>

					</div>

					<div id="flag4" class="flagimg posabsolute">

						
						<a href="moscow-seminar.php"  data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">

							<div>moscow<span>18-20 April 2019</span></div>

						</a>	
					</div>

				</div>

			



		

		</div><!--InnerContainer ends here-->



<?php include 'loader.php';?>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/loader.js"></script>			

	

<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>			



<script type="text/javascript">

		$(document).ready(function(){	

		

	

	$(".fancybox-effects-c").fancybox({

				wrapCSS    : 'fancybox-custom',

				closeClick : true,



				openEffect : 'none',



				helpers : {

					title : {

						type : 'inside'

					},

					overlay : {

						css : {

							'background' : 'rgba(210, 209, 209, .96)'

						}

					}

				}

			});

			

	 

		});



</script>

</body>

</html>

