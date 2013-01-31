<?php global $root; montreal_header($page);?>
      
<div class="container bigtoppadding midtoppadding" style="background:url(<?php echo $root;?>/img/stripes.png);">
	<section class="row midbottompadding bigtoppadding">
	<h2 class="black whitetext bold leftpadding rightpadding">SOME OF OUR WORK</h2>
	</section>
</div>
  
<div class="container white bigpadding">
  <section class="row portfolio_item">
  
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    
  </section>
</div>
 
<?php montreal_footer($page);?>