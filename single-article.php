<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$options = get_option( 'sample_theme_options' );
get_header();
?>

<div class="inner-banner">
	<div class="container">
		<h3><?php the_title(); ?></h3>
		<ul class="breadcumb">
			<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
			<li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
			<li><span><?php the_title(); ?></span></li>
		</ul><!-- /.breadcumb -->
	</div><!-- /.container -->
</div>

<div class="single_service">
	<div class="container">
		<div class="row">
			<div class="single__post">
				<?php 
					/* Start the Loop */
				while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content-single' );
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
