<?php

get_header(); ?>

<script>

	$(function() {

	});

</script>

<main>

	<div class="section-header">
		<div class="background-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/faq-background.jpg);"></div>
		<div class="wrapper clearfix">
			<div class="vert-align-middle"><div>
				<h1><?php echo get_field('header_text', 164); ?></h1>
			</div></div>
		</div>
	</div>

	<div class="section1">
		<div class="wrapper clearfix">
			<div class="news-entries clearfix">
				<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
					<?php
						$title = get_the_title();
						$old_date = isset($date) ? $date : '';
						$date = get_the_date('F j, Y');
						$content = get_field('content', get_the_ID());
						$excerpt = get_field('excerpt', get_the_ID());
						$excerpt = !empty($excerpt) ? $excerpt : wp_trim_words($content, 30);
					?>
					<div class="news-entry clearfix">
						<?php if($date !== $old_date) { ?>
							<div class="news-date"><?php echo $date; ?></div>
						<?php } ?>
						<div class="news-block clearfix">
							<h2 class="news-title">
								<a href="<?php the_permalink(); ?>">
									<span class="vert-align-middle"><span>
										<span class="news-title-text"><?php echo $title; ?></span>
									</span></span>
								</a>
							</h2>
							<div class="news-content">
								<div class="news-description">
									<?php echo $excerpt; ?>
									<div class="news-more"><a href="<?php the_permalink(); ?>">Read More &gt;</a></div>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
			<div class="news-pagination clearfix">
				<div class="content-wysiwyg clearfix">
					<p>
						<?php
							$big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'          => __('< '),
								'next_text'          => __(' >'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							) );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	
</main>

<?php get_footer(); ?>