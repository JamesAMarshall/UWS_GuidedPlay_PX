function myFunction() {
    alert("Hello! I am an alert box!");
}


function loadQuestion1() {
    HideElement("q2");
}





function nextQuestion() {
    HideElement("q1");
    ShowElement("q2");
}






function previousQuestion() {
    
}


function submitForm() {
    
}






//////

<script>
    <button onclick="nextQuestion()">Next</button>
</script>

function nextQuestion() {
    HideElement("q3");
    ShowElement("q4");
}