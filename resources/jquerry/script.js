$(document).ready(function(){

/* ------------------------ */
/*         STICKY NAVIGATION KA LIYE  */
/* ----------------------- */
    $('.js--section-features').waypoint(function(direction) {
        if (direction == "down")
            {
                // idhar sticky likhna ka badd landing pg ka nav ma classs mention karne ki jaroort nhi
                $('nav').addClass("sticky");
            }
        else
            {
                $('nav').removeClass("sticky");
            }
    },{
        offset: '60px;'
    });

/* ------------------------ */
/*         JAB HUM SCROLL KARENGE BUTTON KO   */
/* ----------------------- */
// yeh sidha pakages sec ma le jayea
$('.js--scroll-to-plan').click(function(){
    $('html,body').animate({scrollTop:$('.js--section-plans').offset().top},1000);
});

$('.js--scroll-to-start').click(function(){
    $('html,body').animate({scrollTop:$('.js--section-features').offset().top},1000);
});

// navigation ka button ka scroll
$(function() {
    // Select all links with hashes using snippet 
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                return false;
                } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
                };
        });
        }
    }
    });
}); 

// Animation scroll pa laga rhe ha ab

    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeIn');
    },{
        // taki yeh animation feature page pa ho tab nhi jab uski line ka pas scroll karenge 
        offset: '55%'
    });

    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInUp');
    },{
        // taki yeh animation feature page pa ho tab nhi jab uski line ka pas scroll karenge 
        offset: '55%'
    });

    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeIn');
    },{
        // taki yeh animation feature page pa ho tab nhi jab uski line ka pas scroll karenge 
        offset: '55%'
    });

    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated fadeIn');
    },{
        // taki yeh animation feature page pa ho tab nhi jab uski line ka pas scroll karenge 
        offset: '55%'
    });

}); 