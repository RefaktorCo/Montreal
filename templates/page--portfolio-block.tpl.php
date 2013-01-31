<?php global $root; montreal_header($page);?>
 <!-- PORTFOLIO ITEM CONTAINER / GRIDDER -->
 <div class="container smallpadding bigtoppadding gridder">       
        
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php print render($page['content']); ?>
        
 </div>
 <div style="clear:both"></div>
 
<?php montreal_footer($page);?>