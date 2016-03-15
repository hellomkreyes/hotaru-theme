<?php get_header(); ?>


<section class="category-page sticky-top">
  <div class="wrapper clearfix">
    <div class="category-content">

        <h1>Category: <?php single_cat_title(); ?></h1>
        <?php
          $category_description = category_description();
          if ( ! empty( $category_description ) )
            echo '' . $category_description . '';
           get_template_part( 'loop', 'category' );
          ?>
    </div>

    <?php get_sidebar(); ?>

  </div>
</section>


<?php get_footer(); ?>