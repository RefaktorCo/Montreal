<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>
	
	<!-- LEFT SLIDER -->
	<div class="eight columns blackvertical">
		<div class="flexslider">
			<!-- SLIDES -->
			<ul class="slides">
				<li>
				<?php print render($content['field_portfolio_stripe_slide_1']); ?>
				</li>
				<li>
				<?php print render($content['field_portfolio_stripe_slide_2']); ?>
				</li>
				<li>
				<?php print render($content['field_portfolio_stripe_slide_3']); ?>
				</li>
			</ul>
	  </div>
  </div>

  <!-- RIGHT SIDE -->
	<div class="four columns">
	
	  <?php if (!$page): ?>
	  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
		<?php endif; ?>
  
	  <div class="article_content"<?php print $content_attributes; ?>>
	    <?php
	      // Hide comments, tags, and links now so that we can render them later.
	      hide($content['taxonomy_forums']);
	      hide($content['comments']);
	      hide($content['links']);
	      hide($content['field_portfolio_stripe_image']);
	      hide($content['field_portfolio_stripe_tags']);
	      print render($content);
	    ?>
	  </div>
	  
	  <?php if (!$page): ?>
	  </article> <!-- /.node -->
	  <?php endif; ?>
	</div>
