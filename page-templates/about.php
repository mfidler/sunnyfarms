<?php
/**
 * Template Name: About Page Template
 */
get_header(); ?>

<script>

	$(function() {

	});

</script>

<main>

	<div class="section1">
        <?php $image = get_field('section_1_background'); if($image) { ?>
			<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		<?php } ?>
		<div class="wrapper clearfix">
			<h1 class="content-header"><?php echo get_field('section_1_header'); ?></h1>
			<div class="content-container content-wysiwyg clearfix"><?php echo get_field('section_1_content'); ?></div>
		</div>
	</div>

	<div class="section2">
        <?php $image = get_field('section_2_background'); if($image) { ?>
			<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		<?php } ?>
		<div class="wrapper clearfix">
			<div class="content-left clearfix">
				<div class="content-wysiwyg clearfix"><?php echo get_field('section_2_content'); ?></div>
			</div>
			<div class="content-right clearfix">
				<div class="content-block">
					<div class="block-label"><?php echo get_field('section_2_block_label'); ?></div>
			        <?php $link = get_field('section_2_block_link'); if($link) { ?>
						<a class="block-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="section3" id="<?php echo sanitize_title(get_field('section_3_header')); ?>">
		<div class="wrapper clearfix">
			<h2 class="content-header"><?php echo get_field('section_3_header'); ?></h2>
			<div class="content-container content-wysiwyg clearfix"><?php echo get_field('section_3_content'); ?></div>
		</div>
	</div>

	<div class="section4" id="<?php echo sanitize_title(get_field('section_4_header')); ?>">
		<div class="wrapper clearfix">
			<h2 class="content-header"><?php echo get_field('section_4_header'); ?></h2>
			<div class="content-container content-wysiwyg clearfix"><?php echo get_field('section_4_content'); ?></div>
			<div class="content-entries clearfix">
                <?php if( have_rows('section_4_values') ) { ?>
                    <?php while ( have_rows('section_4_values') ) { the_row(); ?>
						<div class="content-entry clearfix">
					        <?php $image = get_sub_field('icon'); if($image) { ?>
								<div class="entry-icon" data-resize="1"><img class="block" src="<?php echo $image['url']; ?>"></div>
							<?php } ?>
							<div class="entry-content clearfix">
								<h3 class="entry-title"><?php echo get_sub_field('title'); ?></h3>
								<div class="content-wysiwyg clearfix"><?php echo get_sub_field('content'); ?></div>
							</div>
						</div>
                    <?php } ?>
                <?php } ?>
			</div>
		</div>
	</div>

	<div class="section5" id="<?php echo sanitize_title(get_field('section_5_header')); ?>">
		<div class="wrapper clearfix">
			<div class="content-left clearfix">
				<h2 class="content-header"><?php echo get_field('section_5_header'); ?></h2>
				<div class="content-wysiwyg clearfix"><?php echo get_field('section_5_content'); ?></div>
			</div>
			<div class="content-right clearfix">
				<div class="content-block">
					<div class="block-label"><?php echo get_field('section_5_block_label'); ?></div>
			        <?php $link = get_field('section_5_block_link'); if($link) { ?>
						<a class="block-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
