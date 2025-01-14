<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	// Grab elements, create settings, etc.
	var video = document.getElementById('video');

	// Get access to the camera!
	if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
	    // Not adding `{ audio: true }` since we only want video now
	    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
	        //video.src = window.URL.createObjectURL(stream);
	        video.srcObject = stream;
	        video.play();
	    });
	}

	/* Legacy code below: getUserMedia 
	else if(navigator.getUserMedia) { // Standard
	    navigator.getUserMedia({ video: true }, function(stream) {
	        video.src = stream;
	        video.play();
	    }, errBack);
	} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
	    navigator.webkitGetUserMedia({ video: true }, function(stream){
	        video.src = window.webkitURL.createObjectURL(stream);
	        video.play();
	    }, errBack);
	} else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
	    navigator.mozGetUserMedia({ video: true }, function(stream){
	        video.srcObject = stream;
	        video.play();
	    }, errBack);
	}
	*/
	
	</script>
</head>
<body>
<video id="video" width="640" height="480" autoplay></video>
<button id="snap">Snap Photo</button>
<canvas id="canvas" width="640" height="480"></canvas>
</body>
</html>