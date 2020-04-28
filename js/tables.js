function Table_TempData()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var obj = JSON.parse(xhttp.responseText);
			console.log(obj);

			$(document).ready(function() {
				$('#example').DataTable( {
					"data" : obj.data,
					columns: [
						{ "data": "plotNumber" },
						{ "data": "temp" }
					]
				} );
			} );
		}
	};
	xhttp.open("GET", "../php/requests/get_lightTempData.php", true);
	xhttp.send();
}
