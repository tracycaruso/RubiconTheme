<?php 
/*
* Template Name: Private Parties
*/



get_header(); ?>


<div class="container parties">
    <div class="row">
      <div class="column">
      	<div class="private-parties">
            <h1><img src="<?php bloginfo('template_directory'); ?>/images/private-parties-title.svg" alt="Eat"></h1>
            	<?php if (have_posts()) : while (have_posts()) : the_post();?>
            		<?php the_content(); ?>
    			<?php endwhile; endif; ?>
    	</div><!--private-parties-->	
      </div><!--column-->
    </div><!--row-->
</div>


<?php get_footer(); ?>
  