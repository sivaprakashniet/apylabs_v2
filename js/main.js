$(document).ready(function() {

    // Shrink Header while scrolling
    $(window).scroll(function(){
        $hHeight = $('.header').height()
        
        if($(this).scrollTop() > $hHeight) {
            $('.header').addClass('header-scroll');
        } else {
            $('.header').removeClass('header-scroll');
        }
    });

    // Workflow Hover
    $(".workflow-item").hover(function() {
          $(".workflow-item").removeClass("active");
          $(this).addClass("active");
        }, function() {
          $(this).removeClass("active");
        }
    );
    
});   