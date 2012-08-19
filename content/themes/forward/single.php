<?php
/**
 * The template for displaying single posts.
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

get_header(); ?>

  <div class="row">
    <section class="primary span12" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" class="post">
        <h1 class="entry-title"><?php the_title();?></h1>

        <?php the_post_thumbnail('feature'); ?>

        <div class="entry-text">
          <?php the_content(); ?>
        </div>
      </article>
      <?php endwhile; endif; ?>

      <?php //comments_template( '', true ); ?>

    </section>
  </div> <!-- /.row -->

<?php get_footer(); ?>
