//------------------------------------------
// @Global Variables 



//------------------------------------------
// @Page Management 
{
	function GoToPage(page_element)
	{
		var page = document.getElementById(page_element);
		var pages = document.getElementsByClassName("page");

		for (let index = 0; index < pages.length; index++) {
			const element = pages[index];
			element.classList.add("d-none");
		}		

		page.classList.remove("d-none");
	}

}

//------------------------------------------
// @Validation
{

}

//------------------------------------------
// @Table Code
{
	
}

//------------------------------------------
// @XHTTP Requests
{
	function Request(method, path, callback, formData = null)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				var obj = JSON.parse(xhttp.responseText);
				callback(obj);
			}
		};
		xhttp.open(method, path, true);

		if(formData) xhttp.send(formData);
		else 		 xhttp.send();
	}
}

//------------------------------------------
// @Account Management
{

}


//------------------------------------------
// @School
//------------------------------------------
{
	//------------------------------------------
	// @Observation
	{

		var weather = { question:"q1", answer:""};
		var temp = { question:"q2", answer:""};
		var wind = { question:"q3", answer:""};
		var animals = { question:"q4", answer:null};
		var harvestable = { question:"q6", answer:null};
		var healthy =  { question:"q9", answer:null};
		
		q5_i = -1;
		q7_i = -1;
		q8_i = -1;
		q10_i = -1;

		ClearSelection("q1");
		ClearSelection("q2");
		ClearSelection("q3");
		ClearSelection("q4");
		ClearSelection("q5");
		ClearSelection("q6");
		ClearSelection("q7");
		ClearSelection("q8");
		ClearSelection("q9");
		ClearSelection("q10");

		var q = "q1";

		{
			function Next()
			{
				console.log("Next called on "+q);
				switch (q) {
					case "q1": {
						weather.answer = GetAnswer(q);
						// console.log(weather.answer);

						if(weather.answer)
						{
							q="q2";
							GoToPage(q);
							SetError("q1_invalid", false);
						}
						else { SetError("q1_invalid", true); }
						break;
					}
					case "q2": {
						temp.answer = GetAnswer(q);
						console.log(temp.answer);
						if(temp.answer)
						{
							q="q3";
							GoToPage(q);
							SetError("q2_invalid", false);
						}
						else { SetError("q2_invalid", true); }
	
						break;
					}
					case "q3": {
						wind.answer =  GetAnswer(q);
						// console.log(wind.answer);
						if(wind.answer)
						{
							q="q4";
							GoToPage(q);
							SetError("q3_invalid", false);
						}
						else { SetError("q3_invalid", true); }
						break;
					}
					case "q4": {
						if(!animals.answer)
						{
							animals.answer = GetAnswer(q, "animals");
						}
						else
						{
							var answer = GetAnswer(q, "animals");

							if(answer)
							{
								for (let i = 0; i < animals.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].animal == animals.answer[i].animal) {
											isInAnswer = true;
										}
	
										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + animals.answer[i].animal);
											animals.answer.splice(i,1);
										}	
									}
								}
	
								for (let i = 0; i < animals.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].animal == animals.answer[i].animal) {
											answer.splice(j,1);
										}
									}
								}
	
								for (let index = 0; index < answer.length; index++) {
									const element = answer[index];
									animals.answer.push(element);
								}
							}
							else
							{
								animals.answer = answer;
							}
						}

						if(animals.answer)
						{
							animal_name.innerHTML = animals.answer[0].animal;
							q="q5";
							q5_i=-1;
							GoToPage(q);
						}
						else
						{
							q="q6";
							GoToPage(q);
						}
	
						break;
					}
					case "q5": {
						q5_i++;
						
						animals.answer[q5_i].plants = GetAnswer(q, "animal-plants");
						if(animals.answer[q5_i].plants)
						{
							if(q5_i+1 < animals.answer.length)
							{	
								animal_name.innerHTML = animals.answer[q5_i+1].animal;
								SetSelection(q, animals.answer[q5_i+1].plants);
							}
							else
							{
								q="q6";
								GoToPage(q);
							}
							SetError("q5_invalid", false);
						}
						else
						{
							SetError("q5_invalid", true);
							q5_i--;
						}
						break;
					}
					case "q6": {
						if(!harvestable.answer)
						{
							harvestable.answer = GetAnswer(q, "harvestable");
						}
						else
						{
							var answer = GetAnswer(q, "harvestable");
							if(answer)
							{
								for (let i = 0; i < harvestable.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == harvestable.answer[i].plant) {
											isInAnswer = true;
										}

										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + harvestable.answer[i].plant);
											harvestable.answer.splice(i,1);
										}	
									}
								}

								for (let i = 0; i < harvestable.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == harvestable.answer[i].plant) {
											console.log("cleared" + answer[j].plant + " from answer");
											answer.splice(j,1);
										}
									}
								}

								if(answer.length > 0)
								{
									for (let index = 0; index < answer.length; index++) {
										const element = answer[index];
										console.log("added" + harvestable.answer[index].plant + " to harvestable");
										harvestable.answer.push(element);
									}
								}
							}
							else
							{
								harvestable.answer = answer;
							}
						}


						
						if(harvestable.answer)
						{
							harvest_plant.innerHTML = harvestable.answer[0].plant;
							q="q7";
							// console.log("Go To "+ q +  "[" + q7_i + "]");
							GoToPage(q);
						}
						else
						{
							q="q9"
							GoToPage(q);
						}
						break;
					}
					case "q7": {
						q7_i++;	
						harvestable.answer[q7_i].size = GetAnswer(q);

						if(harvestable.answer[q7_i].size)
						{
							if(q7_i+1 < harvestable.answer.length)
							{
								harvest_plant.innerHTML = harvestable.answer[q7_i+1].plant;
								SetSelection(q, harvestable.answer[q7_i+1].size);
							}	
							else
							{
								plant_location.innerHTML = harvestable.answer[0].plant;						
								q="q8";
								GoToPage(q);
							}
							SetError("q7_invalid", false);
						}
						else
						{
							SetError("q7_invalid", true);
							q7_i--;
						}

						break;
					}
					case "q8": {
						q8_i++;
						harvestable.answer[q8_i].location = GetAnswer(q);
						if(harvestable.answer[q8_i].location)
						{
							if(q8_i+1 < harvestable.answer.length)
							{
								plant_location.innerHTML = harvestable.answer[q8_i+1].plant;
								SetSelection(q, harvestable.answer[q8_i+1].location);
							}
							else
							{
								q="q9";
								GoToPage(q);
							}
							SetError("q8_invalid", false);
						}
						else
						{
							SetError("q8_invalid", true);
							q8_i--;
						}

						break;
					}
					case "q9": {
						if(!healthy.answer)
						{
							healthy.answer = GetAnswer(q, "healthy");
						}
						else
						{
							var answer = GetAnswer(q, "healthy");
							if(answer)
							{
								for (let i = 0; i < healthy.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == healthy.answer[i].plant) {
											isInAnswer = true;
										}
	
										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + healthy.answer[i].plant);
											healthy.answer.splice(i,1);
										}	
									}
								}
	
								for (let i = 0; i < healthy.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == healthy.answer[i].plant) {
											console.log("cleared" + answer[j].plant + " from answer");
											answer.splice(j,1);
										}
									}
								}
	
								if(answer.length > 0)
								{
									for (let index = 0; index < answer.length; index++) {
										const element = answer[index];
										console.log("added" + healthy.answer[index].plant + " to healthy");
										healthy.answer.push(element);
									}
								}
							}
							else
							{
								healthy.answer = answer;
							}
						}


						if(healthy.answer)
						{
							healthy_plant.innerHTML = healthy.answer[0].plant;
							q="q10";
							GoToPage(q);
						}
						else
						{
							q="q_submit"
							GoToPage(q);
						}
						break;
					}
					case "q10": {
						q10_i++;
						healthy.answer[q10_i].reason = GetAnswer(q, "healthy-reasons");
						if(healthy.answer[q10_i].reason)
						{
							if(healthy.answer[q10_i].reason.length == 2)
							{
								if(q10_i+1 < healthy.answer.length)
								{
									healthy_plant.innerHTML = healthy.answer[q10_i+1].plant;
									SetSelection(q, healthy.answer[q10_i+1].reason);
								}
								else
								{
									q="q_submit"
									GoToPage(q);
								}
								SetError("q10_invalid",false);
							}
							else
							{
								SetError("q10_invalid",true);
								q10_i--;
							}
						}
						else
						{
							SetError("q10_invalid",true);
							q10_i--;
						}

						break;
					}
					default:
						break;
				}
			}
	
			function Previous()
			{
				console.log("Previous called on "+q);
				switch (q) {
					case "q1": {
						break;
					}
					case "q2": {
						q="q1";
						GoToPage(q);
						break;
					}
					case "q3": {
						q="q2";
						GoToPage(q);
						break;
					}
					case "q4": {
						q="q3";
						GoToPage(q);
						break;
					}
					case "q5": {
						if(q5_i < 0)
						{
							q="q4";
							GoToPage(q);
						}
						else
						{
							animals.answer[q5_i+1].plants = GetAnswer(q, "heatlhy-reasons");
							console.log();
							animal_name.innerHTML = animals.answer[q5_i].animal;
							SetSelection(q, animals.answer[q5_i].plants);
							q5_i--;
						}
						break;
					}
					case "q6": {
						if(!animals.answer)
						{
							q="q4";
							GoToPage(q);
						}
						else
						{
							q="q5";
							q5_i--;
							GoToPage(q);
						}
						break;
					}
					case "q7": {
						if(q7_i < 0)
						{
							q="q6";
							GoToPage(q);
						}
						else
						{
							harvestable.answer[q7_i+1].size = GetAnswer(q);
							harvest_plant.innerHTML = harvestable.answer[q7_i].plant;
							SetSelection(q, harvestable.answer[q7_i].size);
							q7_i--;
						}
	
						break;
					}
					case "q8": {
						if(q8_i < 0)
						{
							q="q7";
							q7_i--;
							harvest_plant.innerHTML = harvestable.answer[harvestable.answer.length-1].plant;
							GoToPage(q);
						}
						else
						{
							harvestable.answer[q8_i+1].location = GetAnswer(q);
							harvest_plant.innerHTML = harvestable.answer[q8_i].location;
							SetSelection(q, harvestable.answer[q8_i].location);
							q8_i--;
						}
						break;
					}
					case "q9": {
						if(!harvestable.answer)
						{
							q="q6";
							GoToPage(q);
						}
						else
						{
							q="q8";
							q8_i--;
							GoToPage(q);
						}
						break;
					}
					case "q10": {
						if(q10_i < 0)
						{
							q="q9";
							GoToPage(q);
						}
						else
						{
							healthy.answer[q10_i+1].reason = GetAnswer(q, "healthy-reasons");
							healthy_plant.innerHTML = healthy.answer[q10_i].plant;
							SetSelection(q, healthy.answer[q10_i].reason);
							q10_i--;
						}
						break;
					}
					case "q_submit": {
						if(!healthy.answer){
							q="q9";
							GoToPage(q);
						}
						else
						{
							q10_i--;
							q="q10";
							GoToPage(q);
						}
						break;
					}
					default:
						break;
				}
			}
		}

		function SubmitObservation()
		{
			var formData = new FormData();
			formData.append("weather", weather.answer);
			formData.append("temp", temp.answer);
			formData.append("wind", wind.answer);
			formData.append("animals", animals.answer);
			formData.append("harvestable", harvestable.answer);
			formData.append("healthy", healthy.answer);

			var results = [weather, temp, wind, animals, harvestable, healthy];
			console.log(results);

			// Request("POST", "../../php/requests/", console.log,  formData);
		}

		function ValidateSelection(name, checkbox)  
		{  
			var checkboxes = document.getElementsByName(name);  
			
			var numberOfCheckedItems = 0;
			for(var i = 0; i < checkboxes.length; i++)  
			{  
				if(checkboxes[i].checked)  
					numberOfCheckedItems++;  
			}  

			if(numberOfCheckedItems > 2)
			{
				checkbox.checked = false;
				return false;
			}
		} 

		function SetError(errorId, visible)
		{
			var error = document.getElementById(errorId);
			error.style.visibility = (visible) ? "visible" : "hidden";
		}

		function SetSelection(name, selections)
		{
			console.log("Set " + name + "'s selection to ");
			console.log(selections);
			if(selections)
			{
				if(Array.isArray(selections))
				{
					$.each($("input[name='" + name + "']"), function(){
						if(selections.length > 0)
						{
							for (let index = 0; index < selections.length; index++) {
								// const element = selections[index];
								if($(this).val() == selections[index])
								{
									$(this).prop('checked',true);
									return;
								}
								else
								{
									$(this).prop('checked',false);	
								}
							}
						}
						else
						{
							$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
						}
					});


				}
				else
				{
					$.each($("input[name='" + name + "']"), function(){
						if($(this).val() == selections)
						{
							$(this).prop('checked',true);	
						}
						else
						{
							$(this).prop('checked',false);	
						}
					});			
				}
			}
			else
			{
				$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
			}
		}

		function ClearSelection(name)
		{
			$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
		}

		function GetAnswer(name, answerToGet = "")
		{

				switch(answerToGet){
					case"animals":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( {animal:$(this).val(), plants:null});
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"animal-plants":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( $(this).val() );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"harvestable":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( { plant:$(this).val(), size:"", location:""} );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"healthy":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( { plant:$(this).val(), reason:null} );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"healthy-reasons":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( $(this).val() );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}

					default: {
						return $("input[name = " + name + "]:checked").val();
						break;
					}
				}


				
			


		}

	}
	
	//------------------------------------------
	// @Class Management
	{
	
	}
}


//------------------------------------------
// @Research
//------------------------------------------
{
	//------------------------------------------
	// @File Uploading
	{
	
	}
	//------------------------------------------
	// @Database Interface
	{

	}

	//------------------------------------------
	// @Graphing
	{

	}
}



