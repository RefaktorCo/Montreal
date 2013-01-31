<?php if (!$page): ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>

  <?php if ($user_picture || $display_submitted || !$page): ?>
   
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2 class="node_title" <?php print $title_attributes; ?>><div class="node_title_wrap"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></div></h2>
    <?php endif; ?>
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
    	
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      
      print render($content);
    ?>
  </div>
 
  Forum category:<?php print render($content['taxonomy_forums']); ?>
 
  <?php if (render($content['field_tags'])): ?>
    <div class="tags"><i class="icon-tags"></i><?php print render($content['field_tags']); ?></div>
  <?php endif; ?>
  
  <div class="read_more">
    <?php if($teaser): ?>
     <button class="btn" type="button"> <?php print l(t('Read more'), '../' . $node_url, array('attributes' => array('class' => t('newreadmore')))); ?> </button>
    <?php endif;?>
  </div>
  
  <div class="clearfix"></div>

  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
</article> <!-- /.node -->
<?php endif; ?>