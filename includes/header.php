<?php 
  function montreal_header($page){
  global $root; 
?>

  <header>
    <div class="container">     
      <section class="row">  
        <div class="four columns branding" >
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
              <h2 id="main_title_slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
          <?php endif; ?>
        </div>
      	<div class="eight columns"> 
          <div id="nav">
            <!-- begin menu -->
            <nav id="navigationmain">
            
		          <?php print theme('links__system_main_menu', array(
		            'attributes' => array(
		              'id' => 'main-menu-links',
		              'class' => array('links', 'clearfix'),
		            ),
		            'heading' => array(
		              'text' => t('Main menu'),
		              'level' => 'h2',
		              'class' => array('element-invisible'),
		            ),
		          )); 
		          ?>
            
            </nav>
				  </div>    
				</div> 
				 
      <!-- end menu -->   
      </section> 
    </div>
    <!-- end main span2 -->            
  </header> 
 
<?php }
?>