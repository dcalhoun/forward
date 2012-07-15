<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

get_header(); ?>

<?php

  // Extra images for home page carousel
  $args = array(
    'post_parent'    => $post->ID,
    'post_status'    => 'inherit',
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'order'          => 'ASC',
    'orderby'        => 'menu_order ID'
  );

  $attachments = get_children($args);
  $extra_images = array();

  foreach($attachments as $att_id => $attachment) {
    array_push($extra_images, wp_get_attachment_image($attachment->ID, 'slide'));
  }
?>

  <a href="#" id="close-mission" class="pictos alignright mhide">D</a>

  <div id="wrapper-mission" class="closed hidden-phone">
    <div class="container">
      <section id="mission" class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <p class="span12"><?php echo get_post_meta($post->ID, 'mission', true); ?></p>
        <?php endwhile; endif; ?>
      </section>
    </div>
  </div>

  <div class="wrapper-carousel">
    <?php
      $args = array(
        'category_name'  => 'featured',
        'posts_per_page' => -1
      );
      $slides = new WP_Query($args);
      $slide_count = $slides->post_count;
      $needed_images = 3 - $slide_count;
    ?>

    <a href="#" class="control prev">Prev</a>
    <div id="featured-slides" class="carousel">
      <?php if ($slides->have_posts()) : ?>
        <?php while ($slides->have_posts()) : $slides->the_post(); ?>
          <?php
            $url = get_permalink();
            the_post_thumbnail('slide', array('data-url' => $url));
          ?>
        <?php endwhile; ?>

        <?php add_images($extra_images, $needed_images); ?>
      <?php else :?>
        <?php add_images($extra_images, $needed_images); ?>
      <?php endif; ?>
    </div>
    <a href="#" class="control next">Next</a>
  </div>

  <div class="container">
    <section class="primary row" role="main">
      <div id="welcome" class="span6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

      <div class="span3">
        <a href="<?php echo get_permalink(24); ?>" id="send-me">Send Me</a>
      </div>

      <div class="span3">
        <a href="<?php echo get_permalink(18); ?>" id="two-forty-two">2/42</a>
      </div>
    </section>

<?php get_footer(); ?>
