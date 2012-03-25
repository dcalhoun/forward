<?php
/**
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */
?>

<?php include('header.php'); ?>

  <div class="row">
    <section class="primary span8 offset2" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <h1><?php the_title();?></h1>

        <div class="entry-text">
          <?php the_content(); ?>
        </div>
      </article>
      <?php endwhile; endif; ?>

      <?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

    </section>
  </div> <!-- /.row -->

<?php include('footer.php'); ?>