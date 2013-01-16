<?php 
  global $root, $base_url; 
  $tags = render($content['field_portfolio_tags']);
  $tags = str_replace(' ', '/',$tags);
?>


  
  <div class="six columns griditem ">
    <?php print render($content['field_basic_portfolio_image']); ?>
    <a href="<?php print $node_url;?>"><?php print $title; ?>
    <div class="gridinfo">
			<h3 class="whitetext extrabold bigtoppadding center">PROJECT TITLE</h3>
			<h5 class="whitetext center">WEB DESIGN / UI/ UX</h5>
			<span class="smallfont space">VIEW PROJECT</span>
		</div>
		<!-- SHOWS AFTER TWO 1.6S OF HOVER -->
		<div class="gridblack">
			<h2 class="whitetext">WEBDESIGN <br/> USER INTERFACE <br/> USER EXPERIENCE</h2>
		</div>
		</a>
	</div>