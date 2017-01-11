<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="container">
	<div class="row">
	
		<div class="col-sm-8">
			<div class="left-part">
				<h2><?php echo get_the_content();?></h2>
				<?php while(have_posts()):the_post();?>
				<div class="eachblog">
					<h3><?php echo get_the_title();?></h3>

					<span><?php echo get_the_date('F d, Y');?></span>
					<div class="social-share"><?php echo do_shortcode('[wp_social_sharing show_icons="1"]');?></div>
					<p><?php echo get_the_content();?></p>
					
				</div>
				<?php endwhile;?>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="contact-us">
				<h2>Contact Us</h2>
				<h3>Reassuring Reverse Mortgages</h3>
				<?php echo do_shortcode('[contact-form-7 id="43" title="Contact form 1"]');?>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="container-fluid">
	<div class="row">
		<div class="contact-ribbon">
			<h1>Are You Prepared to Survive Retirement?</h1>
			<div class="contact-btn"><a href="#">Contact Us</a></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
