<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<?php $imageURL = hackeryou_get_thumbnail_url($post); ?>

<section class="featured-image" style="background-image: url(<?php echo $imageURL ?>);">
</section>

<section class="single-body">
	<div class="wrapper">
		<div class="single-container"> <!--apply gold border-->
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
			<?php endwhile; // end the loop?>		
			<div class="post-nav">
				<div class="prev-link">
					<i class="fa fa-chevron-left"></i>
					<h4>Prev</h4>
				</div>
				<div class="next-link">
					<h4>Next</h4>
					<i class="fa fa-chevron-right"></i>
				</div>
			</div>
	</div>
</section>
<div class="main">
  <div class="container">

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>