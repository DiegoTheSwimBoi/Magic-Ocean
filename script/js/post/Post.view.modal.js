let container = document.querySelector(".gallery");

let modal = document.querySelector("#myModal");


[...container.children].forEach(item=>{
	item.addEventListener('click', function(e){
		let index=0;
		let divImg = document.createElement('img');
		divImg.src = this.src;
		let modalBody = document.querySelector(".modalBody"),
			exit = document.querySelector(".modalClose");

		index = [...container.children].indexOf(this);
		modal.style.display="block";
		modalBody.append(divImg);

		exit.onclick=function(){
			modal.style.display="none";
			divImg.remove();
		}





		document.addEventListener('keydown', function(e){


			if (e.code == "ArrowRight") {


				[...container.children][index++ % [...container.children].length - 1];


				if (index == [...container.children].length) {
					index = 0;
				}
				divImg.src = [...container.children][index].src;
			}
		});

		document.addEventListener('keydown', function(e){
			if (e.code == "Escape") {
				modal.style.display="none";
				divImg.remove();
			}
		});


		document.addEventListener('keydown', function(e){

			if (e.code == "ArrowLeft") {

				[...container.children][index-- % [...container.children].length];

				if (index == -1) {
					index = [...container.children].length - 1;
				}
				divImg.src = [...container.children][index].src;
			}
		});

	});

});

	
