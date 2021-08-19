<?php 
	$pageTitle = "Home";
	include_once "includes/header.php"; 
?>

<div style="text-align:center"> 
	<button onclick="playPause()">Play/Pause</button> 
	<button onclick="makeNormal()">Normal</button>
	<button onclick="makeSmall()">Small</button>
	<button onclick="makeBig()">Big</button>
	<br><br>
	<video id="video1" width="620" autoplay muted controls>
		<source src="video/bears.mp4" type="video/mp4">
		Your browser does not support HTML video.
	</video>
</div> 
  
<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
if (myVideo.paused) 
	myVideo.play(); 
else 
	myVideo.pause(); 
} 

function makeBig() { 
	myVideo.width = 840; 
} 

function makeSmall() { 
	myVideo.width = 320; 
} 

function makeNormal() { 
	myVideo.width = 620; 
} 
</script> 



<?php 
	include_once "includes/footer.php"; 
?>