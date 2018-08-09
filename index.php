<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php if( is_front_page() && !is_paged() ) : ?><div class="indominus"><h4>Personalized Photo Cards - Custom Fall Party Invitations</h4><p>Personalized photo cards and custom fall party invitations, exclusively designed just for your special event. High quality printing combines with unique layouts that are created by your personal designer at Lil Duck Duck for any occasion. Pumpkin photo cards and fairytale party invitations are oh-so-trendy for the coming autumn season right now! We love working with your company to create business greeting cards & company party invitations. For your quinceanera invitations and sweet 16 birthday party events, our designers create endless variations of personalized princess cards, masquerade party invitations or any other custom themed cards that are current favorites.</p><br/><p>We can change the colors, graphics, patterns or anything else on any of the custom photo cards and party invitations that you see here. That way your personalized party invitations can perfectly coordinate with your party decorations, baby's nursery, wedding colors, etc. for the perfect keepsake! Continue the memories with exclusive thank you notes, artistically matched to your designer party invitations and photos if needed for a beautiful finish to your lovely event.</p><br/></div><?php endif; ?>
<?php
do_action( 'storefront_sidebar' );
get_footer();