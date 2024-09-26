<?php include 'headertop.php';?>
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />
<body>
	
	<div class="menu">
	   <?php include 'header.php';?>
	
	</div>
	<div class="posrelative GreyBg2">
		<div class="addPadding">
			
			<div class="TeamWrapper">
				<h2 class="MainHeading">Our Team</h2>
				<div class="TeamImg">
					<img src="images/teamimg.png"/>
				</div>
				<div class="TeamInfoTopBg">
				<div class="TeamInfo">
					<p>
						Diverse individuals that come together to form a unified whole.<br>
Linear thinkers and lateral thinkers, messy and  fastidious, steady and rapid, tea and coffee, quick wit and serious, foodies and<br> fasters, junk foodies and health freaks, dyslexics and spell checkers; together smoothen each other’s rough edges and come to a<br> healthy equilibrium.
					<a href="#TeamDet" class="readmore posabsolute">Read more...</a>
					</p>
				</div><!--TeamInfo ends here-->
					<div class="TeamInfoBtmBg"></div>
				</div><!--TeamInfoTopBg ends here-->
				<div id="TeamDet" class="TeamMembersBox FlexBox">
					<div>
						<a href="shraddha.php"  data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/img1active.png" />
						<div class="team-member-name">Dr. Shraddha Kedia</div>
						</a>	
					</div>
					<div>
						<a href="khyati.php" data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/khyati_thumb.png" />
						<div class="team-member-name">Dr. Khyati Kapoor</div>
						</a>	
					</div>
					<div>
						<a href="dinesh.php" data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/dinesh_thumb.png" />
						<div class="team-member-name">Dinesh Damale</div>
						</a>	
					</div>
				</div><!--FlexBox ends here-->
				<div class="TeamMembersBox FlexBox">
					<div>
						<a href="megha.php" data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/megha_thumb.png" />
						<div class="team-member-name">Dr. Megha Shah</div>
						</a>	
					</div>
					<div>
						<a href="heta.php" data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/heta_thumb.png" />
						<div class="team-member-name">Dr Heta Pasad</div>
						</a>	
					</div>
					<div>
						<a href="vanilla.php" data-fancybox-group="thumb" class="fancybox-effects-c fancybox.iframe">
						<img src="images/vanila_thumb.png" />
						<div class="team-member-name">Vanilla</div>
						</a>	
					</div>
				</div><!--FlexBox ends here-->
			</div><!--TeamWrapper ends here-->
			
		</div><!--InnerContainer ends here-->
	</div><!--GreyBg ends here-->
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
	jQuery(document).ready(function(){
		jQuery(document).on('click', 'a.readmore[href^="#"]', function (event) {
			event.preventDefault();

			jQuery('html, body').animate({
				scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top - 100
			}, 800);
		});	
	});
</script>	

</body>
</html>
