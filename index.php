<!--THIS LAYOUT IS USED FOR BLOG PAGE-->

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="blog-page sticky-top">
	<div class="wrapper">
		<div class="blog-content">
			<?php get_template_part( 'loop', 'index' );	?>
		</div>
		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>

<?php get_footer(); ?>