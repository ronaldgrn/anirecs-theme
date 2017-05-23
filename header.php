<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>

	<?php wp_head(); ?>
</head>
<body>

<div id="header" class="container">
    <!-- Logo + Carousel --->
    <a href="<?php echo home_url() ?>"> <div id="logo"></div></a>

	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

</div>


<div id="slider" class="container">
	<?php if(is_home()): ?>
        <div id="slider-content"> <?php dynamic_sidebar('home_slide'); ?></div>
    <?php endif; ?>
</div>
