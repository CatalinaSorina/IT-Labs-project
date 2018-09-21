
// Utilizeaza actiunea creareDialog(...) pentru a apela un modal

function creareDialog(dialogNume,intrebareText,numeButonPro,numeButonContra) {
	// Adaugare modal
	$("body").html($("body").html()+'<div id="chenarDialog" class="modal">'+
			'<div class="wrap">'+
			'<label id="dialogDetalii">'+dialogNume+'</label>'+
			'<button class="close">x</button>'+
			'<label id="intrebare">'+intrebareText+'</label>'+
			'<button id="butonPro">'+numeButonPro+'</button>'+
			'<button id="butonContra">'+numeButonContra+'</button>'+
			'</div>'+
			'</div>');
	// Defineste modal
	dialogulMeu = document.getElementById('chenarDialog');
	// Afisare modal
	dialogulMeu.style.display = "block";
	// Modifica mereu titlul descrierii
	document.getElementById("dialogDetalii").innerHTML =dialogNume;
	// Defineste butonul de inchidere
	var butonInchide = document.getElementsByClassName('close')[0];
	// Defineste actiunea butonului de inchidere
	butonInchide.onclick = function() {
		dialogulMeu.style.display = "none";
	}
	// Defineste actiune click pe pagina
	window.onclick = function(event) {
	    if (event.target == dialogulMeu) {
	    	dialogulMeu.style.display = "none";
	    }
	}
	
}