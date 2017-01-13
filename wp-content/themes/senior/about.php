<?php
/*
*Template Name: About Page
*/ 
get_header();
?>
   <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
          <div class="left-part">
            <h2>About Senior Freedom</h2>
              <!--<div class="inner-banner">
                  <img src="images/about-banner.jpg" alt="img">

              </div>-->
            <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="inner-banner">
                  <!--<img src="images/about-banner.jpg" alt="img">-->
                  
                  <?php 
         if ( has_post_thumbnail() ) { 
          $thumbnail = get_the_post_thumbnail_url();
          ?>

                  <img src="<?php echo $thumbnail;?>" alt="img">
         
        <?php 
        } 
         ?>
              </div>
        
            <?php the_content(''); ?>
        <?php endwhile; ?>
        <?php endif; ?>
              
              <!--<h3>Solid Roots And Experience That Counts!</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
              </p>
              <h3>Our Reverse Mortgage Specialists Primarily Only Do Reverse Mortgages</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
              </p>-->

           </div>   
          </div>
          <div class="col-md-4 col-sm-4">
              <div class="contact-us">
        <h2>Contact Us</h2>
        <h3>Reassuring Reverse Mortgages</h3>
        <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]');?>
      </div>
          </div>
        </div>
    </div>
<div class="container-fluid">
<div class="row">
<div class="contact-ribbon">
  <h1>Are You Prepared to Survive Retirement?</h1>
  <div class="contact-btn"><a href="#">Contact Us</a></div>
</div>
</div>
</div>
<?php get_footer();?>