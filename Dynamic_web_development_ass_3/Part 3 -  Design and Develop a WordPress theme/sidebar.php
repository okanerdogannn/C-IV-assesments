
<div class="col-sm-4 bg-light">
    <h2>Widgets</h2>
    <p>widget</p>
    <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar_image.jpg" class="img-fluid" alt='side bar image'>
    <ul id="side_list">
    <!--if the theme does not have any widgets in the sidebar display the following.-->
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <!--Sidebar widgets are placed here-->
        <!--//Some Default widgets if none are specified -->
        
		    <li><?php get_search_form(); ?></li>
		    <?php wp_list_pages('title_li=<h3>Pages</h3>'); ?>
		    <li>
		    <h3>Archives</h3>
		    <ul>
		     <?php wp_get_archives('type=monthly'); ?>
		    </ul>
		    <?php wp_list_categories('title_li=<h3>Categories</h3>'); ?>
		    <ul>
		    <li><?php wp_loginout(); ?></li>
		    </ul>
    
		<?php endif; ?>  
    </ul>   

</div>