<?php if (have_posts()): ?>

<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="3" scroll="false" pause="true" button_label="Load more"]'); ?>

<script>
jQuery(function($) {
	$('#load-more').click();
});
</script>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
