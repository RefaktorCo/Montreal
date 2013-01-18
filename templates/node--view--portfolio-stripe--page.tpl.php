<?php 
  global $root, $base_url; 
  $tags = render($content['field_portfolio_stripe_tags']);
  $tags = str_replace(',', '/',$tags);
  $tags_big = str_replace('/', '<br/>',$tags);
?>

  <div class="itemstripe">
    <?php print render($content['field_portfolio_stripe_image']); ?>
    <a href="<?php print $node_url;?>" title="View Project">
    <div class="infowhite midpadding leftpadding rightpadding">
	    <h5 class="blacktext extrabold smalltoppadding midtoppadding"><?php print $title; ?></h5>
			<h6 class="blacktext"><?php echo $tags; ?></h6>
			<span class="blacktext smallfont">VIEW PROJECT</span>
		</div>
		</a>
	</div>
    
  