<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Undian Telkomedutainment 2019</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">
        	body {
        		background: #333;
        	}

        	h1#headerNames {
        		margin-top: 10%;
        		font-family: Georgia, serif;
        		font-size: 150px;
        		text-align: center;
        		cursor: pointer;
        	}

        	.button {
        		width: 150px;
        		margin: auto;
        		padding: 20px;
        		background: #1fa91f;
        		border: 3px solid #fff;
        		border-radius: 10px;
        		color: #fff;
        		font-family: Arial, sans-serif;
        		font-size: 30px;
        		font-weight: bold;
        		text-align: center;
        		text-transform: uppercase;
        		letter-spacing: 2px;
        		display: block;
        		cursor: pointer;
        		position: fixed;
        		bottom: 150px;
        		left: 850px;
        	}

        	#stopButton {
        		background: #ff0000;
        		display: none;
        	}

        	#timerWrapper {
        		margin: 50px 0;
        		color: #fff;
        		font-family: Arial, sans-serif;
        		font-size: 50px;
        		text-align: center;
        		opacity: 0;
        		transition: opacity 1s;
        	}
        	#timerWrapper.visible {
        		opacity: 1;
        	}

        	#timesUp {
        		padding-top: 20%;
        		background-color: red;
        		color: #fff;
        		font-family: Arial, sans-serif;
        		font-size: 100px;
        		font-weight: bold;
        		text-transform: uppercase;
        		text-align: center;
        		position: fixed;
        		left: 0;
        		right: 0;
        		top: 0;
        		bottom: 0;
        		display: none;
        		a {
        			margin: 100px auto;
        			font-size: 15px;
        			position: absolute;
        			bottom: 50px;
        			left: 0;
        			right: 0;
        			display: none;
        		}
        	}
        	#timesUp.backgroundRed {
        		background-color: #333;
        	}

        	@media only screen and (max-width: 600px) {
        		h1 {
        			font-size: 50px;
        		}
        	}
        </style>
        <style>
            html, body {
                background-color: #f5f2e1;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                        
            img{
                height:100%;
            }
            @media only screen and (max-width: 600px) {
                img {
                    height: 150px;
                }
            }

        </style>
    </head>
    <body>
        <div class="position-ref full-height">
        <div class="container">
        	<center><h1 id="headerNames">?</h1></center>
        </div>
        <div class="container">
		<div class="button" id="startButton">start</div>
		<div class="button" id="stopButton">stop</div>
		</div>

<script type="text/javascript">
	"use strict";

	// Change to false if you don't want a timer
	const showTimer = true;

	// Set timer countdown time here in minutes : seconds format
	const time = 0 + ":" + 19;

	// Add list of names here
	const namesList = {!! json_encode($getname) !!};

	// Default variables
	let i = 0;
	let x = 0;
	let intervalHandle = null;
	const startButton = document.getElementById('startButton');
	const stopButton = document.getElementById('stopButton');
	const headerOne = document.getElementById('headerNames');
	const timesUp = document.getElementById('timesUp');
	const timerWrapper = document.getElementById('timerWrapper');
	const timer = document.getElementById('timer');

	// Optional countdown timer
	// Add zero in front of numbers < 10


	const startTimer = function() {
	  const presentTime = timer.innerHTML;
	  const timeArray = presentTime.split(/[:]+/);
	  let m = timeArray[0];
	  let s = checkSecond((timeArray[1] - 1));
		
	  if (s==59) {
			m = m-1;
		}
	 
	  
	  timer.innerHTML = m + ":" + s;
		
		setTimeout(startTimer, 1000);
	}

	// Start or stop the name shuffle on button click
	startButton.addEventListener('click', function() {
		this.style.display = "none";
		stopButton.style.display = "block";
		intervalHandle = setInterval(function () {
			headerNames.textContent = namesList[i++ % namesList.length];
		}, 50);
		if (showTimer===true) {
			timerWrapper.classList.remove('visible');
		}
	});
	stopButton.addEventListener('click', function() {
		this.style.display = "none";
		startButton.style.display = "block";
		clearInterval(intervalHandle);
		timer.innerHTML = time;
		if (showTimer===true) {
			timerWrapper.classList.add('visible');
		}
		startTimer();
	});

	// Allow use of spacebar to start/stop name shuffle
	document.body.onkeyup = function(e) {
		if (e.keyCode == 32) {
			if (x%2===0) {
				startButton.style.display = "none";
				stopButton.style.display = "block";
				intervalHandle = setInterval(function () {
					headerNames.textContent = namesList[i++ % namesList.length];
				}, 50);
				if (showTimer===true) {
					timerWrapper.classList.remove('visible');
				}
			} else {
				startButton.style.display = "block";
				stopButton.style.display = "none";
				clearInterval(intervalHandle);
				timer.innerHTML = time;
				if (showTimer===true) {
					timerWrapper.classList.add('visible');
				}
				startTimer();
			}
			x++; 
		}
	} 

	// Blinking warning
	var backgroundInterval = setInterval(function() {
	  timesUp.classList.toggle("backgroundRed");
	}, 1000)
</script>
        </div>
    </body>
</html>
