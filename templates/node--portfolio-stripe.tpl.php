	<!-- LEFT SLIDER -->
	<div class="eight columns blackvertical">
	
	  <!-- New portfolio slider implementation using a single image field, since version 1.0.1 -->
	  <?php if (render($content['field_portfolio_stripe_slider'])) : ?>
		<div class="flexslider">
			<!-- SLIDES -->
			<ul class="slides">
				<?php if (render($content['field_portfolio_stripe_slider'])) : ?>
				  <?php print render($content['field_portfolio_stripe_slider']); ?>
				<?php endif; ?>
			</ul>
	  </div>
	  <?php endif; ?>
	  <!-- End portfolio slider -->
	  
	  <!-- Legacy portfolo support for initial version 1.0 -->
	  <?php if (render($content['field_portfolio_stripe_slide_1'])) : ?>
	  <div class="flexslider">
			<!-- SLIDES -->
			<ul class="slides">
				<?php if (render($content['field_portfolio_stripe_slide_1'])) : ?>
				  <li><?php print render($content['field_portfolio_stripe_slide_1']); ?></li>
				<?php endif; ?>
				
				<?php if (render($content['field_portfolio_stripe_slide_2'])) : ?>
				  <li><?php print render($content['field_portfolio_stripe_slide_2']); ?></li>
				<?php endif; ?>
				
				<?php if (render($content['field_portfolio_stripe_slide_3'])) : ?>
				  <li><?php print render($content['field_portfolio_stripe_slide_3']); ?></li>
				<?php endif; ?>
			</ul>
	  </div>
	  <?php endif; ?>
	  <!-- End legacy support -->
	  
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
	      hide($content['field_portfolio_stripe_banner']);
	      hide($content['field_portfolio_stripe_slider']);
	      hide($content['field_portfolio_stripe_slide_1']);  //legacy support only 
	      hide($content['field_portfolio_stripe_slide_2']);  //legacy support only 
	      hide($content['field_portfolio_stripe_slide_3']);  //legacy support only 
	      print render($content);
	    ?>
	  </div>
	  
	  <?php if (!$page): ?>
	  </article> <!-- /.node -->
	  <?php endif; ?>
	  
	</div>