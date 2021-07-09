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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
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

        <div class="wrapper clearfix">
            <?php $image = get_field('header_logo', 'option'); if($image) { ?>
                <a class="header-logo" href="<?php echo home_url(); ?>">
                    <img class="block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </a>
            <?php } ?>

            <a class="header-mobile" href="#">
                <img class="open block" src="<?php echo get_template_directory_uri(); ?>/images/header-menu-open.png">
                <img class="close block" src="<?php echo get_template_directory_uri(); ?>/images/header-menu-close.png">
            </a>

            <div class="header-menu-container clearfix">
                <ul class="header-menu clearfix">
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
                <div class="header-menu-lower clearfix">
                    <div class="text"><?php echo get_field('mobile_menu_text', 'option'); ?></div>
                    <form class="form-newsletter clearfix">
                        <input type="email" placeholder="name@email.com" required>
                        <input type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
<script src='https://www.google.com/recaptcha/api.js'></script>
    </header>
