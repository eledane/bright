<?php
/**
* Template name: About
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Bright 
* @since Bright 1.0
*/

get_header(); ?>
	
	  <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="page-hero">
	      <div class="container text-center">
		    <h1 class="hero-title">
		      about us
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

        <div class="block">
		  <div class="container">
		    <div class="row">
			  <div class="col-lg-4 col-md-4 col-sm-4">
			    <h2>Why choose us?</h2>
				<div class="line"></div>
				<ul style="margin-bottom: 10px;">
                  <li><i class="fa fa-check" style="color: #2ecc71; margin-right: 8px;"></i>Sed quis lobortis risus.</li>
                  <li><i class="fa fa-check" style="color: #2ecc71; margin-right: 8px;"></i>Donec malesuada augue lib.</li>
                  <li><i class="fa fa-check" style="color: #2ecc71; margin-right: 8px;"></i>Class aptent taciti sociosqu.</li>
                  <li><i class="fa fa-check" style="color: #2ecc71; margin-right: 8px;"></i>Duis autem vel eum iriure dolor.</li>
                </ul>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-4">
			    <h3>Our Mission</h3>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-4">
			    <h3>Our Vision</h3>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			  </div>			  
			</div>
		  </div>
		</div><!-- /.block -->
		
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
		      <img src="<?php bloginfo('template_url');?>/img/about02.jpg" alt="" />
		    </div>
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 60px;">
			  <h2>Our Skills</h2>
			  <div class="line"></div>
			  <div style="height: 30px; clear: both;"></div>
			  <div class="progress_block">								
				<div class="progress_text">
				  <p class="title">WordPress Development</p>
				  <p class="number">60%</p>
				</div>
				<div class="progress"><div data-level="60"></div></div>									
				<div class="progress_text">
				  <p class="title">Web design</p>
				  <p class="number">90%</p>
				</div>
				<div class="progress"><div data-level="90"></div></div>									
				<div class="progress_text">
				  <p class="title">Programming</p>
				  <p class="number">50%</p>
				</div>
				<div class="progress"><div data-level="40"></div></div>									
				<div class="progress_text">
				  <p class="title">Photography</p>
				  <p class="number">70%</p>
				</div>
				<div class="progress"><div data-level="70"></div></div>									
		      </div>			  
		      </div>			  
		  </div>
		</div><!-- /.container-fluid -->	
		<!-- /.block -->	
		<div class="block" style="padding-top: 0;">
          <div class="container">
		    <h2 class="text-center">Our Great Clients</h2>
			<div class="line center"></div>
			<p class="subtitle text-center">Duis autem vel eum iriure.</p>
		    <ul class="clients">
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo1.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo2.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo3.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo4.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo5.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url');?>/img/clients/logo6.png" alt="" /></li>
			</ul>
		  </div>
		</div><!-- /.block -->		
	  </div>
	  <!-- end content -->		  

<?php get_footer(); ?>
