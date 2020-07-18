<!DOCTYPE html>
<!-- https://aidanb.xyz -->
<html>
	<head>
		<link rel="stylesheet" href="/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="js.cookie.js"></script>
		<script src="iframedetect.js"></script>
		<script src="rcdisable.js"></script> <!-- disables right click, you might want to remove this -->
		<script src="player.js"></script>
	</head>
	<body>
		<center>
			<video id="player" controlsList="nodownload">
				<source src="video.mp4" type="video/mp4">
				<source src="video.ogg" type="video/ogg">
			</video>
			<button id="mute" type="button" onclick="mutev()"><i class="material-icons">volume_up</i></button>
			<br>
			<p id="timecount">00:00:00</p>
			<button id="back" type="button" onclick="back()">|&#9668;&#9668;</button>
			<button style="padding: 15px 15px !important;" id="plpau" type="button" onclick="pl()">&#9658;</button>
			<button id="forward" type="button" onclick="forward()">&#9658;&#9658;|</button>
			<br>
			<button id="fs" type="button" onclick="playerfs()">FULLSCREEN</button>
			<button id="sizeSm" type="button" onclick="psizesm()">SM</button>
			<button id="sizeMed" type="button" onclick="psizemed()">MED</button>
			<button id="sizeLg" type="button" onclick="psizelg()">LG</button>
		</center>
	</body>
</html>