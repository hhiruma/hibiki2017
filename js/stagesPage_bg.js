function setup(){
    let canvas = createCanvas(windowWidth, windowHeight);
    canvas.parent('stagesContainer')
}

function draw(){
    noFill();
    stroke(255, 0.8);
    for(let i=0; i < 15; i++){
        strokeWeight(15-i);
        //ellipse(0, 0, 500 + i*150, 500 + i*150);
    }
}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
    initInnerR = windowWidth-20;
    initOuterR = windowWidth;
    subInnerR = windowWidth/600;
    addOuterR = windowWidth/1500;
    drawBlocks();
}