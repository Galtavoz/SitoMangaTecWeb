function mipiace() {
	window.alert("Hai messo mi piace all'articolo!");
}

function preferiti() {
	window.alert("Hai aggiunto l'articolo ai preferiti!");
}
function rpreferiti() {
	window.alert("Hai rimosso l'articolo ai preferiti!");
}
function logout() {
	var result = confirm("Vuoi continuare con il logout?");
	if (result) {
		window.location.replace("logout.php");
	}
	else {
		location.reload();
	}
}

function highlight(id, codice) {
	var elements = document.getElementsByClassName("bottonecapacceso");
	for(var i=0; i<elements.length; i++) {
		elements[i].className = "bottonecapspento";
	}
	var element = document.getElementById(id);
	element.className = "bottonecapacceso";
	window.location.replace("articolo.php?cod="+codice+"&inizio="+id+"#boxCapitoli");
}

function logsign(id) {
	if(id=="id01"){
		document.getElementById('id01').style.display='block';
		document.getElementById('id02').style.display='none';
	}
	else {
		document.getElementById('id01').style.display='none';
		document.getElementById('id02').style.display='block';		
	}
}


