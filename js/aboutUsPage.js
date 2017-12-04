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
