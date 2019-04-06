<?php get_header();
?>


<div class="page-slideshow" data-animation="fade" data-autoplay="true" data-autoplayspeed="3000" data-speed="550">
	<div class="slick-slide">
		<div class="page-jumbotron"
			style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/hero01.jpg); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="jumbo-title">Your Rooms</h2>
						<p class="jumbo-subtitle">Single & Double Rooms
							Westbourne - Available immediately!</p>

						<a href="#" class="btn">Explore </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="slick-slide">
		<div class="page-jumbotron"
			style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/hero02.jpg); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="jumbo-title">The room is fully furnished .</h2>
						<p class="jumbo-subtitle">Single & Double Rooms
							Westbourne - Available immediately!</p>

						<a href="#" class="btn">Explore </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="slick-slide">
		<div class="page-jumbotron"
			style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/hero03.jpg); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="jumbo-title">Single & Double Rooms
							Southbourne - Available immediately.</h2>
						<p class="jumbo-subtitle"> The room is fully furnished
							All rooms partly en-suite with own toilet and the sink</p>

						<a href="#" class="btn">See More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main class="main widget-sections">
	<section class="widget-section">
		<div class="widget-wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="section-title">The best experience ever.</h3>

						<div class="row">
							<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-xs-12">
								<blockquote class="section-testimonial">
									<p>Would recommended it to everyone. We got married in , and stayed at Resort, and
										it was a dream come true.</p>

									<cite>Peter Daniel &ndash; Travel Magazine</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
					<div class="container">
						<div class="row ">
							<div class="btn-group text-center">
								<a href="/wordpressTebim/pokoje/ogrod/" class="btn">Bourne</a>
								<a href="/wordpressTebim/pokoje/plaza/" class="btn">Bourne</a>
								<a href="/wordpressTebim/pokoje/pool/" class="btn">Bourne</a>
							</div>
						</div>
					</div>	<section class="widget-section widget-padded widget_ci-items">
		<div class="widget-wrap" style="background-color: #f9f9f9;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="section-title">Our Rooms.</h3>
						<p class="section-subtitle"> or Melos is a volcanic Greek island in the Aegean Sea, just north
							of the Sea of Crete.</p>
						<div class="row row-items">
							<!-- THUMBNAIL WITH ROOMS FOTOS -->
							<?php
															// example args
															$args = array('posts_per_page' => 3);
															//  the query
															$the_query = new WP_Query($args);
															?>
							<?php if ($the_query->have_posts()): ?>

							<!-- start of the loop -->
							<?php while ($the_query->have_posts()): $the_query->the_post();?>

							<div class="col-lg-4 col-xs-12">
								<a href="<?php the_permalink();?>">
									<article class="item">
										<div class="item-thumb">
											<!-- Getpos thumbnail Image -->
											<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
											<!-- IMG url -->
											<img src="<?php echo $url ?>" />
								</a>
							</div>
							<a href="<?php the_permalink();?>"
									style="color: #fff; text-shadow: 0px 0px 22px black;">
							<h4 class="item-title">

									<?php the_title();?>
									<br>


										<span class="btn btn-sm"><?php the_field('room_price'); ?> / week</span>

								</a>
							</h4>
							<!-- <?php the_excerpt();?> -->
							</article>
						</div>
						<?php endwhile;?>
						<!-- end of the loop -->

						<!-- put pagination functions here -->
						<?php wp_reset_postdata();?>

						<?php else: ?>

						<p><?php _e('Sorry there is no room at the moment');?></p>

						<?php endif;?>
						<h3 class="section-title"><a href="/wordpressTebim/pokoje/wszystkie/" class="btn">All rooms</a></h3>

					</div>

				</div>
			</div>
		</div>
		</div>




	</section>
	<div style="position:relative">
		<div class="lol" style="height: 130px; width: 100vw; background: linear-gradient(to bottom, rgb(249, 249, 249) 0%, #ffffff00 100%);z-index: 2; top: 0px; position: absolute;"></div>
		<div id="map" style="height: 700px; width:100%;">
		</div>
	</div>
	<!-- BUTTONS FOR DISABLING MARKERS -->
	<input class="Poole" onclick="togglePoole();" type=button value="Hide Poole">
	<input class="Bourne" onclick="toggleBourne();" type=button value="Hide Bourne">
	<input class="Park" onclick="togglePark();" type=button value="Hide Park">


	<script>







		// on load init map
		function initMap() {
			//  location of kalisz
			var kalisz = { lat: 51.7506518, lng: 18.0736309 };
			var kalisz2 = { lat: 51.7406518, lng: 18.0936309 };
			var kalisz3 = { lat: 51.7706518, lng: 18.0336309 };

			// map centered at kalisz
			var map = new google.maps.Map(
				document.getElementById('map'), {
					zoom: 12,
					center: kalisz,
					styles: [{ "featureType": "all", "elementType": "labels", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "all", "elementType": "labels.text", "stylers": [{ "color": "#444444" }] }, { "featureType": "administrative.country", "elementType": "all", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "administrative.country", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "administrative.province", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative.locality", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": "-100" }, { "lightness": "30" }] }, { "featureType": "administrative.neighborhood", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative.land_parcel", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "gamma": "0.00" }, { "lightness": "74" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#e4295d" }, { "saturation": "-15" }, { "lightness": "40" }, { "gamma": "1.25" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "labels", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "transit", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [{ "color": "#e4295d" }, { "lightness": "80" }] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [{ "color": "#e5e5e5" }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#efefef" }] }, { "featureType": "water", "elementType": "labels", "stylers": [{ "visibility": "off" }] }]
				});
			// marker on center
			var marker = new google.maps.Marker({ position: kalisz, map: map });


			kalisz = new google.maps.LatLng(51.79109, 18.01102);
			var marker2 = new google.maps.Marker({
				position: kalisz2,
				title: "Hello World!"
			});
			var marker3 = new google.maps.Marker({
			position: kalisz3,
			map: map,
			title: 'Kalisz (sdertghre)'
			});

			// To add the marker to the map, call setMap();
			marker.setMap(map);
			marker2.setMap(map);
			marker3.setMap(map);

			marker2.addListener('click', function() {
			infosWindowS[0].open(map, marker2);
			});
			marker.addListener('click', function() {
			infosWindowS[1].open(map, marker);
			});
			marker3.addListener('click', function() {
			infosWindowS[2].open(map, marker3);
			});


			// info for popups
			var popupContent = ['0000000', 'qwertyu', 'wlknfgoi3']
			// not decalred container for popups
			var infosWindowS = [];

			for (var i = 0; i < 3; i++) {
				infosWindowS[i] = new google.maps.InfoWindow({
					content: popupContent[i]
				});
			};
			// setTimeout(function () {
			// 		marker.setMap(null);
			// 		marker2.setMap(null);
			// 		marker3.setMap(null);
			// }, 4000);
		}









		// // Empty VARs too fillup later
		// var markers = [];
		// var map;


		// 				//function to initiate MAP with local VAR coordinates
		// function initMap(){
		// 	//Kalisz coordinates
		// 	var kalisz = {lat: 51.7506518, lng: 18.0736309 };
		// 	var map = new google.maps.Map(
		// 		document.getElementById('map'), {
		// 					zoom: 14,
		// 				// center get coordinates from VAR KALISZ
		// 				center: kalisz,
		// 			styles: [{"featureType": "all", "elementType": "labels", "stylers": [{"visibility": "simplified" }] }, {"featureType": "all", "elementType": "labels.text", "stylers": [{"color": "#444444" }] }, {"featureType": "administrative.country", "elementType": "all", "stylers": [{"visibility": "simplified" }] }, {"featureType": "administrative.country", "elementType": "geometry", "stylers": [{"visibility": "simplified" }] }, {"featureType": "administrative.province", "elementType": "all", "stylers": [{"visibility": "off" }] }, {"featureType": "administrative.locality", "elementType": "all", "stylers": [{"visibility": "simplified" }, {"saturation": "-100" }, {"lightness": "30" }] }, {"featureType": "administrative.neighborhood", "elementType": "all", "stylers": [{"visibility": "off" }] }, {"featureType": "administrative.land_parcel", "elementType": "all", "stylers": [{"visibility": "off" }] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"visibility": "simplified" }, {"gamma": "0.00" }, {"lightness": "74" }] }, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#ffffff" }] }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off" }] }, {"featureType": "road", "elementType": "geometry", "stylers": [{"visibility": "simplified" }, {"color": "#e4295d" }, {"saturation": "-15" }, {"lightness": "40" }, {"gamma": "1.25" }] }, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off" }] }, {"featureType": "transit", "elementType": "labels", "stylers": [{"visibility": "simplified" }] }, {"featureType": "transit", "elementType": "labels.icon", "stylers": [{"visibility": "off" }] }, {"featureType": "transit.line", "elementType": "geometry", "stylers": [{"color": "#e4295d" }, {"lightness": "80" }] }, {"featureType": "transit.station", "elementType": "geometry", "stylers": [{"color": "#e5e5e5" }] }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#efefef" }] }, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "off" }] }]
		// 			});
		// 	var marker = new google.maps.Marker({position: kalisz, map: map});

		// 			addMarker(kalisz);

		// }

		// function addMarker(location) {
		// 	var marker = new google.maps.Marker({
		// 	// grabing LatLng from LOCATION
		// 	position: location,
		// 	map: map
		// 	});
        // markers.push(marker);
		// }


		// // on or off
		// function Park(){
		// 	// addEventListener(.click)
		// }
		// // on or off
		// function Bourne(){

		// }
		// // on or off
		// function Poole(){

		// }

















	</script>
	<!-- Below google api key -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsOcdCh2aEGIkKu3HGnf2VwstRw8a_IeE&amp;callback=initMap">
    </script>














	<section class="widget-section widget_ci-items">
		<div class="widget-wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="section-title">From Our location.</h3>
						<p class="section-subtitle"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum
							magni, laboriosam soluta labore, eos, impedit minus corrupti earum distinctio tempora
							numquam architecto repellat dolore nisi quis? Unde repellat aut quibusdam!</p>

						<div class="row row-items">
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery01.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery01.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery02.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery02.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery03.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery03.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery04.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery04.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery05.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery05.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6">
								<div class="item">
									<figure class="item-thumb">
										<a href="<?php echo get_bloginfo('template_directory'); ?>/img/gallery06.jpg"
											class="ci-lightbox">
											<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gallery06.jpg"
												alt="">
										</a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="widget-section widget-padded widget_ci-hero">
		<div class="widget-wrap"
			style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/hero_bg.jpg); background-size: cover; background-attachment: fixed">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="section-title">Cum magni, laboriosam soluta labore, eos,</h3>
						<p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero odit
							sint, tempora id fuga architecto molestias dolore ducimus blanditiis consequuntur obcaecati,
							necessitatibus quam facere? Corporis quas dolor sunt facere optio?</p>

						<a href="#" class="btn">Our Menu</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php get_footer(); ?>
