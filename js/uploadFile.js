function UploadFile(){
	var fileInput = document.querySelector("#myfile");
	
	Papa.parse(fileInput.files[0], {
		complete: function(results) {
				console.log(results);
				var dataString = JSON.stringify(results.data);
				var formData = new FormData();
				formData.append("file", dataString);
				SendDataToPHP(formData);
		}
	});
}


function ValidateInput(){
        return true;
}

function ProcessFile(){
        var fileInput   =  document.querySelector("#myfile");
        Papa.parse(fileInput.files[0], {
                complete: function(results) {
                        console.log(results);

						var dataString = JSON.stringify(results.data);
                        var formData = new FormData();
                        formData.append("file", dataString);
                        
                        // PrintJSONToElement("demo", dataInStringFormat);

                        // SendDataToPHP(formData);
                }
        });

        
}

function ParseFileToJSON(file){
	var output = Papa.parse(file.files[0], {
		complete: function(results) {
			return results;
		}
	});
	return output;
}

function getData(){
	var fileInput =  document.querySelector("#myfile");
	console.log(fileInput);
	Papa.parse(fileInput.files[0], {
			complete: function(results) {
					return results.data;
			}
	});
}

function SendDataToPHP(data){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        // Typical action to be performed when the document is ready:
        document.getElementById("demo").innerHTML = xhttp.responseText;
        }
        };
        xhttp.open("POST", "../php/requests/csvProcessor.php", true);
        xhttp.send(data);
}

function PrintJSONToElement(element, string){
        document.getElementById(element).innerHTML = string;
}




// GRAPH


function SetGraphData(graphToSet){

}