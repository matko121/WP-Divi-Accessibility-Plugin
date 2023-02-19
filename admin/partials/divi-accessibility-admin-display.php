<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://offsetconcepts.com
 * @since      1.0.0
 *
 * @package    Divi_Accessibility
 * @subpackage Divi_Accessibility/admin/partials
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

?>

<div class="wrap">

	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

	<?php settings_errors(); ?>

	<div class="da11y-settings-information">

		<h2>Divi Accessibility <?php echo esc_html( $this->version ); ?></h2>

		<a style="display: block;" target="_blank" href="https://offsetconcepts.com">

			<span class="screen-reader-text">Made by Offset Concepts</span>

			<!-- Offset Logo -->
			

		</a>

		<h3>Resources</h3>

		<ul>

			<li><a target="_blank" href="https://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines (WCAG) 2.0</a></li>

			

		</ul>

	</div><!-- .settings-information -->

	<form action="options.php" method="post" class="da11y-settings">

		<?php settings_fields( $this->da11y ); ?>
		<?php do_settings_sections( $this->da11y ); ?>
		<?php submit_button(); ?>

	</form>

</div><!-- .wrap -->
