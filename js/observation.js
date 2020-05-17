function myFunction() {
    alert("Hello! I am an alert box!");
}


function loadQuestion1() {
    HideElement("q2");
}

function nextQuestion() {
    alert("Hello! I am an alert box!");
    // HideElement("q1");
    // ShowElement("q2");
}

function previousQuestion() {
    
}


<script>
    <button onclick="nextQuestion()">Next</button>
</script>

function nextQuestion() {
    HideElement("q3");
    ShowElement("q4");
}