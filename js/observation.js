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


//Pagination
function nextQuestion(current, next) {

    //Special cases: question 2 and question 5 can skip next questions
    if(current == "q2") {
        if(document.getElementById('yesvisit').checked) {
            HideElement(current);
            ShowElement(next);
        } else {
            HideElement(current);
            ShowElement("q5");
        }
        return;
    }

    if (current == "q5") {
        if(document.getElementById('ready').checked) {
            HideElement(current);
            ShowElement(next);
        } else {
            HideElement(current);
            ShowElement("q8");
        }
        return;
    }

    HideElement(current);
    ShowElement(next);
}

function previousQuestion(current, previous) {
    
    //Special cases: question 5 and question 8 can skip previous questions
    if(current == "q5") {
        if(document.getElementById('yesvisit').checked) {
            HideElement(current);
            ShowElement(previous);
            } else {
            HideElement(current);
            ShowElement("q2");
        }
        return;
    }

    if (current == "q8") {
        if(document.getElementById('ready').checked) {
            HideElement(current);
            ShowElement(previous);
            } else {
            HideElement(current);
            ShowElement("q5");
        }
        return;
    }

    HideElement(current);
    ShowElement(previous);
}

// Restricts to 2 choices only
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

function submitForm() {
    alert("End of form! Data from all inputs should go to database.");
}

