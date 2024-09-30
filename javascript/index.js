var btn_fn = document.getElementById("flightnum");
var btn_fr = document.getElementById("flightrt");
var cont1 = document.getElementById("container1");
var cont2 = document.getElementById("container2");

btn_fn.addEventListener('click', () => {
	cont1.style.display = 'block';
	cont2.style.display = 'none';
});

btn_fr.addEventListener('click', () => {
	cont1.style.display = 'none';
	cont2.style.display = 'block';
});

