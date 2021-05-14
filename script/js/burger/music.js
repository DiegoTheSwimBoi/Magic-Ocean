let music = document.querySelector("#source");
let source =  document.querySelector("#musicOption");
let audio = document.querySelector("#audio");



source.addEventListener("change", function(){
	music.src="";
    music.src = source.value;
	
	
	
	audio.load();
	audio.play();
});

