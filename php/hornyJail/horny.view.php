<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ах ты, Сучка.</title>
    <link rel="shortcut icon" href="img/icon/planet.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/horny.css">
	</head>
<body>
<audio loop  id="playAudio">
<source src="" type="audio/mpeg" id="extra">
</audio>

<div class="spoky">
</div>		
<script>
let body = document.querySelector('.spoky');
let extra = document.querySelector('#extra');
let audio = document.querySelector('#playAudio');

let x = Math.floor(Math.random()*2+1);

body.addEventListener('mousedown',function(){
	
	if(x>1){
		extra.src="";
		extra.src="/audio/science.mp3";
		audio.load();
		audio.play();
	}else{
		extra.src="";
		extra.src="/audio/horny.mp3";
		audio.load();
		audio.play();
	}
},{once: true});


document.addEventListener("keydown",function(e){
	e.preventDefault();	
})




</script>
</body>
</html>