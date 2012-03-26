<?php
/**
 * The template for displaying search forms in Forward Church
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */
?>
  <form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="input-medium search-query" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
    <input type="submit" id="searchsubmit" class="btn btn-primary" name="submit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
  </form>
