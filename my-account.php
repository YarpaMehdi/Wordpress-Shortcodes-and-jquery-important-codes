<?php
/* Template Name: my account */ 

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

<div class="my__account">
	<div class="container">
		<div class="row">
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content/content', 'page' );
					endwhile;
				?>
		</div>
	</div>
</div>

<?php
get_footer();
