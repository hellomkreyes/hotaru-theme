<?php get_header(); ?>

<section class="tag-page sticky-top">
	<div class="wrapper clearfix">
		<div class="tag-content">
			
		  <h1>Tag: <?php single_tag_title(); ?></h1>
		  <?php get_template_part( 'loop', 'tag' ); ?>

		</div>

		<?php get_sidebar(); ?>

	</div>
</section>

<?php get_footer(); ?>