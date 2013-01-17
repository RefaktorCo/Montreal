<?php global $root; montreal_header($page);?>
      
	<div class="bigpadding" style="background:url(<?php echo $root;?>/img/stripes.png);">
  </div>
	  
  <div class="container black nopadding">
	  <section class="row bigtoppadding">
	  	<h3 class="whitetext bold midbottommargin center">SOME OF OUR WORK</h3>
			<div class="five columns alpha centered blackhorizontal">
			</div>
			<div class="four columns alpha centered midtopmargin">
				<p class="center meta">
					We have worked on some amazing project with some great clients.
				</p>
			</div>
	  </section>

      <!-- DRAG SCROLL -->
	  <div class="drag">
		  <div id="scroll">
        <!-- Begin Isotope content -->
        
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        
        
		  </div>
	  </div>  
 
<?php montreal_footer($page);?>