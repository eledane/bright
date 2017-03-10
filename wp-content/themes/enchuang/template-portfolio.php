<?php
/**
* Template name: Product 
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
	    <div class="portfolio-hero">
	      <div class="container text-center">
		    <h1 class="hero-title">
		      Product
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<!-- start block -->
		<div class="block blue">
		
       <div class="container">

       <section id="portfolio-section">
        <div class="wrap-pad first">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " >
                    <div class="text-center">
                        <ul class="portfolio-filter">
                            <li><a class="active margin-5" href="#" data-filter="*">All</a></li>
                            <li><a class="" href="#" data-filter=".jquery">Jquery</a></li>
                            <li><a class="" href="#" data-filter=".html">HTML</a></li>
                            <li><a class="" href="#" data-filter=".wordpress">Wordpress</a></li>
                        </ul>
                    </div>
                </div>
                <!-- ./ Filter Head div-->
                <div class="col-md-12 col-sm-12" >
                    <ul class="portfolio-items col-3-space">
                        <li class="portfolio-item jquery">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/1.jpg" alt="img01"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
                       
                        <li class="portfolio-item  wordpress">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/2.jpg" alt="img02"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item  wordpress ">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/3.jpg" alt="img03"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item jquery html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/4.jpg" alt="img04"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item wordpress html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/5.jpg" alt="img05"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item jquery html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/6.jpg" alt="img06"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item wordpress html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/7.jpg" alt="img07"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
						
                        <li class="portfolio-item jquery html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/8.jpg" alt="img08"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>	
						
                        <li class="portfolio-item jquery html">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/9.jpg" alt="img09"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
                                </div>
                            </div>
                        </li>							
						
                    </ul>
                </div>
                <!-- ./ Content div-->
            </div>
        </div>

    </section>		  
		  
		  
		</div>
		  
		</div>	
		<!-- end block -->
		
	  </div>
	  <!-- end content -->		  
	  
 <?php get_footer(); ?>
