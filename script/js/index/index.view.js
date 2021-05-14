// Start-work with index.view.js;
// Working with index.php Face-site;

let container = 3240;
let body = document.body;



body.scrollTo({
	top: container/3,
    left:0
});


console.log(container);

// Fetch our animated navs;

let animated_header = document.querySelector('.Navheader'),
    animated_footer = document.querySelector('.Navfooter');

// Fetch our blocks-direction;    
let moveToMap = document.getElementById("header_map"),
    moveToBook = document.getElementById("footer_book");




//Smooth scroll to Map (top);    
animated_header.addEventListener('click', function (e) {
    e.preventDefault();
    moveToMap.scrollIntoView({
        block: 'center',
        behavior: "smooth"
    });
});

//Smooth scroll to Book (bottom); 
animated_footer.addEventListener('click', function (e) {
    e.preventDefault();
    moveToBook.scrollIntoView({
        block: 'center',
        behavior: "smooth"
    });
});



// End-work with index.view.js;