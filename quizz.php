<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body onload="renderQuestion()">
<div class="container-fluid">
    <div id="container" class="card text-center position-absolute top-50 start-50 translate-middle col-10 col-xl-6">
        <div id="quiz" class="card-body row justify-content-center">
            <img src="img/circle-question-regular.svg" style="">
            <div id="question" class="card-title col-12"></div>
            <div id="choices" class="col-6">
                <div class="choice btn btn-primary col-12" id="A" onclick="checkAnswer('A')"></div>
                <div class="choice btn btn-primary col-12" id="B" onclick="checkAnswer('B')"></div>
                <div class="choice btn btn-primary col-12" id="C" onclick="checkAnswer('C')"></div>
            </div>
        </div>
        <div id="endContainer" style="display: none" class="card-body row justify-content-center">
                <img src="img/shoe-prints-solid.svg">
            <h2>Allez encore une derniere étape !<br>
                    Remplisser ce formulaire pour que l'on puisse vous recontacter en cas de victoire
                </h2>
            <form id="form" class="col-8">
                <input id="name" type="text" placeholder="Nom">
                <input id="firstname" type="text" placeholder="Prénom">
                <input id="email" type="text" placeholder="E-MAIL">
                <input id="submit" type="submit" value="GO!" onclick="submit()">
            </form>
        </div>
    </div>
</div>
    <script src="quiz.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


