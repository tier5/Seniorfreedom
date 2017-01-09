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
        <div class="col-sm-6">
          <div class="social-media">
            <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="callat">Call us today at (888) 111-11111</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-middle">
        <div class="col-md-6">
          <h3>Senior Freedom Inc.</h3>
          <ul>
            <li>
              <p>2505 Wanakah Ridge Dr</p> 
              <p>Cedar Park, TX 78613</p>
            </li>
            <li>
              <p>Phone: (888) 111-1111</p>
              <p>Fax: (512) 266-2652</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri();?>/images/equalhousing-01.png" class="img-responsive">
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="row footer-menu">
            <ul>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Our Programs</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-bottom">
        <div class="col-md-12">
          <p>This website was not created by HUD or FHA and has not been approved by HUD or any government agency</p>
          <p>"CONSUMERS WISHING TO FILE A COMPLAINT AGAINST A COMPANY OR A RESIDENTIAL MORTGAGE LOAN ORIGINATOR SHOULD COMPLETE AND SEND A COMPLAINT FORM TO THE TEXAS DEPARTMENT OF SAVINGS AND MORTGAGE LENDING, 2601 NORTH LAMAR, SUITE 201, AUSTIN, TEXAS 78705. COMPLAINT FORMS AND INSTRUCTIONS MAY BE OBTAINED FROM THE DEPARTMENT’S WEBSITE AT WWW.SML.TEXAS.GOV. A TOLL-FREE CONSUMER HOTLINE IS AVAILABLE AT 1-877-276-5550.</p>
          <p>THE DEPARTMENT MAINTAINS A RECOVERY FUND TO MAKE PAYMENTS OF CERTAIN ACTUAL OUT OF POCKET DAMAGES SUSTAINED BY BORROWERS CAUSED BY ACTS OF LICENSED RESIDENTIAL MORTGAGE LOAN ORIGINATORS. A WRITTEN APPLICATION FOR REIMBURSEMENT FROM THE RECOVERY FUND MUST BE FILED WITH AND INVESTIGATED BY THE DEPARTMENT</p>
          <p class="copyright">© <?php echo date("Y"); ?> Senior Freedom All Rights Reserved. Developed by: <img src="images/logo-small.jpg" class="img-responsive"></p>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/toggle-nav.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
