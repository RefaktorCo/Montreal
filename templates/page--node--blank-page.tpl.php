<?php montreal_header($page); global $root; ?>
   
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php print render($page['content']); ?>
              
<?php montreal_footer($page);?>