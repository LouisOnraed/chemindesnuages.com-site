function verifierNom(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('nom');
			
	var caracteres = "'`";
			
	if(caracteres.indexOf(touche) == -1) {
        champ.value += touche;
    }
			
}

function verifierPrenom(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('prenom');
			
	var caracteres = "'`";
			
	if(caracteres.indexOf(touche) == -1) {
        champ.value += touche;
    }
			
}