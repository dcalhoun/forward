<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */
?>

    <footer class="primary row" role="contentInfo">
      <div class="span12">
        <p class="text-center">&copy; <?php the_date('Y'); ?> Forward Church Nashville. All Rights Reserved.</p>
      </div>
    </footer>
  </div> <!-- /.container -->

  <!-- ### Post-Scripts ### -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.7.1.min.js"><\/script>')</script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.touchwipe.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.carouFredSel-5.5.0-packed.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap-transition.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap-dropdown.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap-alert.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/site.js"></script>

  <?php wp_footer(); ?>

</body>
</html>