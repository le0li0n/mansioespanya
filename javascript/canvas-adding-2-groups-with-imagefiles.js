//WIP - have not modified yet to include image files
window.addEventListener('load', eventWindowLoaded, false);



function eventWindowLoaded() {
	canvasApp();
}
function canvasSupport () {
	return Modernizr.canvas;
}
function canvasApp() {
	if (!canvasSupport()) {
		return;
		}

	theCanvas = document.getElementById("canvasOne");
	context = theCanvas.getContext("2d");

	//var canvasWidth = 500; //defined by php page
	
	//var group1 = 2;
	//var group1 = Math.floor((Math.random() * 5) + 1); //defined by php page
	var group1Color = '#'+Math.floor(Math.random()*16777215).toString(16);
	//var group2 = 10;
	//var group2 = Math.floor((Math.random() * 5) + 1);
	var group2Color = '#'+Math.floor(Math.random()*16777215).toString(16);
	if(Math.abs(group1Color - group2Color) < 100)
	{
		var group2Color = '#'+Math.floor(Math.random()*16777215).toString(16);
	}
	var numBalls = group1 + group2;
	//alert(numBalls);
	var textOverlay = group1 + "+" + group2;
	//var xSpacing = canvasWidth/numBalls;
	var xSpacingGroup1 = canvasWidth/group1;
	var xSpacingGroup2 = canvasWidth/group2;
	//alert(xSpacing);
	var maxSize = 8;
	var minSize = 5;
	var maxSpeed = maxSize+5;
	var balls = new Array();
	var tempBall;
	var tempX;
	var tempY;
	var tempSpeed;
	var tempAngle;
	var tempRadius;
	var tempRadians;
	var tempXunits;
	var tempYunits;
	var tempColor;
	var nose = "images/avatarparts/noses/nose9.png";

	for (var i = 0; i < numBalls; i++) {
		tempRadius = Math.floor(Math.random()*maxSize)+minSize;
		tempX = tempRadius*2 + (Math.floor(Math.random()*theCanvas.width)-tempRadius*2);
		tempY = tempRadius*2 + (Math.floor(Math.random()*theCanvas.height)-tempRadius*2);
		
		//tempX = xSpacing/2 + (i * xSpacing);
		//tempY = 100;
		tempSpeed = maxSpeed-tempRadius;
		tempAngle = Math.floor(Math.random()*360);
		tempRadians = tempAngle * Math.PI/ 180;
		tempXunits = Math.cos(tempRadians) * tempSpeed;
		tempYunits = Math.sin(tempRadians) * tempSpeed;
		if(i<=group1-1)
		{
			tempColor = group1Color;
		} else {
			tempColor = group2Color;
		}
		
		//tempColor = '#'+Math.floor(Math.random()*16777215).toString(16); //if you want each ball to have diff color
		tempBall = {x:tempX,y:tempY,radius:tempRadius, speed:tempSpeed, angle:tempAngle,
		xunits:tempXunits, yunits:tempYunits, color:tempColor}
		balls.push(tempBall);
	}
	
	function drawScreen (canvasWidth2,loopnum) {
		context.fillStyle = 'white'; //'#EEEEEE';
		context.fillRect(0, 0, theCanvas.width, theCanvas.height);

		if(canvasWidth2 > 0)
		{
			canvasWidth = canvasWidth2;
		}
		//xSpacing = canvasWidth/numBalls;
		
		//Text
		context.font ="10px sans";
		context.fillStyle = "black";
		//context.fillText(textOverlay,10,10);
		
		//Box
		context.strokeStyle = 'white'; //'#000000';
		context.strokeRect(1, 1, theCanvas.width-2, theCanvas.height-2);

		//Place balls
		context.fillStyle = "#000000";
		//context.fillStyle = '#'+Math.floor(Math.random()*16777215).toString(16);
		var ball;

		//alert( theCanvas.width); //good
		
		for (var i = 0; i <balls.length; i++) {
			ball = balls[i];
			var randomXmotion = Math.floor((Math.random() * 3) + 1);
			//ball.x += ball.xunits;
			//ball.x = (xSpacing/2) + (i)*canvasWidth/numBalls;
			//ball.x = (xSpacing/2) + ( (i*canvasWidth/numBalls) * randomXmotion);
			//ball.y += ball.yunits;
			//ball.y = 50;
			var randomYmotion = Math.floor((Math.random() * 5) + 1);
			ball.y = ball.yunits + 30 + ((loopnum % 2)*randomYmotion);
			
			if(i<=group1-1)
			{
				ball.y = ball.y + 1;
				ball.x = (xSpacingGroup1/2) + (i)*canvasWidth/group1;
				ball.x = ball.x + ((loopnum % 2)*randomXmotion);
			} else {
				ball.y = ball.y + 50;
				ball.x = (xSpacingGroup2/2) + (i-group1)*canvasWidth/group2;
				ball.x = ball.x + ((loopnum % 2)*randomXmotion);
			}
			
			
			context.beginPath();
			context.arc(ball.x,ball.y,ball.radius,0,Math.PI*2,true);
			context.closePath();
			context.fillStyle = ball.color;
			context.fill();
			if (ball.x > theCanvas.width || ball.x < 0 ) {
				ball.angle = 180 - ball.angle;
				updateBall(ball);
			} else if (ball.y > theCanvas.height || ball.y < 0) {
					ball.angle = 360 - ball.angle;
					updateBall(ball);
			} 
			//alert(theCanvas.width);
		}
	}
	



	function updateBall(ball) {
		
		ball.radians = ball.angle * Math.PI/ 180;
		ball.xunits = Math.cos(ball.radians) * ball.speed;
		ball.yunits = Math.sin(ball.radians) * ball.speed;

	}

	


	//for loop was here

	
	var loopnum = 1;
	function gameLoop() {
			window.setTimeout(gameLoop, 50);
			
			drawScreen('',loopnum);
			loopnum ++;
	}

	gameLoop();

	
	formElement = document.getElementById("canvasWidth")
	formElement.addEventListener('change', canvasWidthChanged, false);
	formElement = document.getElementById("canvasHeight")
	formElement.addEventListener('change', canvasHeightChanged, false);
	
	function canvasWidthChanged(e) {
		var target = e.target;
		theCanvas.width = target.value;
		
		drawScreen(theCanvas.width);
	}
	function canvasHeightChanged(e) {
		var target = e.target;
		theCanvas.height = target.value;
		drawScreen();
	}
}