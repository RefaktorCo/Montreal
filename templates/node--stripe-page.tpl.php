<?php if (!$page): ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix seven columns blogpost"<?php print $attributes; ?>>
<?php endif; ?>
      
  <div class="article_content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_image']);
      print render($content);
    ?>
  </div>
    
  <?php if($teaser): ?>
  	<p class="meta">
  	  <i class="greytext icon-link"></i>
			<a class="smallfont greytext" href="<?php print $node_url;?>">READ POST</a>
  	</p>
  <?php endif;?>

  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
</article> <!-- /.node -->
<?php endif; ?>