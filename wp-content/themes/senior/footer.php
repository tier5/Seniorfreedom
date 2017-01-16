<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<div class="clear"></div>
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="footer-top">
      	 <?php if ( is_active_sidebar( 'footer_social' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_social' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
        <!--<div class="col-sm-6">
          <div class="social-media">
            <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="callat">Call us today at (888) 111-11111</div>
        </div>-->
      </div>
    </div>
    <div class="row">
      <div class="footer-middle">
        <div class="col-md-6">
          <?php if ( is_active_sidebar( 'footer_address' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_address' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
        </div>
        <div class="col-md-6">
          <div class="row footer-menu">
          	 <?php if ( is_active_sidebar( 'footer_menu' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_menu' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-bottom">
        <div class="col-md-12">
        	<?php if ( is_active_sidebar( 'footer_desc' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_desc' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/toggle-nav.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.open-menu').click(function(e){
      $('.menu-mobile').slideToggle("slow").parent().toggleClass('open');
      e.preventDefault();
    });
  });
</script>
</html>
