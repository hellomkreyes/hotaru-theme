<!--THIS LAYOUT IS USED FOR BLOG PAGE-->

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="blog-page sticky-top">
	<div class="wrapper clearfix">
		<div class="blog-content">
			<?php get_template_part( 'loop', 'index' );	?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>