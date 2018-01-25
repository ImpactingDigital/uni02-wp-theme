<?php
/**
 * Template Name: Clean Landing Page
 * Description: Page template for Landing Pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<div id="page" class="landing-page">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'blank' );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		</div>
		<!-- #page -->
		<?php wp_footer(); ?>
	</body>
	</html>