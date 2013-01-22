<?php 
  global $root, $base_url; 
  $tags = render($content['field_portfolio_basic_tags']);
  $tags_big = render($content['field_portfolio_basic_tags']);
  $tags = str_replace(',', '/',$tags);
  $tags_big = str_replace(',', '<br>',$tags_big);
?>

  <div class="six columns griditem ">
    <?php print render($content['field_portfolio_basic_image']); ?>
    <a href="<?php print $node_url;?>">
    <div class="gridinfo">
			<h3 class="whitetext extrabold bigtoppadding center"><?php print $title; ?></h3>
			<h5 class="whitetext center"><?php echo $tags; ?></h5>
			<span class="smallfont space">VIEW PROJECT</span>
		</div>
		<!-- SHOWS AFTER TWO 1.6S OF HOVER -->
		<div class="gridblack">
			<h2 class="whitetext"><?php echo $tags_big; ?></h2>
		</div>
		</a>
	</div>