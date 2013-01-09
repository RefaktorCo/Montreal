<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row blog white"<?php print $attributes; ?>>
<?php endif; ?>
    <div class="six columns">

  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php print render($title_prefix); ?>

      <h4 class="blacktext light"<?php print $title_attributes; ?>><?php print $title; ?></h4>
      
    <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
    
      <!-- POST META -->
			<p>
				<i class="icon-time greytext"></i>
				<?php if ($field_tags):?>
				<a class="smallfont greytext" href="#"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></a>
				&nbsp; &nbsp; <i class="greytext icon-folder-open"></i>
				<?php print render($content['field_tags']); ?>
			  <?php endif; ?>
			</p>
    
      
             
   <?php endif; ?>
   


 
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

    </div>
   <!--POST IMAGE -->
	<div class="five columns push_one">
       <?php print render($content['field_image']); ?> 
	</div>
  
 




  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>