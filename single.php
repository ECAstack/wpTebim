<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<main class="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<article class="entry">
					<header class="entry-header">
						<h1 class="entry-title">
							<?php the_title(); ?>
						</h1>

						<div>
							<span class="author">Napisał <?php the_author(); ?></span>
							w <span class="time"><?php echo the_time('l, F jS, Y');?></span>
							w kategoriach<span class="category"><?php the_category( ', ' ); ?></span>.
							</em></p>
						</div>

						<div class="entry-meta">
							<p><?php the_field('room_header'); ?></p>
						</div>
					</header>

					<figure class="entry-thumb">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						?>
					</figure>

					<div class="entry-content">
						<div class="row">
							<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-xs-12">
								<p><?php the_content(); ?></p>

								<h2>Seasons</h2>

								<table>
									<tbody>
										<tr>room_price
											<th>Room</th>
											<th>High Season (21/6 &#8211; 30/8)</th>
											<th>High Season (21/6 &#8211; 30/8)</th>
										</tr>
										<tr>
											<td><a href="#">King&#8217;s Suite</a></td>
											<td>$<?php the_field('room_price'); ?> / day</td>
											<td>$<?php the_field('room_price1'); ?> / day</td>
										</tr>
										<tr>
											<td><a href="#">Queens&#8217;s Suite</a></td>
											<td>$<?php the_field('room_price2'); ?> / day</td>
											<td>$<?php the_field('room_price3'); ?> / day</td>
										</tr>
										<tr>
											<td><a href="#">Standard Suite</a></td>
											<td>$ <?php the_field('room_price4'); ?> / day</td>
											<td>$ <?php the_field('room_price5'); ?> / day</td>
										</tr>
									</tbody>
								</table>



								<p> <?php the_field('room_description'); ?></p>
							</div>
							<div class="entry-content">
								<div class="row">
									<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-xs-12">

										<p><?php the_field('room_description2'); ?></p>

										<h3>Gallery</h3>

										<div class="gallery gallery-columns-2 gallery-size-thumbnail">
											<figure class="gallery-item">
												<div class="gallery-icon">
													<a class="ci-lightbox" href="<?php the_field('room_image1'); ?>">
														<img src="<?php the_field('room_image1'); ?>" alt="">
													</a>
												</div>
											</figure>
											<figure class="gallery-item">
												<div class="gallery-icon">
													<a class="ci-lightbox" href="<?php the_field('room_image3'); ?>">
														<img src="<?php the_field('room_image2'); ?>" alt="">
													</a>
												</div>
											</figure>
											<figure class="gallery-item">
												<div class="gallery-icon">
													<a class="ci-lightbox" href="<?php the_field('room_image3'); ?>">
														<img src="<?php the_field('room_image3'); ?>" alt="">
													</a>
												</div>
											</figure>
											<figure class="gallery-item">
												<div class="gallery-icon">
													<a class="ci-lightbox" href="<?php the_field('room_image2'); ?>">
														<img src="<?php the_field('room_image4'); ?>" alt="">
													</a>
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</main>








<?php endwhile; else: ?>

<div class="page-header">
	<h1>Oh no!</h1>
</div>

<p>No content is appearing for this page!</p>

<?php endif; ?>

<?php get_footer(); ?>
