$(window).ready(()=>{
    setTimeout(()=>{
        $('#initLogo').fadeOut(1000);
    }, 1000);
    setTimeout(()=>{
        $('#initTitle').fadeIn(1000);
        $('#initTitle h3').fadeIn(1000);
    }, 1500);
    setTimeout(()=>{
        $('#initTitle h1').fadeIn(1000);
    }, 2500);
    setTimeout(()=>{
        $('#scrollFromTop i').fadeIn(1000);
    }, 4000);
});

$(()=>{
    const controller = new ScrollMagic.Controller();

    const wipeAnimation = new TimelineMax()
        .to("#slideContainer", 0.5, {z:-150, delay: 1})
        .to("#slideContainer", 1, {y: "-33.3%"})
        .to("#slideContainer", 0.5, {z: 0})
        .to("#slideContainer", 0.5, {z:-150, delay: 1})
        .to("#slideContainer", 1, {y: "-66.6%"})
        .to("#slideContainer", 0.5, {z: 0});
    new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "500%"
    })
        .setPin("#pinContainer")
        .setTween(wipeAnimation)
        .addIndicators()
        .addTo(controller);
});

$(()=>{
    $('a[href^="#"]').click(function(){
        event.preventDefault();
        const speed = 1000;
        const href = $(this).attr("href");
        const target = $(href == "#" || href == "" ? 'html' : href);
        let position;
        if(target.length){
            position = target.offset().top;
        } else {
            console.log('cant find: '+target);
        }
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});

