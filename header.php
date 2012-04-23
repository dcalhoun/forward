<?php
/**
 * The Header for the theme.
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    <?php
      wp_title( '|', true, 'right' );
      bloginfo( 'name' );
    ?>
  </title>

  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <meta name="author" content="">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- ### Stylesheets ### -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fonts.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <!-- ### Place all scripts (excluding Modernizr) at bottom of the document. ### -->
  <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/modernizr-2.0.6.js" type="text/javascript"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <div class="row">
      <header class="primary span4" role="banner">
        <h1 class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>
      </header>

      <nav class="primary span4" role="navigation">
        <?php
          $args = array(
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'nav nav-pills',
            'theme_location' => 'primary',
            'walker'         => new Bootstrap_Walker_Nav_Menu()
          );
          wp_nav_menu($args);
        ?>
      </nav>

      <nav id="social" class="span4" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'social', 'container' => false, 'menu_class' => 'unstyled horz')); ?>
        <a href="http://g.co/maps/awqv5" id="schedule">Sundays @ Murrell Elementary &mdash; 10:00am</a>
      </nav>
    </div>
  </div>

  <?php
    // Start a container wrapper if it's not using the front page template.
    $template = get_post_meta( $post->ID, '_wp_page_template', true );
    if ($template != 'front.php') {
      echo '<div class="container">';
    }
  ?>