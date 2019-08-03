
<?php get_header();?>
    
    <!-- Content -->
    <div class="row">
        <div class="col-sm-8">

        <?php
        get_header();
        if ( have_posts() ) : while ( have_posts() ) : the_post();        
        ?>
        
        <h2>
            <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute(); ?>">
		    <?php the_title();?>
            </a>
        </h2>
        <div id="my_post" class="row">
            <div class="col-sm-6"><?php the_content();?></div>
            <div class="col-sm-6"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/girl.jpg" alt='post image'></div>
           
        </div>
        <?php
	    endwhile;
	    else :
	        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	    endif;
	    ?>

        </div>
       <?php get_sidebar();?>
    </div>
    <!-- /Content -->
      
   <?php get_footer(); ?>