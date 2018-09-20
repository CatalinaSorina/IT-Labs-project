<html>

<title>Buton dialog</title>

<head></head>

<body>

<h3>Dialog</h3>

<button id="dialogPersonalizat">Vezi dialog</button>

<script type="text/javascript">

var x = document.getElementById("dialogPersonalizat"); 

function modalDialog(){
	document.showModal(); 
}

function showDialog() { 
	x.show({
        title: 'Dialog personalizat',
        message: 'Iti place acest dialog?',
        buttons: [{
            label: 'Da',
            action: modalDialog() {
                x.setMessage('Ma bucur.');
            }
        }, {
            label: 'Nu',
            action: modalDialog() {
                x.setMessage('Poti sa il personalizezi.');
            }
        }]
    });
} 

</script>

</body>

</html>