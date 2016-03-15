<?php get_header(); ?>

<section class="search-page sticky-top">
	<div class="wrapper clearfix">
		
	<div class="content">
		<?php if ( have_posts() ) : ?>

			<h1>Search Results for: <?php echo get_search_query(); ?></h1>
			<?php get_template_part( 'loop', 'search' ); ?>

		<?php else : ?>

			<h2>Welcome to Nothingness</h2>
			<p>Nothing matched your search criteria. To escape, please try some different keywords.</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div> <!-- /.content -->

	<?php get_sidebar(); ?>

	</div>
</section>

<?php get_footer(); ?>
