<?php get_header(); ?>

	<div class="content section">
		
		<div class="section-inner">

			<?php if ( have_posts() ) : ?>
			
				<div class="page-title">
				
					<h4>
				
						<?php _e( 'Search Results:', 'iwata'); echo ' "' . get_search_query() . '"'; ?>
					
					</h4>
					
				</div>
						
				<div class="posts" id="posts">
					
					<?php while (have_posts()) : the_post(); ?>
			    	
			    		<?php get_template_part( 'content', get_post_format() ); ?>
			    			        		            
			        <?php endwhile; ?>
								
				</div> <!-- /posts -->
				
				<?php iwata_archive_navigation(); ?>
		
			<?php else : ?>
							
				<div class="page-title section small-padding">
			
					<h4>
				
						<?php echo _e( 'Search Results:', 'iwata') . ' "' . get_search_query() . '"'; ?>
					
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						
						if ( "1" < $wp_query->max_num_pages ) : ?>
						
							<span>(<?php printf( __('Page %s of %s', 'iwata'), $paged, $wp_query->max_num_pages ); ?>)</span>
						
						<?php endif; ?>
						
					</h4>
					
				</div>
							
				<div class="post">
				
					<div class="post-content">
					
						<p><?php _e('No results. Try again, would you kindly?', 'iwata'); ?></p>
						
						<?php get_search_form(); ?>
					
					</div> <!-- /post-content -->
					
					<div class="clear"></div>
				
				</div> <!-- /post -->
			
			<?php endif; ?>
		
		</div> <!-- /section-inner -->
		
	</div> <!-- /content -->
		
<?php get_footer(); ?>