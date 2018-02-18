const vm = new Vue({
    el: "#sidebar2Button",
    data: {
        menuVisible: false
    }
})

const menuPlay = anime({
    targets: "#sidebar2Container",
    translateX: "-400px",
    autoplay: false,
    easing: "easeOutQuad",
    duration: 400,
});

menuPlay.reverse();

document.querySelector('#sidebar2Button').onclick = function(){
    menuPlay.play();
    menuPlay.reverse();
}