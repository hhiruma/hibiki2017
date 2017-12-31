const contactMoveImg1 = anime({
    targets: "#contactContainer img",
    translateX: function(target, index){
        return "250%";
    },
    translateY: function(target, index){
        return "0%";
    },
    autoplay: false,
    easing: "easeOutQuad",
    duration: 500,
    update: function (anim){
        //change opacity
        document.querySelector('#contactContainer img').style.opacity = String(anim.progress / 100);
    }
});

document.querySelector('#contactContainer .playButton ').onclick = contactMoveImg1.play;
document.querySelector('#contactContainer .resetButton').onclick = contactMoveImg1.reset;