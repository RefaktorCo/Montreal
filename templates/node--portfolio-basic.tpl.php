	<!-- LEFT SLIDER -->
	<div class="eight columns blackvertical">
		<div class="flexslider">
			<!-- SLIDES -->
			<ul class="slides">
				<?php if (render($content['field_portfolio_basic_slide_1'])) : ?>
				  <li><?php print render($content['field_portfolio_basic_slide_1']); ?></li>
				<?php endif; ?>
				
				<?php if (render($content['field_portfolio_basic_slide_2'])) : ?>
				  <li><?php print render($content['field_portfolio_basic_slide_2']); ?></li>
				<?php endif; ?>
				
				<?php if (render($content['field_portfolio_basic_slide_3'])) : ?>
				  <li><?php print render($content['field_portfolio_basic_slide_3']); ?></li>
				<?php endif; ?>
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
	      hide($content['field_portfolio_basic_image']);
	      hide($content['field_portfolio_basic_tags']);
	      hide($content['field_portfolio_basic_banner']);
	      print render($content);
	    ?>
	  </div>
	  
	  <?php if (!$page): ?>
	  </article> <!-- /.node -->
	  <?php endif; ?>
	</div>
	
