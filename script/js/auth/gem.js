let h1 = document.querySelector('.message');
h1.addEventListener('click',function(){
	alert('За колонами чудес, \n Открывается нам лес. \n Камни в ряд ты разложи. \n Сети в руки ты возьми. ');
});



let dragstart = function (event) {
    event.dataTransfer.setData("text", event.target.id);
	//отправляем данные и берём ID
}

let dragover = function (event) {
    event.preventDefault();
}

//Получаем ID картинки и перемещаем её в ячейку
let drop = function (event) {
    let imageId = event.dataTransfer.getData("text");
    event.target.appendChild(document.getElementById(imageId));
}

//Обработчик - разрешаем перетаскивание
let cells = document.getElementsByClassName("dropzone");
Array.from(cells).forEach((element) => {
    element.addEventListener('dragover', dragover);
    element.addEventListener('drop', drop);
});

//Обработчик - все картинки
let images = document.getElementsByTagName('img');
Array.from(images).forEach((element) => {
    element.addEventListener('dragstart', dragstart);
});