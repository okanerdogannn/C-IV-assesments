<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
</head>
  <body>
    <!-- Header -->
    <header class="container-fluid bg-header clearfix" id="header">
        <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron text-center mb-0">
            <a class="active" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/robot.svg" class="logo"></a>
              
              <h1 class="display-4 text-uppercase"><?php bloginfo( 'name' ); ?></h1>
              <p class="lead mt-2 lead-serif"><?php bloginfo( 'description' ); ?></p>
            </div>
            <!-- /Jumbotron -->    
        </div>

     
    </header>
       <!-- Nav -->
       <div id="topnav">
            <?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
        </div>
        <!-- /Nav -->
    <!-- /Header -->