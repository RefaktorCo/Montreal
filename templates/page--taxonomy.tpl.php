<?php montreal_header($page); ?>  
<!-- STRIPES BACKGROUND -->
<div class="bigpadding_back"></div>
  <div class="container white">
    <div class="row">
      <div class="twelve columns">
	      <?php print render($title_prefix); ?>
	      <h3>Category: <?php print $title; ?> </h3>
	      <?php print render($title_suffix); ?>
	      <hr>
      </div>
    </div>
  </div>  
 
  <div class="container midtoppadding white">      
    <div class="row">
     <div class="<?php if (($page['sidebar_first']) OR ($page['sidebar_second'])) { echo "eight columns";} else { echo "twelve columns"; } ?>">
       
       	 
       	<?php if ($tabs = render($tabs)): ?>
			    <div id="drupal_tabs" class="tabs bigpadding">
			      <?php print render($tabs); ?>
			    </div>
			  <?php endif; ?>
	      <?php print render($page['help']); ?>
	      <?php if ($action_links): ?>
	        <ul class="action-links">
	          <?php print render($action_links); ?>
	        </ul>
	      <?php endif; ?>
       	
       	<?php print render($page['content']); ?>
    
      </div>

      <?php if (($page['sidebar_first']) OR ($page['sidebar_second'])): ?>
	      <div class="four columns">
	        <div id="sidebar_wrap">
	      	<?php if ($page['sidebar_first']): ?>
	      	<aside id="sidebar-first" role="complementary" class="sidebar clearfix">
	        <?php print render($page['sidebar_first']); ?>
	        </aside>  <!-- /#sidebar-first -->
	        <?php endif; ?>
	        <?php if ($page['sidebar_second']): ?>
	        <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
	        <?php print render($page['sidebar_second']); ?>
	        </aside>  <!-- /#sidebar-first -->
	        <?php endif; ?>
	      </div>        
      <?php endif; ?>

    </div>
  </div>
  </div>
<?php print $messages; ?>
<?php montreal_footer($page);?>