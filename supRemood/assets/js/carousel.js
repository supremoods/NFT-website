const btnExplore = document.querySelector(".btn-exp");
const btnExplore1 = document.querySelector(".btn-exp1");
const btnExplore2 = document.querySelector(".btn-exp2");
const btnExplore3 = document.querySelector(".btn-exp3");



btnExplore.onclick = ()=>{
	window.location = 'index.php#about-section';
}

btnExplore1.onclick = ()=>{
	window.location = 'index.php#about-section';
}

btnExplore2.onclick = ()=>{
	window.location = 'index.php#about-section';
}

btnExplore3.onclick = ()=>{
	window.location = 'index.php#about-section';
}



const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {

	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}
