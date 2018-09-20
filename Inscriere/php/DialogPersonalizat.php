<!DOCTYPE html>
<html>
<head>

<style>
body {text-align:center; font-family: Helvetica; color: #444660;}

/* Modal (fundalul) */
.modal {
    display: none; /* Ascundere */
    position: fixed; /* Fixare */
    padding-top: 100px; /* Locatia cadranului */
    left: 0; /* Distanta fata de partea stanga */
    top: 0; /* Distanta fata de partea de sus */
    width: 100%; /* Latime totala */
    height: 100%; /* Inaltime totala */
    overflow: auto; /* Scroll daca e nevoie */
    background-color: rgba(0, 0, 0, 0.8); /* Fundal cu umbra transparenta */
}

/* Elemente in modal */
.wrap {
    position: relative; /* Pozitionare in raport cu pozitia normala */
    zoom: 100%; /* Zoom la pagina web */
    font-family: Helvetica; /* Font text */
    color: #444660; /* Culoare text */
    text-align: center; /* Aliniere text */
    margin: auto; /* Setare automata a marginii fata de elemente */
    background-color: #D9E3FF; /* Culoare fundal */
    border: 1px solid #00081D; /* Marime, tip si culoare bordura */
    border-radius: 10px; /* Rotunjire bordura */
    width: 30%; /* Latime */
    height: 25%; /* Inaltime */
}

/* Butonul CLOSE */
.close {
    position: absolute; /* Pozitionare in functie de elementul contur parinte */
    border-radius: 10px; /* Rotunjire bordura */
    padding: auto; /* Distanta colturi */
    color: #363636; /* Culoare text */
    background-color: #F91313; /* Culoare fundal */
    top: 5px; /* Distanta fata de partea de sus */
    right: 5px; /* Distanta fata de partea dreapta */
    font: 20px bold Helvetica; /* Marime, tip si stil text */
    border: 1px solid #8C0000; /* Marime, tip si culoare bordura */
}

.close:hover,
.close:focus {
    color: #000; /* Culoare text cand pui mouse-ul pe butonul */
    cursor: pointer; /* Cum sa arate mouse-ul */
}

#butonDeschidere {
    border: 1px solid #000;
	border-radius: 10px;
	height: 35px;
	width: 140px;
	color: white; 
	background-color: #362D2D;
}

#butonPro {
    padding: 8px;
    bottom:8px;
    left:8px;
    position: absolute;
    border: 1px solid #1F3F19;
	border-radius: 10px;
	color: white; 
	background-color: #499E39;
}

#butonContra {
    padding: 8px;
    position: absolute;
    bottom:8px;
    right:8px;
    border: 1px solid #751818;
	border-radius: 10px;
	color: white; 
	background-color: #D11919;
}

#dialogDetalii {
    text-align: left;    
    marigin: auto;
    position: absolute;
    top: -1px;
    left: -1px;
    right: -1px;
    border: 1px solid #00081D;
    padding: 10px;
    background-color: #1E3DE3;
    font-family: Helvetica;
    color: #00081D;
}

#intrebare {
    font-family: 15px Helvetica;
    overflow: auto;
    text-align: center;
    border: 0px;
    position: absolute;
    top: 35%;
    right: 25%;
    left: 25%;
    bottom: 5%;
}


</style>
</head>
<body>

<h2>Exemplu de dialog</h2>

<!-- Trigger/Butonul de deschidere a dialogului -->
<button id="butonDeschidere">Deschide dialog</button>

<!-- Modal -->
<div id="titluDialog" class="modal">

  <!-- Elemente in modal -->
  <div class="wrap">
    
    <label id="dialogDetalii">Primul meu dialog</label>  
    
    <button class="close">x</button>
     
    <label id="intrebare">Ce parere ai?</label> 
       
    <button id="butonPro" class="butonPersonalizat" onclick='actiunePro()'>Arata bine</button>
    
    <button id="butonContra" class="butonPersonalizat" onclick='actiuneContra()'>Arata rau</button>
  </div>

</div>

<script>

var adaugareDialog='
	// Trigger/Butonul de deschidere a dialogului
	<button id="butonDeschidere">Deschide dialog</button>
	// Modal
	<div id="titluDialog" class="modal">
	  //Elemente in modal
	  <div class="wrap">
	    
	    <label id="dialogDetalii">Primul meu dialog</label>  
	    
	    <button class="close">x</button>
	     
	    <label id="intrebare">Ce parere ai?</label> 
	       
	    <button id="butonPro" class="butonPersonalizat" onclick='actiunePro()'>Arata bine</button>
	    
	    <button id="butonContra" class="butonPersonalizat" onclick='actiuneContra()'>Arata rau</button>
	  </div>

	</div>';

// Defineste textul intreabare al dialogului
var intrebareText=document.getElementById("intrebare").textContent;

// Defineste dialogul
var dialogulMeu = document.getElementById('titluDialog');

// Defineste butonul ce ia dialogul
var butonDeschide = document.getElementById("butonDeschidere");

// Defineste butonul ce inchide dialogul cu elementul <span>
var butonInchide = document.getElementsByClassName("close")[0];

// Deschide dialog cand se apasa butonul ce ia dialogul
butonDeschide.onclick = function() {
	dialogulMeu.style.display = "block";
}

// Cand se apasa pe <span> (x), inchide dialogul
butonInchide.onclick = function() {
	dialogulMeu.style.display = "none";
// 	PT REVENIREA TEXTULUI INTREBARII
// 	document.getElementById("intrebare").innerHTML = intrebareText+" "; 
}

// Inchide dialogul daca se apasa oriunde in exteriorul dialogului
window.onclick = function(event) {
    if (event.target == dialogulMeu) {
    	dialogulMeu.style.display = "none";
    }
}

// Actiune pro
function actiunePro(){
// 	PT SCHIMBARE TEXT INTREBARE
// 	document.getElementById("intrebare").innerHTML = text; 
// 	PT INCHIDERE DIALOG
	dialogulMeu.style.display = "none";
}

// Actiune contra
function actiuneContra(){
// 	PT INCHIDERE DIALOG
	dialogulMeu.style.display = "none";
}

</script>

</body>
</html>
