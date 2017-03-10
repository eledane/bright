<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="img/favicon.ico">
    <?php
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ): ?>
    <title><?php bloginfo('name'); ?><?php echo " | $site_description";?></title>
    <?php else: ?>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="fakeloader"></div>  
 
	<!-- start wrapper -->	
    <div class="wrapper">	
	
		  <!-- start top-wrapper -->	
      <div class="top-wrapper"> 	  
        <div class="top-bar"> 
		  <div class="container">
		    <div class="row">
			  <div class="col-lg-6 col-md-6 col-sm-6">
			    <ul class="top-contact">
				  <li><i class="fa fa-map-marker"></i>1234 Street Name, City Name, Location</li> 
                  <li><a href="mailto:#"><i class="fa fa-envelope"></i>office@yourdomain.com</a></i>				  
				</ul>
			  </div>
			  <div class="col-lg-6 col-md-6 col-sm-6">
				<ul class="top-social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>				
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>				
				</ul>
			  </div>			  
		    </div>
		  </div>
	    </div><!-- /.top-bar -->			
	    <div class="header">
		  <div class="container">
		    <div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12">
	            <a class="responsive-menu" href="#menu"><i class="fa fa-navicon"></i></a>
	            <a class="logo-light" href="index.html"><img src="<?php bloginfo('template_url'); ?>/img/logo_light.png" alt="" /></a>
                <ul class="second-nav">				
				  <li><a id="trigger-overlay" href="#"><i class="fa fa-search"></i></a></li>
				</ul><!-- /.second-nav -->
				<nav class="menu">
          <ul>
			       <?php
               $header_menu_args = array(
                      'theme_location' => 'header-menu',
                      'container'      => false,
                      'items_wrap'     => '%3$s',
                      'walker'         =>  new Enchuang_Header_Menu()
                      );
                wp_nav_menu($header_menu_args);
                ?>
           </ul>
				</nav>
		      </div>
		    </div>
		  </div>
	    </div><!-- /.header -->		
	  </div>
	  <!-- end top-wrapper -->	  
