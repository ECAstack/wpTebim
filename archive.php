<?php get_header(); ?>





<main class="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-l-6">
				<article class="entry">
					<header class="entry-header">
						<h1 class="entry-title"><?php wp_title(''); ?></h1>

						<div class="entry-meta">
							<p>Would recommended it to everyone. We got married in , and stayed at Resort, and it was a
								dream come true.</p>
						</div>
					</header>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="row row-items">
						<div class="col-xs-6">
							<div class="item">
								<figure class="item-thumb">
									<?php
									if ( has_post_thumbnail() ) {
									  the_post_thumbnail();
									}
								   ?>
									<p class="item-title" >
										<a style="background: #fff; width:100%;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</p>
								</figure>
							</div>
						</div>
						<?php endwhile; else: ?>



						<div class="page-header">
							<h1>Oh no!</h1>
						</div>

						<p>dfghjkl</p>

						<?php endif; ?>
						<!-- Simpler pagination  -->


					</div>
				</article>
			</div>
		</div>
	</div>
</main>
<div class="container">
	<div class="row text-center">
		<?php echo paginate_links() ?>
	</div>
</div>






<?php get_footer(); ?>
