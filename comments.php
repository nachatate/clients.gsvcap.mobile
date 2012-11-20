<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div class="gsv-comments-respond" id="respond">


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<h4 class="gsv-moving-ideas-comments-headline">Add a Comment</h4>


<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-label">
		<label for="author">Name</label>
</div>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>


<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-label">
	<label for="email">Mail</label>

</div>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>



<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-label">
	<label for="url">Website</label>

</div>
<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
</p>




<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-label">
	<label for="comment">Content</label>

</div>
<p><textarea name="comment" id="comment"  tabindex="4"></textarea></p>
<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-label">
	<label for="url"></label>

</div>
<p><button name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" >Post Comment</button>
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
