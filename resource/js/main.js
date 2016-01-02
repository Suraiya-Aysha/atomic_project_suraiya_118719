jQuery(document).ready(function($){
    
    $('.statistic-count').counterUp({
        time: 2000
    });
    $('.parallax').scrolly({bgParallax: true});
    
    //For Isotop Use
    $('.isotop-all-content').isotope();
    
    $('.isotop-trigger ul li').click(function(){
//        $(this).toggleClass('active');
        
        
        
        var filterValue = $(this).attr('data-filter');
        $('.isotop-all-content').isotope({
            filter:filterValue,
            percentPosition:true,
            layoutMode: 'masonry',
            masonry: {
                columnWidth:'.col-md-3'
            }
        });
    });
    
/*---------------------
 testimonial-curosel
--------------------- */
 $("#testimonial-curosel").owlCarousel({
  
    autoPlay: true, //Set AutoPlay to 3 seconds
    navigation : true,
    navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    pagination :false,
    items : 2,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsMobile : [767,1],
 
  });
    
    new WOW().init();
});

