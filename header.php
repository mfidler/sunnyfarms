<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html>
<!--<![endif]-->
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131420586-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131420586-1');
</script>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=1;">

    <title></title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Lora:wght@400;700&family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css'>
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/style.css?t=<?php echo time(); ?>'>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!--[if lte IE 8]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->

    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/main.js?t=<?php echo time(); ?>"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body <?php body_class(); ?>>

    <header>
      <div class="head-wrap">
        <div class="text">
          <?php bloginfo('name'); ?> is now WIN Waste Innovations
        </div>
        <div class="logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/header-logo-2021.png" alt="<?php bloginfo('name'); ?>" />
          </a>
        </div>
        <div class="slant"></div>
        <div class="links">
          <ul>
              <?php if( have_rows('main_navigation', 'option') ) { ?>
                  <?php while ( have_rows('main_navigation', 'option') ) { the_row(); ?>
                      <?php
                          $link = get_sub_field('link');
                          $postid = url_to_postid( $link['url'] );

                          $active = false;
                          if($postid) {
                              if($post->ID === $postid || $post->post_parent === $postid) {
                                  $active = true;
                              }
                          } else {
                              $page_for_posts_url = get_permalink( get_option( 'page_for_posts' ) );
                              if($link['url'] === $page_for_posts_url) {
                                  if(is_home() || $post->post_type === 'post') {
                                      $active = true;
                                  }
                              }
                          }
                      ?>
                      <?php if($postid === 2) { ?>
                          <li class="about"><a <?php if($active) { echo ' class="active"'; } ?> href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a></li>
                          <li class="mobile"><a href="<?php echo $link['url']; ?>#<?php echo sanitize_title(get_field('section_3_header', 2)); ?>"><?php echo get_field('section_3_header', 2); ?></a></li>
                          <li class="mobile"><a href="<?php echo $link['url']; ?>#<?php echo sanitize_title(get_field('section_4_header', 2)); ?>"><?php echo get_field('section_4_header', 2); ?></a></li>
                          <li class="mobile"><a href="<?php echo $link['url']; ?>#<?php echo sanitize_title(get_field('section_5_header', 2)); ?>"><?php echo get_field('section_5_header', 2); ?></a></li>
                      <?php } else { ?>
                          <li><a <?php if($active) { echo ' class="active"'; } ?> href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a></li>
                      <?php } ?>
                  <?php } ?>
              <?php } ?>
          </ul>
        </div>
      </div>
    </header>
