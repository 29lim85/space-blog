<?php get_header(); ?>

<div class="section content">
	
	<div class="section-inner">

		<div class="post single">
		
			<div class="post-header">
			
				<h2 class="post-title"><?php _e('Thank you Mario!<br/>But our princess is in another castle!','iwata'); ?></h2>
				
				<div class="post-meta">
					
					<p><span class="fa fw fa-times-circle"></span>Error 404</p>
					
				</div>
														
			</div> <!-- /post-header -->
		                                                	            
	        <div class="post-content">
	        	            
	            <p><?php _e("It seems like you have tried to open a page that doesn't exist. It could have been deleted, moved, or it never existed at all. You are welcome to search for what you are looking for with the form below.", 'iwata') ?></p>
	            
	            <?php get_search_form(); ?>
	            
	        </div> <!-- /post-content -->
	        	            	                        	
		</div> <!-- /post -->
	
	</div> <!-- /section-inner -->
	
</div> <!-- /content -->

<?php get_footer(); ?>
