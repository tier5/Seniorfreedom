<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri();?>/css/toggle-nav.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
  <header class="main" id="siteheader">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
<!-- <nav class="navbar">

    <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="images/sfi.png" alt="img"></a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Our Programs</a></li>
    <li><a href="#">Step By Step</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact Us</a></li>
    </ul>

</nav> -->
<div class="logo">
    <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/sfi.png" alt="img"></a>
    </div>
  <div class="full-menu">  
  <a href="#menu" class="menu-link active"><span></span> Menu</a>
  <nav id="menu" class="menu">
    <!--<ul class="level-1">
      <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Our Programs</a></li>
    <li><a href="#">Step By Step</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact Us</a></li>
    </ul>-->
     <?php
$params = array(
'theme_location' => 'primary',
'menu_class' => 'level-1',
);
wp_nav_menu( $params );
?>
  </nav>
</div>
<div class="clearfix"></div>
              </div>
              <div class="col-md-3 header-info">
                  <p>Call To Find Out More</p>
                  <h2>888-111-1111</h2>
              </div>  
          </div>  
      </div>
  </header> 
