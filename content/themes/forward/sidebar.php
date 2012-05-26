<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Forward_church
 * @since Forward Church 1.0
 */
?>

<div class="primary span4" role="complementary">
  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

    <aside id="archives" class="widget">
      <h3 class="widget-title">Archives</h3>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>

    <aside id="meta" class="widget">
      <h3 class="widget-title">Meta</h3>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </aside>

  <?php endif; // end sidebar widget area ?>
</div>