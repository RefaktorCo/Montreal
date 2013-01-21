  jQuery(document).ready(function ($) {
  
    $('#sidebar-first .content').after('<div class="twelve columns blackhorizontal midmargin"></div>');
       
    $('.recent_projects_item:first').addClass('alpha');
    
    $('.portfolio_basic_item:nth-child(3n+1)').addClass('alpha');
    
    $('.greyvertical p').addClass('meta leftpadding smalltoppadding');
    
    $('.portfolio_item .griditem:even').addClass('alpha');
    
    $('.post_meta a').addClass('smallfont greytext');
    
    $('.menu_wrap ul').addClass('menu');
    
    $('.dropdown ul').removeClass('menu');
    
    $('#navigationmain').mobileMenu();
    
        
    $(window).load(function(){
     
      var $container = $('#isotope_test');

      $container.isotope({
        itemSelector : '.switch'
      });
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });
    });  
	  
	});