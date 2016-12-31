<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<head>
	<title>FullBloom</title>
	<?php include('../inc/head.php');?>
</head>

<body>

<!-- Page Loader -->
<div id="loader-wrapper">
	<div id="loader"></div>
</div>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header
================================================== -->
<div id="header-container" data-background="<?php echo BASEDIR_FR; ?>/images/contact-parallax-02.jpg" data-color="#303133" data-color-opacity="0.4">
	
<?php include(dirname(__DIR__).'/inc/header.php');?>

</div>

<!-- Titlebar
================================================== -->
<div id="titlebar" class=" margin-bottom-0  centered">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Parlons ensemble de votre projet</h2>
			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>



<!-- Contact
================================================== -->

<!-- Image Edge -->
<div class="image-edge fullscreen left margin-top-0 margin-bottom-10" >

	<div class="image-edge-content">
		<h3 class="margin-bottom-25">Contact</h3>
		<p>Qu'il s'agisse d'une vraie question ou simplement pour nous dire bonjour, n'hésitez pas à nous envoyer un petit mot ! Dans le language de votre choix.</p>

		<div class="sidebar-textbox">
			<ul class="contact-details">
				<li><i class="ln ln-icon-Phone-2"></i> <strong>Téléphone:</strong> <span>+33 (0) 1 78 42 35 17</span></li>
				<li><i class="ln ln-icon-Globe"></i> <strong>Mail:</strong> <span>contact@fullbloom.io</span></li>
			</ul>
		</div>
	</div>

	<div class="edge-bg with-map">
		<!-- Google Maps -->
		<div class="google-map-container">
			<div id="googlemaps" class="google-map google-map-full"></div>
		</div>
		<!-- Google Maps / End -->
	</div>

</div>
<!-- Image Edge / End -->
    
    <!-- Container / Start -->
<div class="container">

	<div class="row">

		<!-- Contact Form -->
		<div class="col-md-8 col-md-offset-2">

			<section id="contact">
				<h3 class="headline centered margin-bottom-45">Plus qu'un clic</h3>

				<div id="contact-message"></div> 

					<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Votre Nom" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Objet" required="required" />
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit button border center margin-top-10" id="submit" value="Envoyer votre message" />

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->




<!-- Footer
================================================== -->
<?php include(dirname(__DIR__).'/inc/footer.php'); ?>


<!-- Scripts
================================================== -->
<?php include('../inc/scripts.php'); ?>

<!-- Google Maps -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBENlIxSKmTEK2fJeKjKo_JMxC9jE2IkL4"></script>

<script type="text/javascript">
	(function($){
		$(document).ready(function(){

			$('#googlemaps').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 13,
				markers: [
					{
						address: 'Paris, 36 rue Marbeuf', // Your Adress Here
						html: '<strong>Adelius</strong><br>36 rue Marbeuf</br>Paris, 75008 ',
						popup: false,
			            icon: {
			                image: "images/map-icon.png",
			                iconsize: [41, 53],
			                iconanchor: [20,53]
			            }
					}
				],
                
                styles:
				[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			});

		   });

	})(this.jQuery);
</script>



</div>
<!-- Wrapper / End -->

</body>
</html>