<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container my-5">
					<?php
					if ( $post->post_content ) {
						the_content(); } ?>
	</div>
</article>

<?php get_footer(); ?>
