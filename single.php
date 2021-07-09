<?php

get_header(); ?>

<script>

	$(function() {

	});

</script>

<main>

	<div class="section1">
		<div class="wrapper clearfix">
			<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
				<div class="news-entry clearfix">
					<div class="news-back"><a href="<?php echo get_the_permalink(164); ?>">&lt; View All Articles</a></div>
					<h1 class="news-title"><?php echo get_the_title(); ?></h1>
					<div class="news-date"><?php echo get_the_date('l, F j, Y'); ?></div>
					<div class="news-content clearfix">
						<div class="content-wysiwyg clearfix"><?php echo get_field('content'); ?></div>
					</div>
					<div class="news-footer clearfix">
						<div class="news-share clearfix">
							<span class="news-share-text">Share this story</span>
							<span class="news-share-links">
								<?php $title = get_the_title(); ?>
	                    		<?php $url = get_the_permalink($post->ID); ?>
								<a href="http://www.facebook.com/share.php?title=<?php echo urlencode($title); ?>&u=<?php echo $url; ?>" target="_blank"><img class="block" src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png"></a>
								<a href="https://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php echo $url; ?>" target="_blank"><img class="block" src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.png"></a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&title=<?php echo urlencode($title); ?>&url=<?php echo $url; ?>" target="_blank"><img class="block" src="<?php echo get_template_directory_uri(); ?>/images/icon-linkedin.png"></a>
							</span>
						</div>
						<?php $prev = get_previous_post(); if($prev) { ?>
							<div class="news-prev"><a href="<?php echo get_the_permalink($prev->ID); ?>">&lt; Previous Article</a></div>
						<?php } ?>
						<?php $next = get_next_post(); if($next) { ?>
							<div class="news-next"><a href="<?php echo get_the_permalink($next->ID); ?>">Next Article &gt;</a></div>
						<?php } ?>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
	
</main>

<?php get_footer(); ?>