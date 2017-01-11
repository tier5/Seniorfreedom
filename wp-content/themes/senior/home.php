<?php
/*
*Template Name: Front Page
*/
get_header();
?>
<!-- Main Content Start -->
<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="banner-txt row">
					<?php global $post;
				$args = array( 'post_type' => 'home_section', 'category_name' => 'home-banner' );
				$posts = get_posts( $args );
				//echo'<pre>';
				//print_r($posts); exit();
				foreach( $posts as $post ): setup_postdata($post); 
				the_content();
				?>

				<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="home-contact-ribbon">
			<div class="contact-ribbon">
				<h1>Are You Prepared to Survive Retirement?</h1>
				<h2>We can help with a Reverse Mortgage</h2>
			</div>
		</div>
	</div>
</div>
<div class="third-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<div class="banner-txt row">
					<?php 
				$args = array( 'post_type' => 'home_section', 'category_name' => 'home-middle' );
				$posts = get_posts( $args );
				//echo'<pre>';
				//print_r($posts); exit();
				foreach( $posts as $post ): setup_postdata($post); 
				
				?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();?>
				<?php 

				endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="message">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Contact Us To Learn More About Our <br>
				Reverse Mortgages For You Or A Loved One</h2>
				<?php echo do_shortcode('[contact-form-7 id="66" title="Home Contact Form"]');?>
				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="fourth-section">
	<div class="container">
		<div class="row">
			<?php 
				$args = array( 'post_type' => 'home_section', 'category_name' => 'home-bottom' );
				$posts = get_posts( $args );
				//echo'<pre>';
				//print_r($posts); exit();
				foreach( $posts as $post ): setup_postdata($post); 
				?>
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<?php the_content();?>
			</div>
			
			<div class="col-sm-5">
				<div class="right-sec">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"/>
					</a>
			<?php endif; ?>
					<!--<img src="<?php echo get_template_directory_uri();?>/images/img3.png" class="img-responsive">-->
					<div class="contact-btn"><a href="#">Contact Us</a></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="clear"></div>
<?php get_footer();?>