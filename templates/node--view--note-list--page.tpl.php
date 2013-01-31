<?php if (!$page): ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row blog white"<?php print $attributes; ?>>
<?php endif; ?>
  
  <div class="eight columns centered">

  <?php if ($user_picture || $display_submitted || !$page): ?>
  
    <?php print render($title_prefix); ?>
    <h4 class="blacktext italic center"<?php print $title_attributes; ?>><?php print $title; ?></h4>
    <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
    
      <!-- POST META -->
			<p class="post_meta center">
			  <i class="greytext icon-user"></i><span class="smallfont greytext"> by <?php print $name; ?></span> &nbsp; &nbsp;
				<i class="greytext icon-time"></i><span class="smallfont greytext"> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></span> &nbsp; &nbsp;
				<i class="greytext icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> comments</a>&nbsp; &nbsp; 
				<?php if ($field_tags):?>
				<i class="greytext icon-folder-open"></i><?php print render($content['field_tags']); ?>
			  <?php endif; ?>
			  &nbsp; &nbsp; <i class="greytext icon-link"></i>
			  <a class="smallfont greytext" href="<?php print $node_url;?>">READ POST</a>
			</p>
        
    <?php endif; ?>

  <?php endif; ?>
  
  </div>

<?php if (!$page): ?>
 </article> <!-- /.node -->
<?php endif; ?>