<?php 
	global $root; 
	$banner_image = file_create_url($node->field_portfolio_stripe_banner['und'][0]['uri']); 
	montreal_header($page); 
?>

<?php if ($node->field_portfolio_stripe_banner['und'][0] == "") : ?>
<div id="basic_banner" class="container bigtoppadding midtoppadding" style="background:url(<?php echo $root; ?>/img/stripes.png);">
  <section class="row midbottompadding bigtoppadding">
	  <h2 class="black whitetext bold leftpadding rightpadding"><?php print $title; ?></h2>
	</section>
</div>   
<?php endif; ?>

<?php if ($node->field_portfolio_stripe_banner['und'][0] != "") : ?>
<div class="container bigpadding" style="background:url(<?php echo $banner_image; ?>);background-position:center;">
  <section class="row largetoppadding bigbottompadding">
    <h2 class="whitetext bold midbottommargin center"><?php print $title; ?></h2>
    <div class="five columns alpha centered whitehorizontal"></div>
  </section>
</div>
<?php endif; ?>


<div class="container white bigpadding">
  <section class="row">      

	  <?php print render($title_prefix); ?>
	  <?php print render($title_suffix); ?>
	  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	  <?php print render($page['content']); ?>
	  
  </section>
</div>
	          
<?php montreal_footer($page);?>