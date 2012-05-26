<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

get_header(); ?>

  <div class="row">
    <section class="primary span8 offset2" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="post">
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
          </h1>

          <div class="entry-text">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; endif; ?>

      <?php //echo paginate_links() ?>
      <?php //echo next_post_link(); ?>
      <?php //echo previous_post_link(); ?>

      <?php
        if(function_exists('wp_paginate')) {
          wp_paginate();
        }
      ?>

    </section>

    <?php //get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>