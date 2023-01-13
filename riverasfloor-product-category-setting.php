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
global $wp_query;
$cat = $wp_query->get_queried_object();
$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); 
$image = wp_get_attachment_url( $thumbnail_id ); 

?>

<?php if(is_product_category() ){ ?>  
<div class="category-banner">
	<figure><img src="<?php	echo $image ?>"></figure>	 
	<h4><?php single_cat_title(); ?></h4>
	<?php echo category_description(); ?>
</div>

<div class="inner-page productcat-inner-banner" >	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="category-sidebar">
					<?php if(is_product_category('moldings') || is_product_category('artificial-turf') ){ ?> 			
						<div class="single-bar spec-cat">					
							<?php echo do_shortcode('[br_filter_single filter_id=478]') ?>
						</div>				
					
					<?php } else { ?>

						<div class="single-bar style">							
							<?php echo do_shortcode('[br_filter_single filter_id=136]') ?>
						</div>
						<div class="single-bar brand">								
							<?php echo do_shortcode('[br_filter_single filter_id=143]') ?>
						</div>
						<div class="single-bar colors">							
							<?php echo do_shortcode('[br_filter_single filter_id=239]') ?>
						</div>
						<div class="single-bar">							
							<?php echo do_shortcode('[br_filter_single filter_id=151]') ?>
						</div>

					<?php } ?>

					
				</div>
			</div>
			<div class="col-md-8">
				<div class="all-product-section">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content-page' );

						// If comments are open or there is at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					endwhile; // End of the loop.
					?>
				</div>
			</div>
			
		</div>
	</div>
</div>


<?php }else{ ?>
<div class="inner-page">
	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/content-page' );

		// If comments are open or there is at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile; // End of the loop.
	?>
</div>
<?php } ?>

<?php
get_footer();
