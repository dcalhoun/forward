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
    <section class="primary span8 offset2" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <nav id="nav-single">
        <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> Previous'); ?></span>
        <span class="nav-next"><?php next_post_link( '%link', 'Next <span class="meta-nav">&rarr;</span>'); ?></span>
      </nav>

      <article id="post-<?php the_ID(); ?>">
        <h1><?php the_title();?></h1>

        <div class="entry-text">
          <?php the_content(); ?>
        </div>
      </article>
      <?php endwhile; endif; ?>

      <?php comments_template( '', true ); ?>

    </section>
  </div> <!-- /.row -->

<?php get_footer(); ?>