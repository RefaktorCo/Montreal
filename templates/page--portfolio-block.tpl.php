<?php global $root; montreal_header($page);?>
      
	<div class="container bigpadding" style="background:url(<?php echo $root;?>/img/stripes.png);">
  </div>
	  
  <div class="container white bigpadding">
	  <section class="row">
	  	<h3 class="blacktext bold midbottommargin center">OUR RECENT WORK</h3>
			<div class="five columns alpha centered blackhorizontal">
			</div>
			<div class="four columns alpha centered midtopmargin">
				<p class="center meta">
					We have worked on some amazing project with some great clients.
				</p>
			</div>
	  </section>

      <!-- Begin Isotope filters -->
           
      <section class="row bigtoppadding portfolio_item">
        <!-- Begin Isotope content -->
        
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        
        
      </section>
  </div>
 
<?php montreal_footer($page);?>