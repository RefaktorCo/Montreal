<article class="row blog white">
  <div class="eight columns centered">
    <a href="<?php print $node_url;?>" title="Read Note"><h4 class="blacktext italic center"><?php print $title; ?></h4></a>
    <!-- POST META -->
		<p class="post_meta center">
		  <i class="greytext icon-user"></i><span class="smallfont greytext"> by <?php print $name; ?></span> &nbsp; &nbsp;
			<i class="greytext icon-time"></i><span class="smallfont greytext"> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></span> &nbsp; &nbsp;
			<i class="greytext icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> comments</a>&nbsp; &nbsp; 
			<?php if (render($content['field_tags'])): ?>
			<i class="greytext icon-folder-open"></i><?php print render($content['field_tags']); ?>
		  <?php endif; ?>
		</p>
  </div>
</article>