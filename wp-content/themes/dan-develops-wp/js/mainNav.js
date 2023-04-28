docReady(function () {

	let burger = document.querySelector('.header__burger');
	let nav = document.querySelector('.main-nav');

	burger.addEventListener('click', function(){
		burger.classList.toggle('active');
		nav.classList.toggle('active');
	})

});