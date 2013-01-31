<?php 
global $root, $base_url;
?>

<?php if (!$page): ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix seven columns blogpost"<?php print $attributes; ?>>
<?php endif; ?>
    
  <?php if ($user_picture || $display_submitted || !$page): ?>
  
    <?php print render($title_prefix); ?>
    <h2 class="blacktext bold node_title"<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
      <!-- POST META -->
			<p class="post_meta">
			  <i class="greytext icon-user"></i><span class="smallfont greytext"> by <?php print $name; ?></span> &nbsp; &nbsp;
				<i class="greytext icon-time"></i><span class="smallfont greytext"> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></span> &nbsp; &nbsp;
				<i class="greytext icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> comments</a>&nbsp; &nbsp; 
				<?php if (render($content['field_tags'])): ?>
				<i class="greytext icon-folder-open"></i><?php print render($content['field_tags']); ?>
			  <?php endif; ?>
			</p>         
    <?php endif; ?>
   
    <?php print render($content['field_image']); ?> 
    
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