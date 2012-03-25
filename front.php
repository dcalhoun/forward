<?php
/**
 * Template Name: Front
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

get_header(); ?>

  <a href="#" id="close-mission" class="close alignright mhide">D</a>

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
        'category_name=slides'
      );
      $slides = new WP_Query('category_name=slides');
    ?>
    <?php if ($slides->have_posts()) : ?>
    <a href="#" class="control prev">Prev</a>
    <div id="featured-slides" class="carousel">
      <?php while ($slides->have_posts()) : $slides->the_post(); ?>
        <?php the_post_thumbnail(array(267,400)); ?>
      <?php endwhile; ?>
    </div>
    <a href="#" class="control next">Next</a>
    <?php else :?>
      <p class="empty-text">No posts to display.</p>
    <?php endif; ?>
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