<?php
/**
* Template name: News 
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
	    <div class="blog-hero">
	      <div class="container text-center">
		    <h1 class="hero-title">
		      News &amp; events
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<div class="block grey">
		
		<div class="container">
		
		  <div class="row">
		  
		    <div class="col-lg-9 col-md-9 col-sm-9">
			
		      <div class="post">
			    <div class="post-thumbnail">
				  <img src="<?php bloginfo('template_url'); ?>/img/blog/b01.jpg" alt="" />
				</div>
				<div class="post-text">
				  <div class="post-title">
                    <h2>
                      <span class="date">19 Oct</span>
                      <a href="blog_single_post.html">A post with an image</a>
                    </h2>				
				  </div>
                  <div class="post_info">
                    <span class="time">Posted at 20:00h</span>
                    in
                    <a href="#">Lifestyle</a>
                    <span class="post_author">
                      by
                      <a class="post_author_link" href="#"><i class="icon-user" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>admin</a>
                    </span>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <a class="post_comments" href="#"><i class="icon-comment" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>2 Comments</a>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_like">
                      <a href="#"><i class="icon-heart" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>
                        101
                        <span> Likes</span>
                      </a>
                    </div>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_share">
                      <a href=""><i class="icon-paper-plane" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>Share</a>
                    </div>	
			      </div>			  
			      <div class="post_details">
			        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...</p>
			      </div>
                  <div class="post_more">
                    <a class="btn btn-default" href="blog_single_post.html">read more</a>				  
			      </div>
			    </div>
		      </div>			
		
		      <div class="post">
			  
                <div id="post-slider" class="owl-carousel">

                  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/blog/b02.jpg" alt="" /></div>
                  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/blog/b03.jpg" alt="" /></div>
                  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/blog/b04.jpg" alt="" /></div>

                </div>
			  
				<div class="post-text">
				  <div class="post-title">
                    <h2>
                      <span class="date">19 Oct</span>
                      <a href="blog_single_post.html">A post with a slider</a>
                    </h2>				
				  </div>
                  <div class="post_info">
                    <span class="time">Posted at 19:00h</span>
                    in
                    <a href="#">Photography</a>
                    <span class="post_author">
                      by
                      <a class="post_author_link" href="#"><i class="icon-user" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>admin</a>
                    </span>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <a class="post_comments" href="#"><i class="icon-comment" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>2 Comments</a>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_like">
                      <a href="#"><i class="icon-heart" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>
                        101
                        <span> Likes</span>
                      </a>
                    </div>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_share">
                      <a href=""><i class="icon-paper-plane" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>Share</a>
                    </div>	
			      </div>				  
			      <div class="post_details">
			        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...</p>
			      </div>
                  <div class="post_more">
                    <a class="btn btn-default" href="blog_single_post.html">read more</a>				  
			      </div>
			    </div>
		      </div>	

		      <div class="post">
                <div class="f_content embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/87701971"></iframe>
                </div>
				<div class="post-text">
				  <div class="post-title">
                    <h2>
                      <span class="date">19 Oct</span>
                      <a href="blog_single_post.html">A post with video</a>
                    </h2>				
				  </div>
                  <div class="post_info">
                    <span class="time">Posted at 18:00h</span>
                    in
                    <a href="#">Nature</a>
                    <span class="post_author">
                      by
                      <a class="post_author_link" href="#"><i class="icon-user" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>admin</a>
                    </span>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <a class="post_comments" href="#"><i class="icon-comment" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>2 Comments</a>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_like">
                      <a href="#"><i class="icon-heart" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>
                        101
                        <span> Likes</span>
                      </a>
                    </div>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_share">
                      <a href=""><i class="icon-paper-plane" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>Share</a>
                    </div>	
			      </div>				  
			      <div class="post_details">
			        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...</p>
			      </div>
                  <div class="post_more">
                    <a class="btn btn-default" href="blog_single_post.html">read more</a>				  
			      </div>
			    </div>
		      </div>
			  <!-- end post -->
			  
		      <div class="post">

				<div class="post-text">
                  <div class="post_info">
                    <span class="time">Posted at 17:00h</span>
                    in
                    <a href="#">Science</a>
                    <span class="post_author">
                      by
                      <a class="post_author_link" href="#"><i class="icon-user" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>admin</a>
                    </span>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <a class="post_comments" href="#"><i class="icon-comment" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>2 Comments</a>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_like">
                      <a href="#"><i class="icon-heart" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>
                        101
                        <span> Likes</span>
                      </a>
                    </div>
                    <span class="dots">
                      <i class="fa fa-square"></i>
                    </span>
                    <div class="blog_share">
                      <a href=""><i class="icon-paper-plane" style="font-size: 14px; float: left; color: #989797; margin-right: 2px;"></i>Share</a>
                    </div>	
			      </div>			  
			      <div class="post_details">
                    <i class="qoute_mark fa fa-quote-right pull-left"></i>
                    <div class="post_title">
                      <p>
                        <a href="#"> Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet. </a>
                      </p>
                      <span class="quote_author">— Albert Einstein</span>
                    </div>
			      </div>

			    </div>
		      </div>				  
			
		    </div>
			
		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar">
			  
			    <div id="recent-posts" class="widget posts_holder">
                  <h5>Recent Posts</h5>
                  <ul>
                    <li>
                      <a href="#">Tation ullamcorper suscipit </a>
                    </li>
                    <li>
                      <a href="#">Ut wisi enim ad minim veniam</a>
                    </li>
                    <li>
                      <a href="#">Lobortis nisl ut aliquip ex ea</a>
                    </li>
                    <li>
                      <a href="#">Duis autem vel eum iriure</a>
                    </li>
                    <li>
                      <a href="#">Dolor in hendrerit in vulputate</a>
                    </li>
                  </ul>
                </div>

                <div id="categories" class="widget posts_holder">
                  <h5>Categories</h5>
                  <ul>
                    <li class="cat-item">
                      <a href="#">Lifestyle</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Science</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Nature</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Events</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Photography</a>
                    </li>
                  </ul>
                </div>

                <div id="tag_cloud" class="widget posts_holder">
                  <h5>Tags</h5>
                  <div class="tagcloud">
                    <a href="#">Bootstrap</a>
                    <a href="#">Art</a>
                    <a href="#">People</a>
                    <a href="#">Website</a>
                    <a href="#">Culture</a>
                    <a href="#">Business</a>					
                    <a href="#">Nature</a>
                    <a href="#">Science</a>
                    <a href="#">Photography</a>
                    <a href="#">Gadgets</a>
                    <a href="#">Lifestyle</a>
                    <a href="#">Events</a>
                    <a href="#">Cinema</a>
                    <a href="#">Music</a>
                  </div>
                </div>
				
			  </aside>
			  <!-- end sidebar -->
			  
		    </div>		
			
		  </div>
		  
		</div>
		
		</div>	
		
	  </div>
	  <!-- end content -->		  
<?php get_footer(); ?>
