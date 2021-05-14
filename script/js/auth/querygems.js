let heart = document.querySelector('.heart');
let hole = document.querySelectorAll('.dropzone');

let extra = document.querySelector('#extra');
let audio = document.querySelector('#playAudio');

let arrDrop = []; 
let arrDrag = [];

let hrs = document.querySelector('#htsp');

function array_compare(a, b)
{
    if(a.length != b.length)
       return false;

    for(i = 0; i < a.length; i++)
       if(a[i] != b[i])
          return false;

    return true;
}




heart.addEventListener('click',function(){

for(var value of hole.values()) {
  arrDrop.push(value.id);
  
  
  for(var index of value.childNodes.values()){
	arrDrag.push(index.className);
  }
}	



if(array_compare(arrDrop, arrDrag)){
	extra.src='/audio/enter.mp3';
	audio.load();
	audio.play();
	hrs.value="";
	hrs.value="Harmonix";
	alert('Молодец!');
}else{
	extra.src='/audio/false.mp3';
	audio.load();
	audio.play();
	hrs.value="";
	hrs.value="false";
	alert('Попробуй еще раз.');
}



});