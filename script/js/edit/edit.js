let cat = document.querySelector("#categories");
let sub = document.querySelector("#subs");


async function f(id){
    let response = await fetch('/php/author/query.php?id=' + cat.value)
    let data = await response.json();

    let txt="";

    data.forEach( item =>{
        txt+=`
	<option value="${item.id}" >${item.name}</option>
		`;
    });

    sub.innerHTML = txt;
}

let id;

cat.addEventListener("change", async function(){
    id = cat.value;
    await f(id);
});