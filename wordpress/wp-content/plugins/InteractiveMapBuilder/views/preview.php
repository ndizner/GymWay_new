<?php
 /**
 * Interactive Map Builder Plugin.
 *
 * @package   View
 * @author    Fabian Vellguth <info@meisterpixel.com>
 * @link      http://meisterpixel.com
 * @copyright 2013 meisterpixel.com
 */
 ?>
<html class="preview_page">
	 <head>
		<title>Preview</title>
		
		<!-- WP header -->
         <?php remove_all_actions( 'wp_head', 10 ) ?>
         <?php
            // Divi Fix
            function et_is_ab_testing_active() {
                return false;
            }
        ?>
		<?php wp_head(); ?>
	</head>

	<body>
		<div>
			<?php if($action===false) : ?>
				<small><?php echo __("Ooops...Could not find the click action.", $this->plugin_slug ); ?></small>
			<?php else: ?>
				<?php echo $map; ?>
			<?php endif; ?>
		</div>
		
		<!-- WP footer -->
        <?php remove_all_actions( 'wp_footer', 10 ) ?>
		<?php wp_footer(); ?>
	</body>
</html>