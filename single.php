<?php


get_header(); ?>

 <div id="maincontent" class="container">
    <div id="content col-md-8">
    	<div class="content-post col-md-8">
     <?php if ( have_posts() ) : ?>
     	<?php while ( have_posts() ) : the_post(); ?>
     		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

     			<!-- Judul dan Publish -->
     			<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div id="postemeta">Publish on <?php the_time('F jS, Y'); ?> under <?php the_category(', '); ?> by <?php the_author(); ?> |
				<?php comments_popup_link('No Commments &raquo;', '1 Commment &raquo;', '% Comments &raquo;'); ?>
				<?php edit_post_link('Edit', '','|'); ?></div>

	     		<!-- Post Thumbnail -->
	     		<?php
	     			if (!is_single()) {
	     			if ( has_post_thumbnail() ) {
	     			the_post_thumbnail("medium");
	     			}else {
	     			echo '<img src="'.get_bloginfo('template_url').'/images/thumbnail.png"alt="'.get_the_title().'" class="wp-post-image"/>';
	     			 }   		
	     			}
	     		?>
	     		
	     		<!-- Konten Pos -->					
	     		<p><?php the_content(); ?></p>
	     		
     		</div>
     		<?php comments_template(); ?>
     	<?php endwhile; ?>
     <?php endif;?>
     <!--QUERIES home -->
               <div class="home-columns col-md-12">
                    <div class="row clearfix">

                    <!-- one-half -->
                    <h2 class="last-posts">Latest Posts</h2>
                         <?php //opinion posts loop begins here
                              $opinionPosts = new WP_Query('cat=10&posts_per_page=3');

                              if ($opinionPosts->have_posts()) :

                                   while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
                                   
                                   <!-- Post Thumbnail -->

                                   <div class="one-half col-md-4">
                                   <?php
                                        if (!is_single()) {
                                        if ( has_post_thumbnail() ) {
                                        the_post_thumbnail("medium");
                                        }else {
                                        echo '<img src="'.get_bloginfo('template_url').'/images/thumbnail.png"alt="'.get_the_title().'" class="wp-post-gambar"/>';
                                         }             
                                        }
                                   ?>

                                   <h2 class="title-querie"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                   </div> <!-- one-half -->
                                   <?php endwhile;

                                   else:
                                        //fallback no content message here
                              endif;
                              wp_reset_postdata(); ?>
                   

                         <!-- one-half -->
                         <div class="clearfix"></div>
                         <h2 class="last-posts">Popular Posts</h2>
                         <?php //opinion posts loop begins here
                              $newPosts = new WP_Query('cat=9&posts_per_page=3');

                              if ($newPosts->have_posts()) :

                                   while ($newPosts->have_posts()) : $newPosts->the_post(); ?>
                                   
                                   <!-- Post Thumbnail -->
                                   <div class="one-half last col-md-4">
                                   <?php
                                        if (!is_single()) {
                                        if ( has_post_thumbnail() ) {
                                        the_post_thumbnail("medium");
                                        }else {
                                        echo '<img src="'.get_bloginfo('template_url').'/images/thumbnail.png"alt="'.get_the_title().'" class="wp-post-gambar"/>';
                                         }             
                                        }
                                   ?>
                                   <h2 class="title-querie"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                   </div><!-- one-half -->
                                   <?php endwhile;

                                   else:
                                        //fallback no content message here
                              endif;
                              wp_reset_postdata(); ?>
                    
                    </div>
               </div><!-- home -->
 </div>
 </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
  
