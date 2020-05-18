// By default, all questions are hidden when the page first loads. 
function hideAllQuestions() {
    HideElement("q1");
    HideElement("q2");
    HideElement("q3");
    HideElement("q4");
    HideElement("q5");
    HideElement("q6");
    HideElement("q7");
    HideElement("q8");
    HideElement("q9");
    HideElement("q10");
}

//unhides the first question
function startForm() {
    ShowElement("q1");
}

function nextQuestion(currentQuestion, nextQuestion) {
    HideElement(currentQuestion);
    ShowElement(nextQuestion);
}

function previousQuestion(currentQuestion, previousQuestion) {
    HideElement(currentQuestion);
    ShowElement(previousQuestion);
}

function skipQuestion(currentQuestion, specificQuestion){
	HideElement(currentQuestion);
    ShowElement(specificQuestion);
}


function submitForm() {
    alert("End of form! Data from all inputs should go to database.");
}




// Limit selection of checkboxes
$("input[name=healthiestPlants]").change(function(){
    var max= 2;
    if( $("input[name=healthiestPlants]:checked").length == max ){
        $("input[name=healthiestPlants]").attr('disabled', 'disabled');
        $("input[name=healthiestPlants]:checked").removeAttr('disabled');
    }else{
         $("input[name=healthiestPlants]").removeAttr('disabled');
    }
})

$("input[name=plantA]").change(function(){
    var max= 2;
    if( $("input[name=plantA]:checked").length == max ){
        $("input[name=plantA]").attr('disabled', 'disabled');
        $("input[name=plantA]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantA]").removeAttr('disabled');
    }
})

$("input[name=plantB]").change(function(){
    var max= 2;
    if( $("input[name=plantB]:checked").length == max ){
        $("input[name=plantB]").attr('disabled', 'disabled');
        $("input[name=plantB]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantB]").removeAttr('disabled');
    }
})

// Progress Bar Function
$(document).ready(function(){

	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;

	setProgressBar(current);

/*Increment the progress bar*/
$(".next").click(function(){

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//show the next fieldset
		next_fs.show();
	

setProgressBar(++current);
});

/* decrementing the progress bar*/
$(".previous").click(function(){

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();


	//show the previous fieldset
	previous_fs.show();

	
	setProgressBar(--current);
});

	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
		.css("width",percent+"%")
	}

	$(".submit").click(function(){
		return false;
	})

});
