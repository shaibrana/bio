<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright = get_theme_mod( 'illdy_footer_copyright', sprintf( __( '&copy; Copyright %s. All Rights Reserved.', 'illdy' ), date( 'Y' ) ) );
} else {
	$footer_copyright = get_theme_mod( 'illdy_footer_copyright' );
}
?>


<?php if ( 'page' == get_option( 'show_on_front' ) && is_front_page() && get_theme_mod( 'illdy_go_to_top', false ) ) : ?>
	<a href="#" class="illdy-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<?php endif ?>

<?php wp_footer(); ?>
</body>
</html>
