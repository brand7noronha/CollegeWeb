var optionsSelected = [];
var actualAnswers = ["&lt; img &gt;", "background-image: url('');", "transform: rotate();", "&lt; h1 &gt;", "/* This is a comment. */"]
let totalOptions = document.querySelectorAll("input");
let totalAnswers = document.querySelectorAll("label");
var score = 0;

function answerCheck() {
    collectSelected();
    checkScore();
    // console.log(score);
    document.getElementById("result").innerHTML = `You have scored ${score} out of 5`;
}


function collectSelected() {
    for (var i = 0; i < totalOptions.length; i++) {
        if (totalOptions[i].checked) {
            optionsSelected.push(totalAnswers[i].innerHTML);
        }
    }
}

function checkScore() {
    for (let j = 0; j < actualAnswers.length; j++) {
        if (optionsSelected[j] == actualAnswers[j]) {
            score++;
        }
    }
}