<!--THIS IS FOR THE LANDING PAGE-->
<?php 

/*
	Template Name: Hotaru Front Page
*/

get_header(); ?>

<?php $imageURL = hackeryou_get_thumbnail_url($post); ?>
<header style="background-image: url(<?php echo $imageURL ?>);">
	<div class="wrapper">
		<div class="hero-content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<!--find a way to make this not hard-coded-->
				<h1 class="title">Hotaru</h1>
				<?php the_content(); ?>

			<?php endwhile; // end the loop?>
		</div>
	</div>
	<div class="header-button-container">
		<a href="#features" class="smoothScroll">
	  		<i class="fa fa-chevron-down"></i>
		</a>
	</div>
</header>
<!--HARD CODED FEATURES SECTION-->
<section id="features" class="features">
	<div class="wrapper">
		<h2>Illuminate your content</h2>
		<h4>with the elegant <span>hotaru</span> theme</h4>
		<ul class="features--container clearfix">
			<li>
				<div class="icon-container">
					<i class="fa fa-pencil"></i>
				</div>
				<p>Custom Made</p>
			</li>
			<li>
				<div class="icon-container">
					<i class="fa fa-diamond"></i>
				</div>
				<p>Sophisticated</p>
			</li>
			<li>
				<div class="icon-container">
					<i class="fa fa-mobile"></i>
				</div>
				<p>Responsive</p>
			</li>
			<li>
				<div class="icon-container">
					<i class="fa fa-empire"></i>
				</div>
				<p>Versatile</p>
			</li>
		</ul>
	</div>
</section>
<!--HARD CODED ABOUT INTRO SECTION-->

<section id="front-about" class="about" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/sparkles.jpg);" >
	<div class="wrapper">
		<div class="logo-container">
			<?php echo get_logo(); ?>
		</div>
		<div class="about-container">
			<div class="about-inner-container">
				<p>Suitable for all kinds of content, learn how this theme can help you make your website shine.</p>
				<!--specifically link to the about page-->
				<a href=" <?php echo esc_url( get_permalink( get_page_by_title('About'))); ?> " class="learn-more">Learn More</a>
			</div>
		</div>
	</div>
</section>
<!--THE BIG MOFO BLOG POST LOOP-->
<section class="featured-blogs">
	<div class="wrapper clearfix">
		<ul>
		<?php $blogQuery = new WP_Query( 
			array(
				'posts_per_page' => 3,
				'post_type' => 'post',
				'tag' => 'featured'
			)
		 ); ?>
	        <?php if ( $blogQuery->have_posts() ) : ?>
	            <?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
	            	
					<li class="blog-thumbnail">
		            	<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?> 
	            	</li>
	            	<li class="blog-excerpt">
		            	<h3><a href="<?php the_permalink(); ?>">
			            	    <?php the_title(); ?>
			            	</a></h3>
			            <div class="post-details-container">
			            	<h4><?php the_author(); ?></h4>
			            	<h4 id="post-date"><?php the_date('M d, Y'); ?></h4>
			            </div>
		            	<p><?php the_excerpt(); ?></p>
		            </li>
	            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
            <h3>No posts to display. ¯\_(ツ)_/¯</h3>
        <?php endif; ?>
        </ul>
	</div>
</section>
<?php get_footer(); ?>