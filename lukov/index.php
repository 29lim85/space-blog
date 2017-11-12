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
  <div id="nav-social" class="menu-social-links-container"><ul id="menu-social-links" class="menu">
  <li ><a title="Lukov on Twitter" rel="me" href="http://twitter.com/IgorLukov"></a></li>

  <li ><a title="My Video" rel="me" href="https://www.youtube.com/UCLAT7NzNepq5sWJRXrP0cnA"></a></li>
  <li ><a title="Lukov facebook" rel="me" href="https://www.facebook.com/2lukov"></a></li>
  <li><a rel="me" href="https://skype.com"></a></li>
  </ul></div>
</div> <!-- /content.section -->

<?php get_footer(); ?>
