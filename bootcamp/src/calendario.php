
<?php

function spanishDaysOfTheWeek($dayOfTheWeek) {

    // $dayOfTheWeek = date("l");
    
    switch($dayOfTheWeek){
        case ("Monday"):
            $dayOfTheWeekES = "Lunes";
            break;
        case ("Tuesday"):            
            $dayOfTheWeekES = "Martes";
            break;
        case ("Wednesday"):
            $dayOfTheWeekES = "Miércoles";
            break;
        case ("Thursday"):            
            $dayOfTheWeekES = "Jueves";
            break;
        case ("Friday"):
            $dayOfTheWeekES = "Viernes";
            break;
        case ("Saturday"):
            $dayOfTheWeekES = "Sábado";
            break;
        case ("Sunday"):
            $dayOfTheWeekES = "Domingo";
            break;
      }

    return $dayOfTheWeekES;
}

$day = date('l');
$dayInSpanish = spanishDaysOfTheWeek($day);

//print_r($GLOBALS);
//print_r($_SESSION);
$persona = $_GET['name'];
?>

<html>
<head>
<title>Test Exercise</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php require_once 'mimenu.php'; ?>

    <h1>Hola, <?php echo $persona ?></h1>
    <p>Hoy es <strong><?php echo $dayInSpanish; ?></strong>. ¿Qué tal estás?</p>
</div>

</body>
</html>
