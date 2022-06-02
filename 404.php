<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="py-5">
			<h2><?php esc_html_e('Not found', 'engineering-manufacturing'); ?></h2>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'engineering-manufacturing'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>