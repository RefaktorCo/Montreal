<?php global $root; montreal_header($page);?>
      
<!-- DRAG SCROLL -->
<div class="container dragbig">
  <div id="scroll">
    
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    
  </div>
</div>  
 
<?php montreal_footer($page);?>