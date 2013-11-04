  jQuery(document).ready(function ($) {
  
     $(".carousel_item_wrapper").hover(
      function(){
          $(this).children(".carousel_item_hover").fadeTo(400,.9).show();
      },
      function(){
          $(this).children(".carousel_item_hover").fadeTo(400,0);
      }
    );
    
    $().UItoTop({ easingType: 'easeOutQuart' });
    
    
    $('#project_planner .webform-component-textfield').addClass('six columns project_planner_item');
    
    $('.project_planner_item:even').addClass('alpha');
       
    $('.recent_projects .front_portfolio_basic_item:first').addClass('alpha');
    
    $('.portfolio_item .portfolio_basic_item:nth-child(3n+1)').addClass('alpha');
    
    $('.greyvertical p').addClass('meta leftpadding smalltoppadding');
    
    $('.portfolio_item .griditem:even').addClass('alpha');
    
    $('.post_meta a').addClass('smallfont greytext');
    
    $('.menu_wrap ul').addClass('menu');
    
    $('.dropdown ul').removeClass('menu');
    
    $('#navigationmain').mobileMenu();
    	  
	});