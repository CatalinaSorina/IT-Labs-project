<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stilDialog.css">

<script src="../js/ModalPersonalizat.js"></script>
<script src="../js/jquerymin.js"></script>

</head>
<body>

<h2>Exemplu de modal</h2>

<!-- Trigger/Butonul de deschidere modal -->
<button onclick='creareDialog("Buna","Iti place?","Da","Nu")' id="butonDeschidere">Test</button>

<script type="text/javascript">

	//DEFINESTE actiune buton pro
	$("#butonPro").click(function(){
		// Inchide dialog
		dialogulMeu.style.display = "none";
	});

	// DEFINESTE actiune buton contra
	$("#butonContra").click(function(){
		// Inchide dialog
		dialogulMeu.style.display = "none";
	});

</script>

</body>
</html>
