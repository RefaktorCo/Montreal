<?php
  function montreal_front_page($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>

<!-- SLIDESHOW CONTAINER WITH STRIPES BACKGROUND. CHANGE THE BELOE BG URL TO USE YOUR OWN BACKGROUND
PLEASE REMEMBER: THE BACKGROUND HAS LOW OPACITY TO MAKE SLIDESHOW VISIBLE.-->
<div class="container slideshow" >
	<section class="row largepadding">
	<div class="six columns bigpadding">
		<!-- SLIDESHOW STATEMENT -->
		<h1 class="bigtoppadding whitetext"><span class="light">WE CREATE</span><br/>BRANDS PEOPLE LOVE</h1>
		<h5 class="white blacktext smallsidepadding">MONTREAL DESIGN STUDIO</h5>
		<p class="whitetext meta">
			 We've cleaned up the air, but polluted the soul. We write more, but learn less. We plan more, but accomplish less. We've learned to rush, but not to wait. We write more, but learn less. We plan more, but accomplish less.
		</p>
	</div>
	</section>
</div>
<!-- END SLIDESHOW CONTAINER -->		
<!-- THICK STRIPE BORDER -->
<div class="smallpadding">
</div>
<!-- PORTFOLIO CONTAINER -->
<div class="container white bigpadding">
	<section class="row smallbottompadding">
	<h3 class="blacktext bold midbottommargin center">OUR RECENT WORK</h3>
	<!-- BLACKHORIZONTAL -->
	<div class="three columns alpha centered blackhorizontal">
	</div>
	<div class="four columns centered smalltoppadding">
		<p class="center">
			<a class="smallfont greytext" href="/portfolio.html">VIEW ALL PORTFOLIO</a>
		</p>
	</div>
	</section>
	<!-- BASIC PORTFOLIO ITEM ROW -->
	<section class="row midbottompadding">
	<!-- ITEM ONE -->
	<div class="item four columns alpha">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">01</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	<!-- ITEM TWO -->
	<div class="item four columns">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">02</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	<!-- ITEM THREE -->
	<div class="item four columns">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">03</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	</section>
</div>
<!-- end of  portfolio container -->    
<!-- THICK STRIPE BORDER -->
<div class="smallpadding">
</div>
<!-- QUOTE CONTAINER WITH STRIPE BACKGROUND AND SLIDESHOW IN THE BACK -->
<div class="container largepadding_back">
	<section class="row bigpadding">
	<!-- WHITE HORIZONTAL -->
	<div class="alpha centered six columns whitehorizontal midmargin">
	</div>
	<!-- QUOTE -->
	<div class="alpha eleven columns centered">
		<h2 class="italic center whitetext">"There's no such thing as simple. Simple is hard"</h2>
	</div>
	<!-- WHITE HORIZONTAL -->
	<div class="alpha centered six columns whitehorizontal smallmargin">
	</div>
	</section>
</div>


<!-- BLOG CONTENT CONTAINER WITH STRIPE PAGE BACKGROUND -->
<div class="container midpadding">
	<section class="row midpadding white smallbottommargin">
	<h3 class="blacktext bold midmargin center">OUR RECENT NOTES</h3>
	<div class="three columns alpha centered blackhorizontal">
	</div>
	<div class="four columns centered smalltoppadding">
		<p class="center">
			<a class="smallfont greytext" href="/blog.html">VIEW ALL NOTES</a>
		</p>
	</div>
	</section>
	
	<?php print render($page['front_blog']); ?>
	
</div>
<!-- END BLOG CONTAINER -->

<!-- twitter container -->
<div class="container white">
	<section class="row bigpadding">
	<h2 class="light blacktext center icon-twitter"></h2>
	<div class="alpha seven columns centered">
		<div class="tweet">
		</div>
		<a href="#" class="blacktext">
		<h6 class="center bold meta">TWITTER USERNAME</h6>
		</a>
	</div>
	</section>
</div>
<script src="<?php echo $root;?>/js/supersized.js"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
  $.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   7000,		// Length between transitions
					transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :  0,			// Thumbnail navigation
				  slides :  	[	// Slideshow Images
									{image : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/h11.jpeg', thumb : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/bg.jpg'},
								{image : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/h22.jpeg', thumb : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/bg.jpg'},
									{image : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/h33.jpeg', thumb : 'http://localhost:8888/development/montreal/sites/all/themes/montreal//preview/bg.jpg'},
									{image : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/h44.jpeg', thumb : 'http://localhost:8888/development/montreal/sites/all/themes/montreal/preview/bg.jpg'}
									
							],
												
					// Theme Options			   
					progress_bar			:	1,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
});

</script>



  <!-- end main wrapper -->    
  
   <?php }
?>