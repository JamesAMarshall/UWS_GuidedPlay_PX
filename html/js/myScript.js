const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('LogIn');
const container = document.getElementById('container');

/*Sliding between panel*/
logInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

