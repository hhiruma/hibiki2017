const contactMoveImg1 = anime({
    targets: "#contactContainer #contactImg",
    translateX: function(target, index){
        return "100%";
    },
    translateY: function(target, index){
        return "0%";
    },
    autoplay: false,
    easing: "easeOutQuad",
    duration: 500,
    update: function (anim){
        //change opacity
        document.querySelector('#contactContainer #contactImg').style.opacity = String(anim.progress / 100);
    }
});

console.log(contactImgUrlArr);
$(()=>{
    $('#contactContainer #contactImg div').bgswitcher({
        images: contactImgUrlArr,
        interval: 10000,
        duration: 3000,
        effect: 'drop'
    })
});

document.querySelector('#contactContainer .playButton ').onclick = contactMoveImg1.play;
document.querySelector('#contactContainer .resetButton').onclick = contactMoveImg1.reset;