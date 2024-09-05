var optionsSelected=[];
var actualAnswers=["&lt; img &gt;","background-image: url('');",""]
let totalOptions=document.querySelectorAll("input");
let totalAnswers=document.querySelectorAll("label");
var score=0;
function answerCheck(){
    
}

function collectSelected() {
    for(var i=0;i<totalOptions.length;i++){
        if(totalOptions[i].checked){
            optionsSelected.push(totalAnswers[i].innerHTML);
        }
    }
}

function checkScore() {
    for (let j = 0; j < actualAnswers.length; j++) {
        
    }
}