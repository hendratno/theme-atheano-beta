<?php


get_header(); ?>


<div class="container">
    <div class="row">
     <div class="content col-md-12">
       <div id="slider-wrap">
          <div id="slider" class="clearfix">
               <div id="owl-demo" class="owl-carousel">
                    <?php 
                         $args = array('cat' => 10, 'posts_per_page'  => 1);
                         $the_query = new WP_Query($args);

                         while ($the_query->have_posts()): 

                         $the_query->the_post(); 

                         $excerpt=get_the_excerpt();

                         $intro_article = substr($excerpt,0,200);

                         $intro_article_fix = substr($intro_article, 0, strrpos($intro_article, " ")).'...';

                    ?>
                         <div class="item">
                              <a href="<?php the_permalink() ?>">
                                   <?php the_post_thumbnail(array(978,9999)); ?>

                                   <h1><?php the_title();?></h1>
                                   <p><?php echo $intro_article_fix; ?></p>
                              </a>
                         </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

               
               </div>
          </div>
     </div>
</div>
</div>



<style type="text/css">
     #owl-demo{
          background:#fff;
     }
     
     #owl-demo .item{
          margin:20px 0 0 0;
     }
     
     #owl-demo .item img{
          margin:0 !important;
          display: block;
          width: 100%;
          height: 500px;
          padding:0px !important;
          background:#fff;
          box-shadow:none;
          -webkit-box-shadow:none;
          -moz-box-shadow:none;
     }

     .owl-carousel h1{
          width:auto;
          font-size:28px;
          line-height:27px;
          position:absolute;
          background-color: rgba(0,0,0,0.3);
          padding:10px 20px;
          color:#fff;
          margin:-200px 0 0 0;
     }
     
     .owl-carousel p{
          width:50%;
          font-size:0.9em;
          position:absolute;
          padding:10px 20px;
          color:#fff;
          background-color: rgba(0,0,0,0.6);
          margin:-150px 0 0 0;
     }
</style>



<div class="container">
 <div id="row maincontent">
    <div id="content col-md-8">
    	<div class="content-post col-md-9">
     <?php if ( have_posts() ) : ?>
     	<?php while ( have_posts() ) : the_post(); ?>
     		<div id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>

     			<!-- Judul dan Publish -->
     			<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div id="postmeta">Publish on <?php the_time('F jS, Y'); ?> under <?php the_category(', '); ?> by <?php the_author(); ?> |
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
	     		<p><?php the_excerpt(); ?></p>
	     		
     		</div>
     		<?php comments_template(); ?>
     	<?php endwhile; 
     		the_posts_pagination (
     			array(
     				'mid_size' => '2',
     				'prev_text' => 'Previous Posts',
     				'next_text' => 'Next Posts'
     				)
     			
     			);
     	?>
          
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

<!-- /content-out -->
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
  

     
  