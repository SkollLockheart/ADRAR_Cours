/*
----------------------A-------------------------------
// Initialisation A1
setPos(300, 300);
setLineWidth(10);
changeColor(color.red);
// Réalisation A1
forward(200);
faceRight();
forward(100);


// Initialisation A2
setPos(300,300);
setLineWidth(10);
changeColor(color.yellow);
// Réalisation A2
faceLeft();
forward(100);
faceDown();
forward(100);
faceRight();
forward(200);
faceUp();
forward(200);


// Initialisation A3
setPos(300,300);
setLineWidth(10);
changeColor("#f39c12");
faceLeft();
// Réalisation A3
forward(100);
faceRight();
forward(200);
faceLeft();
forward(100);
faceUp();
forward(100);
faceDown();
forward(200);


// Initialisation A4
setPos(200,400);
setLineWidth(10);
changeColor(color.green);
faceRight();
// Réalisation A4
forward(100);
arcLeft(50,180);
forward(50);
arcRight(50,180);
forward(100);


// Initialisation A5
setPos(300,200);
setLineWidth(10);
changeColor("#9b59b6");
faceRight();
// Réalisation A5
arcRight(50,180);
arcLeft(50,180);
arcLeft(100,360);


// Initialisation A6
setPos(300,300);
setLineWidth(10);
changeColor(color.aqua);
faceUp();
// Réalisation A6
forward(50);
up();
forward(50);
down();
forward(100);


// Initialisation A7
setPos(200,300);
setLineWidth(10);
changeColor(color.green);
faceDown();
// Réalisation A7
forward(100);
arcLeft(50,180);
forward(50);
up();
forward(50);
down();
forward(100);
arcLeft(50,180);
forward(50);

-----------------------B----------------------------
// Initialisation B1
setPos(150,150);
setLineWidth(10);
changeColor(color.green);
faceRight();
// Réalisation B1
for(let i=0;i<4;i++) {
    forward(50);
    faceDown();
    forward(50);
    faceRight();
}


// Initilisation B2
setPos(50,300);
setLineWidth(10);
changeColor(color.red);
faceUp();
// Réalisation B2
for(let i=0;i<4;i++){
    forward(50);
    faceRight();
    forward(50);
    faceDown();
    forward(50);
    faceRight();
    forward(50);
    faceUp();
}


// Initialisation B3
setPos(200,200);
setLineWidth(10);
changeColor("#8e44ad");
faceRight();
// Réalisation B3
for(let i=0;i<4;i++){
    forward(100);
    right(90);
}


// Initilisation B4
setPos(200,275);
setLineWidth(10);
changeColor(color.aqua);
faceRight();
// Réalisation B4
for(let i=0;i<3;i++){
    forward(100);
    left(180-60);
}


// Initialisation B5
setPos(300,300);
setLineWidth(10);
changeColor("#66401b");
faceUp();
// Réalisation B5
forward(100);
changeColor(color.red);
for(let i=0;i<3;i++){
    forward(50);
    right(180-60);
}


// Initialisation B6
setPos(150,300);
setLineWidth(10);
changeColor(color.red);
faceRight();
// Réalisation B6
for(let i=0;i<2;i++){
    forward(50);
    faceUp();
    forward(50);
    faceRight();
}
changeColor(color.green);
for(let i=0;i<3;i++){
    faceRight();
    forward(50);
    faceDown();
    forward(50);
}


// Initialisation B7
setPos(300,300);
setLineWidth(10);
changeColor("#f0932b");
faceRight();
// Réalisation B7
for(let i=0;i<4;i++){
    forward(100);
    right(90);
}
for(let i=0;i<3;i++){
    forward(100);
    left(180-60);
}


// Initialistion B8
setPos(300,300);
setLineWidth(10);
changeColor(color.yellow);
faceRight();
// Réalisation B8
for(let i=0;i<8;i++){
    forward(200);
    right(180-45);
}


// Initialisation B9
setPos(150,300);
setLineWidth(10);
changeColor(color.fuchsia);
faceRight();
// Réalisation B9
forward(50);
up();
forward(50);
down();
for(let i=0;i<3;i++){
    forward(100);
    right(180-60);
}


// Initialisaion B10
setPos(50,300);
setLineWidth(10);
changeColor(color.aqua);
faceRight();
// Réalisation B10
for(let i=0;i<8;i++){
    forward(100);
    right(180-45);
}
up();
forward(200);
down();
changeColor(color.yellow);
for(let i=0;i<8;i++){
    forward(200);
    left(180-45);
}
up();
faceDown();
forward(100);
changeColor(color.fuchsia);
down();
for(let i=0;i<8;i++){
    forward(100);
    right(180-45);
}


// Initialisation B11
setPos(200,200);
setLineWidth(10);
changeColor(color.red);
faceRight();
// Réalisation B11
for(let i=0;i<4;i++){
    forward(50);
    left(90);
    forward(50);
    right(90);
    forward(50);
    right(90);
}


// Initialisation B12
setPos(350,350);
setLineWidth(10);
changeColor("#880088");
faceRight();
// Réalisation 
faceDown();
for(let i=0;i<3;i++){
    forward(50);
    right(90);
}
faceUp();
up();
forward(50);
changeColor(color.green);
down();
for(let j=0;j<3;j++){
    forward(50);
    right(90);
}

--------------C---------------------
// Initialisation C1
setPos(50,225);
setLineWidth(10);
changeColor(color.aqua);
faceRight();
// Réalisation C1
for(let i=0;i<4;i++){
    for(let j=0;j<3;j++){
        forward(100);
        right(180-60);
    }
    forward(100);
}


// Initialisation C2
setPos(225,475);
setLineWidth(10);
changeColor("#8e44ad");
faceUp();
// Réalisation C2
for(let i=0;i<5;i++){
    for(let j=0;j<4;j++){
        forward(50);
        right(90);
    }
    up();
    forward(100);
    down();
}


// Initialisation C3
setPos(25,275);
setLineWidth(10);
shiftColor(.4);
faceRight();
// Réalisation C3
for(let i=0;i<3;i++){
    for(let j=0;j<8;j++){
        forward(100);
        left(180-45);
    }
    up();
    forward(200);
    down()
    shiftColor(.1)
}


// Initialisation C4
setPos(25,250);
setLineWidth(10);
changeColor(color.red);
faceRight();
// Réalisation C4 
for(let i=0;i<5;i++){
    changeColor(color.red);
    for(let k=0;k<3;k++){
        forward(50);
        left(180-60);
    }
    changeColor("#f39c12");
    for(let j=0;j<4;j++){
        forward(50);
        right(90);
    }
    up();
    forward(100);
    down();
}


// Initialisation C5
setPos(250,250);
setLineWidth(10);
shiftColor(0.20);
faceRight();
// Réalisation C5
for(let i=0;i<4;i++){
    for(let j=0;j<8;j++){
        forward(200);
        left(180-45);
    }
    right(90);
    shiftColor(0.25);
}
*/

// Initialisation C6
setPos(250,275);
setLineWidth(10);
changeColor(color.yellow);
faceRight();
// Réalisation C6
for(let i=0;i<3;i++){
    for(let j=0;j<5;j++){
        forward(100);
        left(180-60);
    }
    right(180-60);
}