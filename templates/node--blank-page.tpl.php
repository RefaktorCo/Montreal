<?php
  // This template simply calls the node content without any additional wrappers. This is used with the Page Blank content type.
  hide($content['taxonomy_forums']);
  hide($content['comments']);
  hide($content['links']);
  hide($content['field_tags']);
  hide($content['field_image']);
  print render($content);
?>