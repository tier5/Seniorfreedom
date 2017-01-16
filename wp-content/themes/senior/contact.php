<?php
/*
*Template Name: Contact Page
*/ 
get_header();
?>
<div class="contact-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 align-center contact-page">
                  <!--<div class="contact-logo">
             <img src="<?php echo get_template_directory_uri(); ?>/images/sfi.png" alt="SFI">
                  </div>--> 
                  <h1>Contact Us </h1><h2>Fill out the form below find out how we can assist you with a reverse mortgage</h2> 
               <?php echo do_shortcode('[contact-form-7 id="66" title="Contact form 2"]');?>
               </div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
      <div class="contact-info">
      <div class="container">
         <div class="row">
         <div class="col-md-12 col-sm-12">
            <h3>Our Contact Information & Map</h3>
            <div class="row">
               <?php if ( is_active_sidebar( 'contact_bottom' ) ) : ?>
         <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'contact_bottom' ); ?>
         </div><!-- #primary-sidebar -->
      <?php endif; ?>
            </div>
         </div>   
         </div>
      </div>   
      </div>
      <?php get_footer();?>
