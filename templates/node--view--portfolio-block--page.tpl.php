<?php 
  global $root, $base_url; 
  $tags = render($content['field_portfolio_basic_tags']);
  $tags = str_replace(',', '/',$tags);
?>

<div class="gridblock">
  <?php print render($content['field_portfolio_basic_image']); ?>
  <a href="<?php print $node_url;?>">
  <div class="gridinfo">
		<h3 class="whitetext extrabold smalltoppadding center"><?php print $title; ?></h3>
		<h5 class="whitetext center"><?php echo $tags; ?></h5>
		<span class="smallfont space">VIEW PROJECT</span>
	</div>
	</a>
</div>