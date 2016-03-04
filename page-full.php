<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<!--CODE FOR THE HERO IMAGE - BASED ON SET FEATURED IMAGE-->
<?php $imageURL = hackeryou_get_thumbnail_url($post); ?>
<section class="featured-image" style="background-image: url(<?php echo $imageURL ?>);">
</section>

<!--CODE FOR THE BODY CONTENT-->
<section class="single-body">
	<div class="wrapper">
		<div class="single-container"> <!--apply gold border-->
<!--START OF LOOP-->
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h3><?php the_title(); ?></h3>
				
				<div class="single-details-container">
					<h4><?php the_author(); ?></h4>
					<h4><?php the_date('M d, Y'); ?></h4>
				</div>
				
				<div class="header-line"></div>
				
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				
				<div class="post-nav">
					<div class="prev-link">
						<h4><?php previous_post_link(); ?></h4>
					</div>
					<div class="next-link">
						<h4> <?php next_post_link(); ?> </h4>
					</div>
				</div>
			<?php endwhile; // end the loop?>
<!--END OF LOOP-->
		</div>
	</div>
</section>

<?php get_footer(); ?>