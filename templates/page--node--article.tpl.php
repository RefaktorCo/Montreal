<?php montreal_header($page); global $root; ?>
   
  <div class="container" style="background:url(<?php echo $root; ?>/img/stripes.png);">      
            
    <section class="row white">
    
   
        <div id="main_content">
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>
  
     
      <div class="four columns push_one grey sidebar">
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
     
      
    </section>
    
  </div>    
     
<?php montreal_footer($page);?>