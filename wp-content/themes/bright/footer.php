<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
	  <!-- start footer -->	  
	  <footer class="footer">	  
	    <div class="footer-top">		
	      <div class="container">		  
	        <div class="row">			
	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <a class="logo" href="index.html"><img src="<?php bloginfo('template_url'); ?>/img/logo_light.png" alt="" /></a>
				<p class="text-widget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non magna. Mattis purus sit amet fermentum.</p>
				<p class="text-widget">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>				
		      </div>			  
	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title">Latest From Our Blog</h5>	
				<ul class="post-list">
				  <li><a href="#">Ibiza amazing 5 star hotel</a><p class="date">June 7, 2015</p></li>
				  <li><a href="#">It's time to get discounts</a><p class="date">June 7, 2015</p></li>
				  <li><a href="#">It's a good hotel for you</a><p class="date">June 7, 2015</p></li>				  
				</ul>					
		      </div>			  
	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title">tag cloud</h5>		
				<div class="tags">
			      <div class="tag"><a href="">awesome</a></div>
			      <div class="tag"><a href="">flat</a></div>
			      <div class="tag"><a href="">creative</a></div>
			      <div class="tag"><a href="">theme</a></div>
			      <div class="tag"><a href="">css</a></div>
			      <div class="tag"><a href="">multipurpose</a></div>
			      <div class="tag"><a href="">ipad</a></div>
			      <div class="tag"><a href="">business</a></div>
			      <div class="tag"><a href="">portfolio</a></div>
			      <div class="tag"><a href="">corporate</a></div>
			      <div class="tag"><a href="">html</a></div>
			      <div class="tag"><a href="">website</a></div>
			    </div>					
		      </div>			  
	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title">Keep in Touch</h5>
			  <ul class="footer-contact">
			    <li><i class="fa fa-map-marker"></i><span>Adress: 1234 The Street Name, <br> The City Name, The Location</span></li>
			    <li><i class="fa fa-phone"></i><span>Phone: +1 (234) 567-89-10</span></li>	
			    <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:#">office@yourdomain.com</a></span></li>				
			  </ul>	
				<ul class="footer-social">
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
		</div>
		<!-- end footer-top -->		
		<!-- start footer-bottom -->		
	    <div class="footer-bottom">		
	      <div class="container">		  
	        <div class="row">			
	          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p>Copyright &copy; 2015 <a href="#">alphawd</a>. All Rights Reserved.</p></div>
	          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    <ul class="footer-menu">
			      <li><a href="#">FAQ's</a></li>
			      <li><a href="#">Sitemap</a></li>
			      <li><a href="#">Contact</a></li>
			    </ul>		
		      </div>		  
		    </div>			
		  </div>		  
		</div>		
		<!-- end footer-bottom -->		
	  </footer>
	  <!-- end footer -->		  	  
	  <nav id="menu">
	    <ul>
	      <li><a href="index.html">Home</a></li>
	      <li><a href="#">Sample pages</a>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="about_2.html">About Us 2</a></li>
						<li><a href="services.html">Services</a></li>	
						<li><a href="services_2.html">Services 2</a></li>	
						<li><a href="full-width.html">Full Width</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>	
						<li><a href="right-sidebar.html">Right Sidebar</a></li>		
						<li class='sub'>
							<a href='#'>Multi-Level Drop-Down</a>
							<ul>
							  <li><a href='#'>Drop-Down Example</a></li>
							  <li><a href='#'>Drop-Down Example</a></li>								
							  <li class='last'><a href='#'>Drop-Down Example</a></li>
							</ul>
						</li>
					</ul>	    
		  </li>
	      <li><a href="portfolio.html">Portfolio</a>
				    <ul>
						<li><a href="portfolio_2_cols.html">2 Columns</a></li>
						<li><a href="portfolio_3_cols.html">3 Columns</a></li>
						<li><a href="portfolio_4_cols.html">4 Columns</a></li>
						<li><a href="single_project.html">Single Project</a></li>
					</ul>		  
		  </li>
	      <li><a href="blog.html">Blog</a>
					<ul>
						<li><a href="blog.html">Right Sidebar</a></li>
						<li><a href="blog_left_sidebar.html">Left Sidebar</a></li>
						<li><a href="blog_full_width.html">Full Width</a></li>
						<li><a href="blog_single_post.html">Single Post</a></li>	
					</ul>		  
		  </li>
	      <li><a href="#" data-toggle="modal" data-target="#myModal">Contact us</a></li>
	    </ul>
	  </nav><!-- /#nav -->	
    <!-- start modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">  
        <div class="modal-content">	
          <div class="modal-header">
	        <div class="form-top-left ">
              <h4 class="modal-title" id="myModalLabel">Contact us</h4>
		      <p class="modal-subtitle">Fill in the form bellow to send us a message:</p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-envelope"></i>
            </div>
          </div>	  
          <div class="modal-body">	  
            <!-- contacts -->
            <div id="contacts">	  
              <div class="row">			
                <!-- alignment -->
	            <div class="col-lg-12 col-md-12 col-sm-12">
	              <!-- form itself -->
                  <form name="sentMessage" class="" id="contactForm" novalidate>
		            <div class="control-group">
                      <div class="controls">
			            <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
			            <p class="help-block"></p>
		              </div>
	                </div>			 
                    <div class="control-group">
                      <div class="controls">
			            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
		              </div>
	                </div>			  
                    <div class="control-group">
                      <div class="controls">
		                <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
		              </div>
                    </div>			   
	                <div id="success"> </div> <!-- For success/fail messages -->		 
	                <button type="submit" class="btn btn-primary pull-left">Send message</button><br>		
                  </form>		  
	            </div>	
              </div>	  
            </div>	
          </div>	  
        </div>	
      </div>  
    </div>	
    <!-- end modal -->		  
	  <div class="overlay overlay-scale">
	    <button type="button" class="overlay-close">Close</button>
	    <div class="container">
          <form id="header-search-form" class="center-block" method="get" action="#">
            <input id="header-search" type="text" onblur="if (this.value == '')this.value = 'Start Typing...';" onfocus="if (this.value == 'Start Typing...')this.value = '';" autocomplete="off" style="height:150px;" value="Start Typing..." name="s">
          </form>
	    </div>	
	  </div><!-- /.overlay -->  
	
    </div>
	<!-- end wrapper -->	

<?php wp_footer(); ?>
</body>
</html>
