// select all elements

const question = document.getElementById("question");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const endPage = document.getElementById("endContainer");
const quiz = document.getElementById("quiz");


let questions = [
    {
        question : "Quel est le nom du fondateur du Consumer Electronics Show ?",
        choiceA : "Bill Gates",
        choiceB : "Steve Jobs",
        choiceC : "Jack Wayman",
        correct : "C"
    },{
        question : "En quelle année est lancé le CES pour la première fois ?",
        choiceA : "1973",
        choiceB : "1970",
        choiceC : "1967",
        correct : "C"
    },{
        question : "Dans quelle ville s’est déroulé ce premier salon ?",
        choiceA : "Los Angeles",
        choiceB : "New York",
        choiceC : "Chicago",
        correct : "B"
    },{
        question : "Quelle technologie fut présentée en avant-première au CES de 1996 ?",
        choiceA : "RDS",
        choiceB : "MP3",
        choiceC : "DVD",
        correct : "C"
    },{
        question : "Quel nom connu portent les interventions des présidents d’entreprises au CES ?",
        choiceA : "Keynotes",
        choiceB : "Tech Talks",
        choiceC : "Pitchs",
        correct : "A"
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<h2>"+ q.question +"</h2>";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        score++;
    }else{

    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        quizzEnd();
    }
}


// score render
function quizzEnd(){
    endPage.style.display = "flex";
    quiz.style.display = "none";
}

function submit(){
    window.location.href = "end.html";
}



















