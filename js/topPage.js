console.log(imgUrlArr);
$(()=>{
    $('main').bgswitcher({
        images: imgUrlArr,
        interval: 10000,
        duration: 4000,
        effect: 'fade'
    })
});