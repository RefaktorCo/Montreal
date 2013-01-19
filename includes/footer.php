<?php 
function montreal_footer($page){
  global $root; 
?>
<!-- begin footer -->   
  <!-- FOOTER -->
<footer class="black">
<div class="container">

  <?php if (theme_get_setting('enable_primary_footer') == '1') { ?>
	<div class="row bigtoppadding">
	
		<div class="three columns">
      <?php if(!$page['footer_1']) {?>
      <h2>Footer Block 1</h2>
      <?php } else { print render($page['footer_1']); }?>   
    </div> 

    <div class="three columns">
      <?php if(!$page['footer_2']) {?>
      <h2>Footer Block 2</h2>
      <?php } else { print render($page['footer_2']); }?>  
    </div>
    
    <div class="three columns">
      <?php if(!$page['footer_3']) {?>
      <h2>Footer Block 3</h2>
      <?php } else { print render($page['footer_3']); }?>  
    </div>
    
    <div class="three columns">
      <?php if(!$page['footer_4']) {?>
      <h2>Footer Block 4</h2>
      <?php } else { print render($page['footer_4']); }?>      
    </div>
	</div>
	<!-- END TOP ROW -->
	<?php endif; ?>
	
	<?php if (theme_get_setting('enable_secondary_footer') == '1') { ?>
	<!-- GREY HORIZONTAL -->
	<div class="greyhorizontal midmargin">
	</div>
	
	<div class="row">
	
	 <div class="twelve columns"> 
    <?php if(!$page['footer_full']) {?>    
    <h6 class="after_footer"><?php echo theme_get_setting('secondary_footer_text'); ?></h6>
    <?php } else { print render($page['footer_full']); }?>  
  </div> 	
  </div>
  <?php endif; ?>
</div>
</footer>
    
   <?php }
?>