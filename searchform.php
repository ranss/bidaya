<?php
/**
 * The template for displaying search forms in the Bidaya theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php _e('Search for:', 'bidaya'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr__('Search …', 'bidaya'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">
        <?php echo esc_html__('Search', 'bidaya'); ?>
    </button>
</form>