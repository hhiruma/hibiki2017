$(window).ready(()=>{
    setTimeout(()=>{
        $('#initLogoContainer').fadeOut(1000);
    }, 1000);
    setTimeout(()=>{
        $('#initTitle').fadeIn(1000);
        $('#initTitle h3').fadeIn(1000);
    }, 1500);
    setTimeout(()=>{
        $('#initTitle h1').fadeIn(1000);
    }, 2500);
    setTimeout(()=>{
        $('.twitterWidget').fadeIn(1000);
    }, 3000);
});

//starter for flexsldier (used on about us page)
let prevSlide;
$('#aboutUsDesc .flexslider').flexslider({
    animation: 'slide',
    slideshow: false,
    animationLoop: false,
    animationSpeed: 500,
    before: function(slider){
        $('#aboutUsImg.flexslider').flexslider(slider.animatingTo);
        prevSlide = slider.currentSlide;
        for(let i=0; i<3; i++){
            $('#aboutUsSlides'+String(i+1)+' .toggleButton').trigger('click');
            $('#aboutUsSlides'+String(i+1)+' .playButton').trigger('click');
        }
        console.log('prevSlide: ' + prevSlide);
    },
    after: function(slider){
        for(let i=0; i<3; i++){
            if(i !== slider.currentSlide){
                $('#aboutUsSlides'+String(i+1)+' .toggleButton').trigger('click');
            }
        }
        $('#aboutUsSlides'+String(prevSlide+1)+' .toggleButton').trigger('click');
    }
});
$('#aboutUsImg.flexslider').flexslider({
    animation: 'fade',
    slideshow: false,
    animationLoop: false,
    controlNav: false,
    directionNav: false,
    animationSpeed: 500,
    before: function(slider){
        $('#aboutUsDesc .flexslider .flex-direction-nav').hide();
    },
    after: function(slider){
        $('#aboutUsDesc .flexslider .flex-direction-nav').show();
    }
});

// js for aboutUs
const moveImg1 = anime({
    targets: "#aboutUsImg #aboutUsSlides1 img",
    translateX: function(target, index){
        const arr = ["150%", "0%"];
        return arr[index];
    },
    translateY: function(target, index){
        const arr = ["0%", "400px"];
        return arr[index];
    },
    autoplay: false,
    easing: "easeOutQuad",
    duration: 500,
    update: function (anim){
        //change opacity
        document.querySelector('#aboutUsImg img.img1').style.opacity = String(anim.progress / 100);
        document.querySelector('#aboutUsImg img.img2').style.opacity = String(anim.progress / 100);
    }
});

const moveImg2 = anime({
    targets: "#aboutUsImg #aboutUsSlides2 img",
    translateX: function(target, index){
        const arr = ["150%", "0%"];
        return arr[index];
    },
    translateY: function(target, index){
        const arr = ["0%", "400px"];
        return arr[index];
    },
    autoplay: false,
    easing: "easeOutQuad",
    duration: 500,
    update: function (anim){
        //change opacity
        // document.querySelector('#aboutUsImg img.img3').style.opacity = String(anim.progress / 100);
        // document.querySelector('#aboutUsImg img.img4').style.opacity = String(anim.progress / 100);
    }
});

const moveImg3 = anime({
    targets: "#aboutUsImg #aboutUsSlides3 img",
    translateX: function(target, index){
        const arr = ["150%", "0%"];
        return arr[index];
    },
    translateY: function(target, index){
        const arr = ["0%", "400px"];
        return arr[index];
    },
    autoplay: false,
    easing: "easeOutQuad",
    duration: 500,
    update: function (anim){
        //change opacity
        // document.querySelector('#aboutUsImg img.img5').style.opacity = String(anim.progress / 100);
        // document.querySelector('#aboutUsImg img.img6').style.opacity = String(anim.progress / 100);
    }
});

document.querySelector('#aboutUsSlides1 .playButton').onclick = moveImg1.play;
document.querySelector('#aboutUsSlides2 .playButton').onclick = moveImg2.play;
document.querySelector('#aboutUsSlides3 .playButton').onclick = moveImg3.play;
document.querySelector('#aboutUsSlides1 .toggleButton').onclick = moveImg1.reverse;
document.querySelector('#aboutUsSlides2 .toggleButton').onclick = moveImg2.reverse;
document.querySelector('#aboutUsSlides3 .toggleButton').onclick = moveImg3.reverse;
document.querySelector('#aboutUsSlides1 .resetButton').onclick = moveImg1.reset;
document.querySelector('#aboutUsSlides2 .resetButton').onclick = moveImg2.reset;
document.querySelector('#aboutUsSlides3 .resetButton').onclick = moveImg3.reset;

// one page scroll script
$("#container").onepage_scroll({
    sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
    easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                     // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
    animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
    pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    beforeMove: function(index) { },  // This option accepts a callback function. The function will be called before the page moves.
    afterMove: function(index) {
        //$("#aboutUsImg img").css("opacity", "0");
        if(index === 2){
            $('#aboutUsSlides1 .resetButton').trigger('click');
            $('#aboutUsSlides2 .resetButton').trigger('click');
            $('#aboutUsSlides3 .resetButton').trigger('click');
            $('#aboutUsSlides1 .playButton').trigger('click');
            $('#aboutUsSlides2 .toggleButton').trigger('click');
            $('#aboutUsSlides3 .toggleButton').trigger('click');
        } else{
        }
            $('#aboutUsDesc .flexslider').data('flexslider').flexAnimate(0);
            $('#aboutUsSlides1 img').css('opacity', 0);
    },   // This option accepts a callback function. The function will be called after the page moves.
    loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    keyboard: true,                  // You can activate the keyboard controls
    responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                     // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                     // the browser's width is less than 600, the fallback will kick in.
    direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
 });