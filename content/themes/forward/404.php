<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

get_header(); ?>

  <div class="row">
    <section class="primary span8 offset2" role="main">
      <article id="post-<?php the_ID(); ?>">
        <h1 class="entry-title">Whoops...</h1>

        <div class="entry-text">
          <p class="text-center">It seems we can't find what you are looking for &mdash; terribly sorry about that. &#9785;</p>
        </div>
      </article>
    </section>
  </div> <!-- /.row -->

<?php get_footer(); ?>
