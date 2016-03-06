<?php get_header(); ?>

<section class="error-page  sticky-top">
	<div class="wrapper">
		<div class="error-logo"><?php echo get_logo(); ?></div>
		<div class="error-container">
			<h1>Welcome to the Abyss</h1>
			<p>The page you requested could not be found. Perhaps it is lost forever. Or perhaps searching for it will help.</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>