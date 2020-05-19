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

		{
			var weather = { question:"q1", answer:""};
			var temp = { question:"q2", answer:""};
			var wind = { question:"q3", answer:""};
			var animals = { question:"q4", answer:[]};
			var harvestable = { question:"q6", answer:[]};
			var healthy =  { question:"q9", answer:[]};
			
			q5_i = -1;
			q7_i = -1;
			q8_i = -1;
			q10_i = -1;

			function Continue(question)
			{
				// switch (question) {
				// 	case "q4": {
				// 		$.each($("input[name='" + question + "']:checked"), function(){
				// 			animals.answer.push( {animal:$(this).val(), plants:[]});
				// 		});
						
				// 		console.log(animals.answer);

				// 		animal_name.innerHTML = animals.answer[0].animal;
				// 		q5.classList.remove("d-none");
				// 		q4_continue.classList.add("d-none");
				// 		q5_continue.classList.remove("d-none");
				// 		break;
				// 	}
				// 	case "q5": {
				// 		q5_i++;
				// 		if(q5_i >= animals.answer.length)
				// 		{
				// 			q6.classList.remove("d-none");
				// 			q6_continue.classList.remove("d-none");
				// 			q5_continue.classList.add("d-none");
				// 		}
				// 		else
				// 		{
				// 			animal_name.innerHTML = animals.answer[q5_i].animal;						
				// 		}
				// 		break;
				// 	}
				// 	case "q6": {
				// 		$.each($("input[name='" + question + "']:checked"), function(){
				// 			harvestable.answer.push( { plant:$(this).val(), size:"", location:""} );
				// 		});
						
				// 		console.log(harvestable.answer);

				// 		harvest_plant.innerHTML = harvestable.answer[0].plant;
				// 		q7.classList.remove("d-none");
				// 		q7_continue.classList.remove("d-none");
				// 		q6_continue.classList.add("d-none");
				// 		break;
				// 	}
				// 	case "q7": {
				// 		q7_i++;
				// 		if(q7_i >= harvestable.answer.length)
				// 		{
				// 			plant_location.innerHTML = harvestable.answer[0].plant;						

				// 			q8.classList.remove("d-none");
				// 			q8_continue.classList.remove("d-none");
				// 			q7_continue.classList.add("d-none");
				// 		}
				// 		else
				// 		{
				// 			harvest_plant.innerHTML = harvestable.answer[q7_i].plant;						
				// 		}
				// 		break;
				// 	}
				// 	case "q8": {
				// 		q8_i++;
				// 		if(q8_i >= harvestable.answer.length)
				// 		{
				// 			q9.classList.remove("d-none");
				// 			q9_continue.classList.remove("d-none");
				// 			q8_continue.classList.add("d-none");
				// 		}
				// 		else
				// 		{
				// 			plant_location.innerHTML = harvestable.answer[q8_i].plant;						
				// 		}

				// 		// harvestable.answer[0].size = $('input[name = "q3"]:checked').val();
						
				// 		// console.log(harvestable.answer);

				// 		// harvest_plant.innerHTML = harvestable.answer[0].plant;
				// 		// q7.classList.remove("d-none");
				// 		// // q7_continue.classList.remove("d-none");
				// 		// q6_continue.classList.add("d-none");
				// 		break;
				// 	}
				// 	case "q9": {
				// 		$.each($("input[name='" + question + "']:checked"), function(){
				// 			healthy.answer.push( { plant:$(this).val(), reason:[]} );
				// 		});
						
				// 		console.log(healthy.answer);

				// 		healthy_plant.innerHTML = healthy.answer[0].plant;
				// 		q10.classList.remove("d-none");
				// 		q10_continue.classList.remove("d-none");
				// 		q9_continue.classList.add("d-none");
				// 		break;
				// 	}
				// 	case "q10": {
				// 		q10_i++;
				// 		if(q10_i >= healthy.answer.length)
				// 		{
				// 			q10_continue.classList.add("d-none");
				// 			q_submit.classList.remove("d-none");
				// 		}
				// 		else
				// 		{
				// 			healthy_plant.innerHTML = healthy.answer[q10_i].plant;						
				// 		}
				// 		break;
				// 	}
				// 	default:
				// 		break;
				// }
			}
			
			var q = "q1";

			function Next()
			{
				switch (q) {
					case "q1": {
						weather.answer = $("input[name = " + q + "]:checked").val();
						q="q2";
						GoToPage(q);
						break;
					}
					case "q2": {
						temp.answer = $("input[name = " + q + "]:checked").val();
						q="q3";
						GoToPage(q);
						break;
					}
					case "q3": {
						wind.answer = $("input[name = " + q + "]:checked").val();
						q="q4";
						GoToPage(q);
						break;
					}
					case "q4": {
						$.each($("input[name='" + q + "']:checked"), function(){
							animals.answer.push( {animal:$(this).val(), plants:[]});
						});
					
						// console.log(animals.answer.length);

						if(animals.answer.length > 0)
						{
							animal_name.innerHTML = animals.answer[0].animal;
							q="q5";
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
						if(q5_i+1 < animals.answer.length)
						{
							$.each($("input[name='" + q + "']:checked"), function(){
								animals.answer[q5_i].plants.push( $(this).val() );
							});
							// console.log(animals.answer[q5_i].plants);
							animal_name.innerHTML = animals.answer[q5_i+1].animal;
						}
						else
						{
							$.each($("input[name='" + q + "']:checked"), function(){
								animals.answer[q5_i].plants.push( $(this).val() );
							});
							// console.log(animals.answer[q5_i].plants);
							
							q="q6";
							GoToPage(q);
						}
						break;
					}
					case "q6": {
						$.each($("input[name='" + q + "']:checked"), function(){
							harvestable.answer.push( { plant:$(this).val(), size:"", location:""} );
						});
						
						
						if(harvestable.answer.length > 0)
						{
							harvest_plant.innerHTML = harvestable.answer[0].plant;
							q="q7";
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
						if(q7_i+1 < harvestable.answer.length)
						{
							harvestable.answer[q7_i].size = $("input[name = " + q + "]:checked").val();
							// console.log(harvestable.answer[q7_i].size);	
							harvest_plant.innerHTML = harvestable.answer[q7_i+1].plant;
						}	
						else
						{
							harvestable.answer[q7_i].size = $("input[name = " + q + "]:checked").val();
							// console.log(harvestable.answer[q7_i].size);	
							plant_location.innerHTML = harvestable.answer[0].plant;						
							q="q8";
							GoToPage(q);
						}

						break;
					}
					case "q8": {
						q8_i++;
						if(q8_i+1 < harvestable.answer.length)
						{
							harvestable.answer[q7_i].location = $("input[name = " + q + "]:checked").val();
							// console.log(harvestable.answer[q7_i].location);	
							plant_location.innerHTML = harvestable.answer[q8_i+1].plant;
						}
						else
						{
							harvestable.answer[q7_i].location = $("input[name = " + q + "]:checked").val();
							// console.log(harvestable.answer[q7_i].location);	
							q="q9";
							GoToPage(q);
						}
						break;
					}
					case "q9": {
						$.each($("input[name='" + q + "']:checked"), function(){
							healthy.answer.push( { plant:$(this).val(), reason:[]} );
						});

						
						if(healthy.answer.length > 0)
						{
							healthy_plant.innerHTML = healthy.answer[0].plant;
							// q10.classList.remove("d-none");
							q="q10";
							GoToPage(q);
						}
						else
						{
							q_submit.classList.remove("d-none");
						}
						break;
					}
					case "q10": {
						q10_i++;
						if(q10_i+1 < healthy.answer.length)
						{
							$.each($("input[name='" + q + "']:checked"), function(){
								healthy.answer[q10_i].reason.push( $(this).val() );
							});
							// console.log(healthy.answer[q10_i].reason);
							healthy_plant.innerHTML = healthy.answer[q10_i+1].plant;						
						}
						else
						{
							$.each($("input[name='" + q + "']:checked"), function(){
								healthy.answer[q10_i].reason.push( $(this).val() );
							});
							// console.log(healthy.answer[q10_i].reason);
							q_submit.classList.remove("d-none");
						}
						break;
					}
					default:
						break;
				}
			}

		}


		{ // In Progress
			// var question = ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9"]
			// var question = ["q1", "q2", "q3", "q4", "q5"]
			// var questions = {
			// 	q1:"empty",
			// 	q2:"empty",
			// 	q3:"empty",
			// 	q4
			// };
			// var weather = { question:"q1", answer:""};
			// var temp = { question:"q2", answer:""};
			// var wind = { question:"q3", answer:""};
			// var animals = { question:"q4", answer:[]};

			// var q6 = { question:"q6", answer:[]};
			// var q7 = { question:"q7", answer:[]};
			// var q8 = { question:"q8", answer:[]};
			// var q9 = { question:"q9", answer:[]};

			// var questions = [weather, temp, wind, animals, q6, q7, q8, q9];
			// console.log(questions);

			// var q_index = -1;
			// var q4_index = 0;
		
			// function Next()
			// {
			// 	q_index++;
			// 	if(q_index >= questions.length)
			// 		q_index = questions.length-1;
			// 	GoToPage(questions[q_index].question);
			// }

			// function Next_old()
			// {
			// 	switch(question[q_index]){
			// 		case "q4":
			// 		{
			// 			questions[3] = [];
			// 			$.each($("input[name='" + question[q_index] + "']:checked"), function(){
			// 				questions[q_index].push( {animal:$(this).val(), plants:[]});
			// 			});
		
			// 			if(questions[3].length == 0)
			// 			{
			// 				q_index++;
			// 			}

			// 			q_index++;
			// 			if(q_index >= question.length)
			// 				q_index = question.length-1;
			// 			GoToPage(question[q_index]);
			// 			break;
			// 		}
			// 		case "q5":
			// 		{
			// 			if(q4_index < questions[3].length)
			// 			{
			// 				console.log(questions[3]);
			// 				questions[3][q4_index].plants = GetArrayAnswers(question[4], true);
			// 				console.log(q4_index);
			// 				q4_index++;
			// 			}
			// 			else
			// 			{
			// 				q_index++;
			// 				if(q_index >= question.length)
			// 					q_index = question.length-1;
			// 				GoToPage(question[q_index]);
			// 			}
			// 			break;
			// 		}
			// 		default:
			// 		{
			// 			questions[q_index] = GetArrayAnswers(question[q_index], false);
			// 			q_index++;
			// 			if(q_index >= question.length)
			// 				q_index = question.length-1;
			// 			GoToPage(question[q_index]);
			// 			break;
			// 		}
			// 	}
			// }

			// function Previous()
			// {
			// 	q_index--;
			// 	if(q_index < 0)
			// 		q_index = 0;
			// 	GoToPage(questions[q_index].question);
			// }

			// function GetFormData()
			// {
			// 	// var data = new FormData();

			// 	// Q1
			// 	// var answers = {q1, q2, q3, q4, q5, q6, q7, q8, q9};
			// 	// answers.q1 = $('input[name = "q1"]:checked').val();
			// 	// answers.q2 = $('input[name = "q2"]:checked').val();
			// 	// answers.q3 = $('input[name = "q3"]:checked').val();
			// 	// answers.q4 = GetArrayAnswers("q4");
			// 	// answers.q5 = GetArrayAnswers("q5");
			// 	// answers.q6 = $('input[name = "q6"]:checked').val();
			// 	// answers.q7 = $('input[name = "q7"]:checked').val();
			// 	// answers.q8 = $('input[name = "q8"]:checked').val();
			// 	// answers.q9 = $('input[name = "q9"]:checked').val();
			// 	console.log(questions);
			// }

			// function GetArrayAnswers(question, isArray)
			// {
			// 	var answer;
			// 	if(isArray)
			// 	{
			// 		answer = [];
			// 		$.each($("input[name='" + question + "']:checked"), function(){
			// 			answer.push($(this).val());
			// 		});

			// 	}
			// 	else
			// 	{
			// 		answer = $("input[name = '" + question + "']:checked").val();
			// 	}
			// 	return answer;
			// }
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



