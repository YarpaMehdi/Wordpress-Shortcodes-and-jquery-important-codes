
<?php /* Template Name: Blog Page */ 

get_header(); 
$options = get_option( 'sample_theme_options' ); ?>
	
<style>
	
</style>
	
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content/content', 'page' );
		endwhile;
	?>
	
	<div class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-posts">								
							
							<?php
								$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;	
								$data= new WP_Query(array( 'post_type'=>'post', 'posts_per_page' => 2, 'paged' => $paged, ));					
								$loop = new WP_Query( $data );	
								if($data->have_posts()) : while($data->have_posts())  : $data->the_post();
								$url=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()),'thumbnail');
							?>
							
							<div class="single-blog">
								<figure>
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a>
									<figcaption><?php echo get_the_date() ?></figcaption>
								</figure>
								<div class="cont">
									<h4><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 15, '...' ); ?></a></h4>
									<p><?php echo get_the_excerpt(); ?> </p>
								</div>
							</div>
							
							
							<?php endwhile; ?>
							
							<div class="pagination">
								<?php
									$total_pages = $data->max_num_pages;
									if ($total_pages > 1){
										$current_page = max(1, get_query_var('paged'));
										echo paginate_links(array(
											'base' => get_pagenum_link(1) . '%_%',
											'format' => '/page/%#%',
											'current' => $current_page,
											'total' => $total_pages,
											'prev_text'    => __('<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'),
											'next_text'    => __('<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'),
										));
									} ?>
									</div>
								<?php else :?>
								<h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
							<?php endif; ?>
							
											
					</div>
				</div>
				<div class="col-md-4">
					<div class="sidebar">
						<div class="search-form">
							<?php get_search_form() ?>
						</div>
						<div class="gray-bg recent-post">
							<h4>Recent Posts</h4>
							<div class="blog-box">			
								<?php  		
									$args = array('post_type' => 'post', 'posts_per_page' => 3 ); 
									$loop = new WP_Query( $args );
									while( $loop->have_posts()): $loop->the_post(); 
									$url=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()),'thumbnail');
								?>
									<div class="row">
										<div class="col-md-4">											
											<div class="blog-thumbnail">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php echo $url ?>" alt="">
												</a>
											</div>										
										</div>
										<div class="col-md-8">
											<h2><a href="<?php the_permalink(); ?>" title=""><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
										</div>
									</div>

								<?php endwhile; ?>
								
							</div>
							
						</div>
						<div class="gray-bg category">
							<h4>Categories</h4>
							<?php
							 $defaults = array(
								'theme_location'  => '',
								'menu'            => 'category_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="navigation">%3$s</ul>',
								'depth'           => 5,
								'walker'          => ''
							);
							wp_nav_menu($defaults); 
							?>
						</div>
						<div class="gray-bg tags">
							<h4>Tags</h4>
							<ul class="blog-category">							
								<?php
								$tags = get_tags();
								if ( $tags ) :
									foreach ( $tags as $tag ) : ?>
										<li><?php echo esc_html( $tag->name ); ?></li>
									<?php endforeach; ?>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	


<?php get_footer(); ?>