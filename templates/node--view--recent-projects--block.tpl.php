<?php 
	global $root, $base_url;
	$tags = render($content['field_portfolio_basic_tags']);
	$tags = str_replace(',', ' /',$tags);
?>

<div class="item four columns portfolio_basic_item">

  <div class="carousel_item_wrapper"> 
    <div class="carousel_item_content">
      <div class="carousel_item_image">
        <?php print render($content['field_portfolio_basic_image']); ?>
      </div>
    </div>

    <div class="carousel_item_hover">
	    <p><a href="<?php echo file_create_url($node->field_portfolio_basic_image['und'][0]['uri']); ?>" rel="prettyPhoto" title="<?php print $title; ?>"><img src="<?php echo $root;?>/images/magnify.png" alt="<?php print $title; ?>"></a></p>
	  </div>
	  
  </div>  
  
  <h5 class="blacktext extrabold smalltoppadding"><a href="<?php print $node_url;?>"><?php print $title; ?></a></h5>
  <h6 class="blacktext"><?php echo $tags;?></h6>
  <a href="<?php print $node_url;?>" class="blacktext smallfont">View Project</a>
  
</div>