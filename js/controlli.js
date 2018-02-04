function logout() {
	var result = confirm("Vuoi continuare con il logout?");
	if (result) {
		window.open("logout.php");
	}
	else {
		location.reload();
	}
}
