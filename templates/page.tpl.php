<?php montreal_header($page);?>
  
 <!-- STRIPES BACKGROUND -->
<div class="bigpadding_back">
</div>
 
    <div class="container white">      
    <div class="row">
      <div class="<?php if (theme_get_setting('page_layout') == 'sidebar_right') { echo "eight columns"; } else { echo "twelve columns"; } ?>">
        <div id="main_content">
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
         	 
         	 <?php if ($tabs = render($tabs)): ?>
				    <div id="drupal_tabs" class="tabs">
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
      </div>
  
      <?php if (theme_get_setting('page_layout') == 'sidebar_right'): ?>
      
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
      </div>
      <?php endif; ?>
    </div>
    </div>
<?php print $messages; ?>
  
<?php montreal_footer($page);?>