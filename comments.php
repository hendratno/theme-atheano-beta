
<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>


<!-- post-bottom-section -->

	<?php if ( have_comments() ) : ?>
		<div class="post-bottom-section1">
			<h4><span><?php comments_number('No Comments', 'One Comments', '% Comments' );?></span></h4>
			<div class="navigation">
				<div class="next-posts"><?php previous_comments_link() ?></div>
				<div class="prev-posts"><?php next_comments_link() ?></div>
			</div>
		
			<div class="primary">

				<ol class="commentlist">
					<?php wp_list_comments(); ?>
					<!-- /comment-list -->
				</ol>

			<!-- /primary -->
			</div>
			
			<div class="navigation">
				<div class="next-posts"><?php previous_comments_link() ?></div>
				<div class="prev-posts"><?php next_comments_link() ?></div>
			</div>
		</div>
	 <?php else : // this is displayed if there are no comments so far ?>
		
		<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->

		 <?php else : // comments are closed ?>
			<p>Comments are closed.</p>

		<?php endif; ?>
		
	<?php endif; ?>


<?php if ( comments_open() ) : ?>
	
 <div class="post-bottom-section">

	<h4>Leave a Reply</h4>

	<div class="primary">
	
		<div class="cancel-comment-reply">
			<?php cancel_comment_reply_link(); ?>
		</div>
				
		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
	

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<!-- jika sudah login -->
			<?php if ( is_user_logged_in() ) : ?>
				<!-- maka komentar akan ditetapkan namanya berdasarkan siapa yang sedang login -->
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>
		
		
			<!-- untuk form sendiri terdiri dari input text atribut id dan name, perhatikan id dan namenya -->
			<!-- default untuk mengisikan nama itu atribut namenya itu berisi author  -->
			<!-- default untuk mengisikan email itu atribut namenya itu berisi email  -->
			<!-- default untuk mengisikan website itu atribut namenya itu berisi url  -->
			<!-- default untuk mengisikan komentar itu atribut comment itu berisi url  -->
			<div>
				<label for="name">Name <span>*</span></label>
				<input id="name" name="author" value="" placeholder="" type="text" tabindex="1" />
			</div>
			<div>
				<label for="email">Email Address <span>*</span></label>
				<input id="email" name="email" value="" placeholder="" type="text" tabindex="2" />
			</div>
			<div>
				<label for="website">Website</label>
				<input id="website" name="url" value="" placeholder="" type="text" tabindex="3" />
			</div>
			
			<?php endif; ?>
			
			<div>
				<label for="message">Your Message <span>*</span></label>
				<textarea id="message" name="comment" rows="10" cols="18" tabindex="4"></textarea>
			</div>
			<div class="no-border">
				<input class="button" type="submit" value="Submit" tabindex="5" />
				<?php comment_id_fields(); ?>
			</div>

	   </form>
		<?php endif; ?>
	</div>

 </div>
 
 <?php endif;?>