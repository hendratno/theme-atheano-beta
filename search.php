<?php


get_header(); ?>
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
     	<?php endwhile; ?>
     <?php endif;?>
 </div>
 </div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
  
