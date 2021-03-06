<?php get_header(); ?>

<div class="section content">
	
	<div class="section-inner">
																	                    
	<?php if (have_posts()) : ?>
	
		<div class="posts" id="posts">
							
	    	<?php while (have_posts()) : the_post(); ?>
	    	
	    		<?php get_template_part( 'content', get_post_format() ); ?>
	    			        		            
	        <?php endwhile; ?>
    	                    
		<?php endif; ?>
		
	</div> <!-- /posts -->
	
	<?php iwata_archive_navigation(); ?>
	
	</div> <!-- /section-inner -->
		
</div> <!-- /content.section -->
	              	        
<?php get_footer(); ?>