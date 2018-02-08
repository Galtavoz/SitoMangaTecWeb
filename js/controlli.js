function mipiace() {
	window.alert("Hai messo mi piace all'articolo!");
}

function preferiti() {
	window.alert("Hai aggiunto l'articolo ai preferiti!");
}

function logout() {
	var result = confirm("Vuoi continuare con il logout?");
	if (result) {
		window.open("logout.php");
	}
	else {
		location.reload();
	}
}

function highlight(id) {
	alert(id);
    var element = document.getElementById(id);
    element.class = "bottonecapacceso";
}


