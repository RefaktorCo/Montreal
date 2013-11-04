<?php 
  global $root, $base_url; 
  $tags = render($content['field_portfolio_basic_tags']);
  $tags = str_replace(',', ' / ',$tags);
?>
  
<div class="greyvertical midtopmargin item leftpadding rightpadding">
  <?php print render($content['field_portfolio_basic_image']); ?>
  
  <h5 class="whitetext extrabold icon-circle-arrow-right smalltoppadding caps">&nbsp; <?php print $title; ?></h5>
	<h6 class="whitetext leftpadding"><?php echo $tags; ?></h6><br>
  
	<?php print render($content['body']); ?>
    
  <a href="<?php print $node_url;?>" class="whitetext smallfont leftpadding"><?php echo t('VIEW PROJECT'); ?></a>

</div>