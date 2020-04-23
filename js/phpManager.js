function Logout()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var obj = JSON.parse(xhttp.responseText);
			console.log(obj.debug.replace(/<br>/gi,"\n"));
			console.log(obj.result);

			if(obj.debug.includes("session destroyed"))
			{
				window.location.assign("../index.php");
			}
		}
	};
	xhttp.open("GET", "../php/requests/logout.php", true);
	xhttp.send();
}

function ManageClasses()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var elementId = "output_manageClasses";
			var obj = logResponseText(xhttp.responseText);
			document.getElementById(elementId).innerHTML = JSON.stringify(obj.result);			
		}
	};
	xhttp.open("GET", "../php/requests/get_classes.php", true);
	xhttp.send();
}

function ManageUsers()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var elementId = "output_manageUsers";
			var obj = logResponseText(xhttp.responseText);
			document.getElementById(elementId).innerHTML = JSON.stringify(obj.result);	
		}
	};
	xhttp.open("GET", "../php/requests/get_users.php", true);
	xhttp.send();
}

// function Redirect(validResponse_shouldContain, redirectionPath)
// {
// 	if(xhttp.responseText.includes(validResponse_shouldContain))
// 	{
// 		logResponseText(xhttp.responseText);
// 		window.location.assign(redirectionPath);
// 	}
// 	else
// 	{
// 		logResponseText(xhttp.responseText);
// 	}
// }