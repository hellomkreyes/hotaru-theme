<!--THIS IS FOR THE DEFAULT TEMPLATE-->
<?php get_header();  ?>

<!--CODE FOR THE HERO IMAGE - BASED ON SET FEATURED IMAGE-->
<?php $imageURL = hackeryou_get_thumbnail_url($post); ?>
<section class="featured-image  sticky-top" style="background-image: url(<?php echo $imageURL ?>);">
</section>

<!--CODE FOR THE BODY CONTENT-->
<section class="page">
  <div class="wrapper">
    <div class="page-side-container">
<!--START OF LOOP-->
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h3> <?php the_title(); ?> </h3>
        <div class="page post-details">
          <h4> Posted by <?php the_author(); ?> on
            <?php the_date('M d, Y'); ?>
          </h4>
        </div>
        <div class="header-line"></div>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <div class="post-nav">
          <div class="prev-link">
            <h4> <?php previous_post_link(); ?> </h4>
          </div>
          <div class="next-link">
            <h4> <?php next_post_link(); ?> </h4>
          </div>
        </div>
      <?php endwhile; // end the loop?>
<!--END OF LOOP-->
    </div>
<!--CODE FOR THE SIDEBAR WIDGETS-->
    <aside class="sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</section>

<?php get_footer(); ?>