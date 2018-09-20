
//function myFunction() { 
//    document.getElementById("dialogPersonalizat").showModal(); 
//    
//}

var dialog = document.getElementById("dialogPersonalizat"); 

function showDialog() { 
	dialog.show({
        title: 'Default Title',
        message: 'Click buttons below.',
        buttons: [{
            label: 'Title 1',
            action: function(dialog) {
                dialog.setTitle('Title 1');
            }
        }, {
            label: 'Title 2',
            action: function(dialog) {
                dialog.setTitle('Title 2');
            }
        }]
    });
} 

function closeDialog() { 
    dialog.close(); 
}