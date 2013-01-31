<?php montreal_header($page);?>

<!-- STRIPES BACKGROUND -->
<div class="bigpadding_back"></div>
          
<div class="container white">      
  <div class="row">
    <div id="main_content">
    
      <div class="error_wrap">
      
        <div class="error_img">
          <img src="<?php global $root; echo $root;?>/images/404.png" alt="404">
        </div>
     
        <div class="error_text">
          <h2>Page not found</h2>
          <p>We're sorry, but the page you are looking for cannot be found. Try one of the following instead:</p>
          <br>
          <p><a class="button" href="<?php print base_path();?>"> Home</a></p>
        </div>    
       
      </div>
    
    </div>
  </div>
</div>
 
<?php montreal_footer($page);?>