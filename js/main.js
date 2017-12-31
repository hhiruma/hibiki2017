const devStatus = true;

$(window).ready(()=>{
    setTimeout(()=>{
        $('#initLogoContainer').fadeOut(1000);
    }, 1000);
    setTimeout(()=>{
        $('#initTitle').fadeIn(1000);
        $('#initTitle #topLogo').fadeIn(1000);
    }, 1500);
    setTimeout(()=>{
        $('.twitterWidget').fadeIn(1000);
    }, 3000);
    setTimeout(()=>{
        $('#topPageDownArrow').fadeIn(1000);
    }, 3000);
});

// one page scroll script
$("#container").onepage_scroll({
    sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
    easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                     // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
    animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
    pagination: false,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    beforeMove: function(index) {
        if(index === 1){
            $('#sidebar').fadeOut(500);
        } else {
            $('#sidebar').fadeIn(500);
        }
    },  // This option accepts a callback function. The function will be called before the page moves.
    afterMove: function(index) {
        //$("#aboutUsImg img").css("opacity", "0");
        if(index === 2){
            $('#aboutUsSlides1 .resetButton ').trigger('click');
            $('#aboutUsSlides2 .resetButton ').trigger('click');
            $('#aboutUsSlides3 .resetButton ').trigger('click');
            $('#aboutUsSlides1 .playButton  ').trigger('click');
            $('#aboutUsSlides2 .toggleButton').trigger('click');
            $('#aboutUsSlides3 .toggleButton').trigger('click');
        } else if(index === 4){
            $('#contactContainer .resetButton').trigger('click');
            $('#contactContainer  .playButton').trigger('click');
        }
        $('#stagesShowMainContainer .flexslider').data('flexslider').flexAnimate(0);
        $('#aboutUsDesc .flexslider').data('flexslider').flexAnimate(0);
        $('#aboutUsSlides1 img').css('opacity', 0);
        $('#contactContainer img').css('opacity', 0);
        if(!devStatus){
            location.hash="";
        }
    },   // This option accepts a callback function. The function will be called after the page moves.
    loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    keyboard: true,                  // You can activate the keyboard controls
    responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                     // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                     // the browser's width is less than 600, the fallback will kick in.
    direction: "vertical",            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
 });