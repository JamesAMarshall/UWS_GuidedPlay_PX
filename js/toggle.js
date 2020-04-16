function signupFunction(){
    var login = document.getElementById("login");
	var signup = document.getElementById("sign");
	
	if (login.style.display === "block") {
		login.style.display = "none";
	} 
	else {
		login.style.display = "block";
	}
	
	if (signup.style.display === "none") {
		signup.style.display = "block";
	} 
	else {
		signup.style.display = "none";
	}
}
