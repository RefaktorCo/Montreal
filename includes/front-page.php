<?php
  function montreal_front_page($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>

<?php if (theme_get_setting('enable_slider') == '1') : ?>
<!-- SLIDESHOW CONTAINER WITH STRIPES BACKGROUND. CHANGE THE BELOE BG URL TO USE YOUR OWN BACKGROUND
PLEASE REMEMBER: THE BACKGROUND HAS LOW OPACITY TO MAKE SLIDESHOW VISIBLE.-->
<div class="container slideshow" >
	<section class="row largepadding">
	<div class="six columns bigpadding">
		<!-- SLIDESHOW CAPTION -->
		<?php echo theme_get_setting('slider_caption');?>	</div>
	</section>
</div>
<!-- END SLIDESHOW CONTAINER -->	
<?php endif; ?>

<?php if (theme_get_setting('enable_recent_projects') == '1') : ?>	
<!-- THICK STRIPE BORDER -->
<div class="smallpadding">
</div>
<!-- PORTFOLIO CONTAINER -->
<div class="container white bigpadding">
	<section class="row smallbottompadding">
	<h3 class="blacktext bold midbottommargin center"><?php echo theme_get_setting('recent_projects_title');?></h3>
	<!-- BLACKHORIZONTAL -->
	<div class="three columns alpha centered blackhorizontal">
	</div>
	<div class="four columns centered smalltoppadding">
		<p class="center">
			<a class="smallfont greytext" href="<?php echo theme_get_setting('recent_projects_link');?>">VIEW ALL PORTFOLIO</a>
		</p>
	</div>
	</section>
	<!-- BASIC PORTFOLIO ITEM ROW -->
	<section class="row midbottompadding recent_projects">
	<?php if(!$page['recent_projects']) {?>
	
	  <h4>Refer to the /documentation folder inside the theme for instructions on how to properly use this section.</h4>

	<?php } else { print render($page['recent_projects']); } ?>

	</section>
</div>
<!-- end of  portfolio container -->    
<?php endif; ?>

<?php if (theme_get_setting('enable_highlight') == '1') : ?>
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
		<h2 class="italic center whitetext"><?php echo theme_get_setting('highlight_text');?></h2>
	</div>
	<!-- WHITE HORIZONTAL -->
	<div class="alpha centered six columns whitehorizontal smallmargin">
	</div>
	</section>
</div>
<?php endif; ?>

<?php if (theme_get_setting('enable_recent_posts') == '1') : ?>
<!-- BLOG CONTENT CONTAINER WITH STRIPE PAGE BACKGROUND -->
<div class="container midpadding" style="background: url('<?php echo $root; ?>/img/stripes.png');">

	<section class="row midpadding white smallbottommargin">
		<h3 class="blacktext bold midmargin center"><?php echo theme_get_setting('recent_posts_title');?></h3>
		<div class="three columns alpha centered blackhorizontal"></div>
		<div class="four columns centered smalltoppadding">
			<p class="center">
				<a class="smallfont greytext" href="<?php echo theme_get_setting('recent_posts_link');?>">VIEW ALL NOTES</a>
			</p>
		</div>
	</section>
	<?php if(!$page['front_blog']) {?>
	
	<div class="row white">
	  <h4>Refer to the /documentation folder inside the theme for instructions on how to properly use this section.</h4>
	</div>
	
	<?php } else { print render($page['front_blog']); } ?>
	
</div>
<!-- END BLOG CONTAINER -->
<?php endif;?>

<?php if (theme_get_setting('enable_twitter_feed') == '1') : ?>
<!-- twitter container -->
<div class="container white">
	<section class="row bigpadding">
	<h2 class="light blacktext center icon-twitter"></h2>
	<div class="alpha seven columns centered">
		<div class="tweet">
		</div>
		<a href="#" class="blacktext">
		<h6 class="center bold meta"><?php echo theme_get_setting('twitter_handle');?></h6>
		</a>
	</div>
	</section>
</div>
<?php endif; ?>

<script type="text/javascript">
jQuery(document).ready(function ($) {

  // twitter 
  jQuery(document).ready(function ($) {
        $(".tweet").tweet({
            username: "<?php echo theme_get_setting('twitter_handle');?>",
            join_text: "auto",
            avatar_size: null,
            count: 1,
            auto_join_text_default: " we said,", 
            auto_join_text_ed: " we",
            auto_join_text_ing: " we were",
            auto_join_text_reply: " we replied to",
            auto_join_text_url: " we were checking out",
            loading_text: "loading tweets..."
        });
    });
  });
</script>

<?php if (theme_get_setting('enable_slider') == '1') : ?>
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
				  slides :  	
				  	[	// Slideshow Images
		          <?php $i = '1'; while ($i <= $slide_number) { ?>
							{image : '<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>'},
							<?php $i++; } ?>
						],
												
					// Theme Options			   
					progress_bar			:	1,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
});

</script>
<?php endif; ?>


  <!-- end main wrapper -->    
  
   <?php }
?>