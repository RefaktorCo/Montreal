<?php 
	global $root, $base_url;
	$tags = render($content['field_portfolio_basic_tags']);
	$tags = str_replace(',', ' /',$tags);
?>

	<div class="item four columns recent_projects_item">
	  <?php print render($content['field_portfolio_basic_image']); ?>
	   <h5 class="blacktext extrabold smalltoppadding"><a href="<?php print $node_url;?>"><?php print $title; ?></a></h5>
     <h6 class="blacktext"><?php echo $tags;?></h6>
     <a href="<?php print $node_url;?>" class="blacktext smallfont">View Project</a>
	</div>