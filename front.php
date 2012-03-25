<?php
/**
 * Template Name: Front
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */
?>

<?php include('header.php'); ?>

  <a href="#" id="close-mission" class="close alignright mhide">D</a>

  <div id="wrapper-mission" class="closed mhide">
    <div class="container">
      <section id="mission" class="row">
        <p class="span12"><span class="black">This is no Sunday kind of church.</span> We are a culture of Christians that believe church is an everyday everywhere kind of thing. We are always open. We are seekers helping seekers know Jesus' love. We believe love requires action. We believe that it's not enough to be merely hearers of the word. We must be doers. We are passionate about serving, because we can see the needs of people, our city &amp; the world. We are equipped because we have Jesus, and all we need is Jesus. We are passionate about change because we experience transformation through Christ. This no Sunday kind of church. We are a movement of love, and a movement of love never stops. It's everyday, every hour into eternity.</p>
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
        <a href="#" id="send-me">Send Me</a>
      </div>

      <div class="span3">
        <a href="#" id="two-forty-two">2/42</a>
      </div>
    </section>

<?php include('footer.php'); ?>