const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot'), myslide_1 = document.querySelectorAll('.myslide_1'), dot_1 = document.querySelectorAll('.dot_1');
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

let counter_1 = 1;

slidefun_1(counter_1);
let timer_1 = setInterval(autoSlide_1, 8000);
function autoSlide_1() {
	counter_1 += 1;
	slidefun_1(counter_1);
}
function plusSlides_1(m) {
	counter_1 += m;
	slidefun_1(counter_1);
	resetTimer();
}
function currentSlide_1(m) {
	counter_1 = m;
	slidefun_1(counter_1);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer_1);
	timer_1 = setInterval(autoSlide_1, 8000);
}



function slidefun_1(m) {

	let i_1;
	for(i_1 = 0;i_1<myslide_1.length;i_1++){
		myslide_1[i_1].style.display = "none";
	}
	for(i_1 = 0;i_1<dot_1.length;i_1++) {
		dot_1[i_1].className = dot_1[i_1].className.replace(' active', '');
	}
	if(m > myslide_1.length){
	   counter_1 = 1;
	   }
	if(m < 1){
	   counter_1 = myslide_1.length;
	   }
	myslide_1[counter_1 - 1].style.display = "block";
	dot_1[counter_1 - 1].className += " active";
}
	
