<?php montreal_header($page); global $root; ?>

  <?php if ($tabs = render($tabs)): ?>
    <div class="container white bigpadding">
      <div class="row">
	      <div id="drupal_tabs" class="tabs bigtoppadding">
	        <?php print render($tabs); ?>
	      </div>
      </div>
    </div>
	<?php endif; ?>
	<?php print render($page['help']); ?>
	<?php if ($action_links): ?>
	  <ul class="action-links">
	    <?php print render($action_links); ?>
	  </ul>
	<?php endif; ?>

<?php print render($page['content']); ?>
              
<?php montreal_footer($page);?>