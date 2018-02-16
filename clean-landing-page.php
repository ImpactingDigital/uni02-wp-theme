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
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M74S53S');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

    
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M74S53S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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
    
<!--  Script para abertura do chat Smarkio  -->
    <script>
    jQuery(document).ready(function( $ ){
     jQuery('a.open_smk_chat').click(function(e) {
         e.preventDefault();
        jQuery('.wrap-p-smk-o div').eq(1).click();
        jQuery(".--p-smk-fw div").eq(1).click();
     });
    });
    </script>
	</body>
	</html>