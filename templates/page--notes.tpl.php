<?php montreal_header($page); global $root;?>
    
  <div class="container bigtoppadding bigbottompadding" style="background:url(<?php echo $root;?>/img/stripes.png);">
  	<section class="row white bigpadding smallbottommargin">
	  	<h2 class="center italic blacktext">Our daily ramblings about stuff</h2>
	  </section>
          
          
	              <?php print render($title_prefix); ?>
	              <?php print render($title_suffix); ?>
	              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	              <?php print render($page['content']); ?>
	       
		        <?php if (theme_get_setting('blog_layout') == 'sidebar_right'): ?>
		        
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
  
<?php montreal_footer($page);?>