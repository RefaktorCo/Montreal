<?php 
function montreal_header($page){
  global $root; 
?>

  <header>
    <div class="container">     
      <section class="row">  
        <div class="four columns branding" >
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
              <h2 id="main_title_slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
          <?php endif; ?>
        </div>
      	<div class="eight columns"> 
          <div id="nav">
            <!-- begin menu -->
           <nav id="navigationmain">
             
				          <?php print theme('links__system_main_menu', array(
				            'attributes' => array(
				              'id' => 'main-menu-links',
				              'class' => array('links', 'clearfix'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); 
				          ?>
            
             </nav>
				      </div> 
				        
				    </div> 
				 
            <!-- end menu -->   
          </section> 
        </div>
        <!-- end main span2 -->  
       
       <?php //(used for demo only) montreal_style_switch(); ?>
          
  </header> 
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

<?php }
?>