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

//Unhides the first question
function startForm() {
    ShowElement("q1");
}

//Pagination
function nextQuestion(current, next) {
    
    HideElement(current);

    // For questions that can skip
    if (current == "q2") {
        if (document.getElementById('novisit').checked) {
            ShowElement("q5");
        } else 
        {
            ShowElement(next);
        }
        return;
    }
    if (current == "q5") {
        if (document.getElementById('notReady').checked) {
            ShowElement("q8");
        } else 
        {
            ShowElement(next);
        }
        return;
    }
    
    // If the current question doesn't need to skip
    ShowElement(next);
}

function previousQuestion(current, previous) {
    HideElement(current);

    if (current == "q5") {
        if (document.getElementById('novisit').checked) {
            ShowElement("q2");
        } else 
        {
            //back to Question 4
            ShowElement(previous);
        }
        return;
    }
    if (current == "q8") {
        if (document.getElementById('notReady').checked) {
            ShowElement("q5");
        } else 
        {
            //back to Question 7
            ShowElement(previous);
        }
        return;
    }

    ShowElement(previous);
}

//NOT DONE, just spits out every value inside an array (list of creatures OR list of plants)
function cycleChoices(current, array) {
    if (current == "q3" || current == "q6") {

        var array = document.getElementsByName(array);
        var i;
        
        //spit out every value in this array 
        for (i = 0; i < array.length; i++) {
            alert(array[i].value);
        }

    }
}

// Restricts checkboxes to 2 choices only
// Question 8
$("input[name=healthiestPlants]").change(function(){
    var max= 2;
    if( $("input[name=healthiestPlants]:checked").length == max ){
        $("input[name=healthiestPlants]").attr('disabled', 'disabled');
        $("input[name=healthiestPlants]:checked").removeAttr('disabled');
    }else{
         $("input[name=healthiestPlants]").removeAttr('disabled');
    }
})

// Question 9
$("input[name=plantA]").change(function(){
    var max= 2;
    if( $("input[name=plantA]:checked").length == max ){
        $("input[name=plantA]").attr('disabled', 'disabled');
        $("input[name=plantA]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantA]").removeAttr('disabled');
    }
})

// Question 10
$("input[name=plantB]").change(function(){
    var max= 2;
    if( $("input[name=plantB]:checked").length == max ){
        $("input[name=plantB]").attr('disabled', 'disabled');
        $("input[name=plantB]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantB]").removeAttr('disabled');
    }
})
////////////////////////////////////////////////

//NOT DONE
function submitForm() {
    alert("End of form! Data from all inputs should go to database.");
}




