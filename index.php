<?php

include 'header.php';

?>
	<div class="banner">
		<div class="container">
			<div class="w3ls_logo">
				<h1><a href="index.php">..Cafeterian..</a></h1>
			</div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_info">
								<h3>Cafeteria-style education, combined with the unwillingness of our schools to place demands on students, has resulted in a steady diminishment of commonly shared information between generations and between young people themselves.</h3>
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
								<h3>User a platform that significantly reduces the time and energy</h3>
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
								<h3>Its users an access to vast pool of knowledge, literature and research content on livestock</h3>
							</div>
						</li>
						
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
<!-- //banner -->

<?php

include 'footer.php';

?>