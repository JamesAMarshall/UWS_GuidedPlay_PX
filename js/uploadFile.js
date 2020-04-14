
function validateInput(){
        return true;
}

function processFile(){
        var fileInput   =  document.querySelector("#myfile");
        Papa.parse(fileInput.files[0], {
                complete: function(results) {
                        console.log(results);

                        var formData = new FormData();
                        formData.append("file", JSON.stringify(results.data));
                
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        // Typical action to be performed when the document is ready:
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                        }
                        };
                        xhttp.open("POST", "../php/requests/csvProcessor.php", true);
                        xhttp.send(formData);
                }
        });

        
}