<?php 
  global $root, $base_url; 
  $tags = render($content['field_basic_portfolio_categories']);
  $tags = str_replace(',', '/',$tags);
  $tags_big = str_replace('/', '<br/>',$tags);
?>


  
  <div class="greyvertical midtopmargin item leftpadding rightpadding">
    <?php print render($content['field_basic_portfolio_image']); ?>
    
    <h5 class="whitetext extrabold icon-circle-arrow-right smalltoppadding">&nbsp; <?php print $title; ?></h5>
		<h6 class="whitetext leftpadding"><?php echo $tags; ?></h6>
		<p class="meta leftpadding smalltoppadding">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
		</p>
		
	  <a href="<?php print $node_url;?>" class="whitetext smallfont leftpadding">VIEW PROJECT</a>
	
	</div>
