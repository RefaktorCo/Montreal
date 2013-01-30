<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix seven columns blogpost"<?php print $attributes; ?>>
<?php endif; ?>
    

  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php print render($title_prefix); ?>

          
     <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
               
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
     
   <!--POST IMAGE -->



<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>