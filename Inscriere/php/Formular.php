<!DOCTYPE html>
<html>
<head>
<title>IT-Labs: Inscriere la curs</title>
<link rel="stylesheet" href="../css/Formular.css">
<script src="../js/jquerymin.js"></script>
</head>

<body>

	<p style="position: sticky;">IT-Labs</p>

	<form method="POST" action="" name="myform">
		
		<table style="margin: auto;" id="date">
		
			<tr>
				<th style="font: 20px verdana;" colspan=2>Formular de înscriere</th>
			</tr>

			<tr>
				<th></th>
				<th style="font: 15px verdana;">Introduceți datele:</th>
			</tr>

			<tr>
				<td>Nume:</td>
				<td><input type="text" name="nume" id="nume"></td>
			</tr>

			<tr>
				<td>Prenume:</td>
				<td><input type="text" name="prenume" id="prenume"></td>
			</tr>

			<tr>
				<td>Email:</td>
				<td><input type="email" id="email" name="email"></td>
			</tr>
			
			<tr>
				<td>Telefon:</td>
				<td><input type="tel" id="tel" name="tel"></td>
			</tr>
			
			<tr>
				<td>Studii:</td>
				<td><input type="text" name="studii" id="studii"></td>
			</tr>
			
			<tr>
				<td>De unde ați aflat de noi?</td>
				<td><input type="text" name="reclama" id="reclama"></td>
			</tr>
			
			<tr>
				<td>Nivel limba engleză:</td>
				<td><input type="text" name="nivEng" id="nivEng"></td>
			</tr>
			
			<tr>
				<td>Sunteți de acord cu prelucrarea datelor?</td>
				<td><input type="text" name="prelucrareDate" id="prelucrareDate"></td>
			</tr>
			
			<tr>
				<td colspan=2>__.__.__.__.__.__.__.__.__.__.__.__.__.__.__.__.__.__</td>
			</tr>
			
			<tr>
				<td colspan=2>  </td>
			</tr>

			<tr>
				<td><button type="button" onclick="inregistrare()" name="inregistrare">Salvează</button></td>
				<td><button type="button" onclick="reset()" name="reset">Resetează</button></td>
			</tr>

		</table>
	</form>

<script type="text/javascript">
	function inregistrare(){
		var nume=$("#nume"+nr).val();
		var prenume=$("#prenume"+nr).val();
		var email=$("#email"+nr).val();
		var tel=$("#tel"+nr).val();
		var studii=$("#studii"+nr).val();
		var reclama=$("#reclama"+nr).val();
		var nivEng=$("#nivEng"+nr).val();
		var prelucrareDate=$("#prelucrareDate"+nr).val();
		var url="http://localhost/IT-Labs-project/Inscriere/php/IntroducereDate.php?actiune=inregistrare&nume="
			+nume+"&prenume="+prenume+"&email="+email+"&tel="+tel+"&studii="+studii+"&reclama="+reclama+"&nivEng="+nivEng
			+"&prelucrareDate="+prelucrareDate;
		location.assign(url);
	}

</script>

</body>
</html>
