<html>
    <head>
        <title>Ejercicio  PHP</title>
    </head>
    <body>
        <?php
        $name = "Carlos";

        function dayWeekSpanish()
        {
            $weekDay = date("l");
            switch ($weekDay) {
                case "Sunday":
                    $diaSemana = "domingo";
                break;
                case "Monday":
                        $diaSemana = "lunes";
                break;
                case "Tuesday":
                        $diaSemana = "martes";
                break;
                case "Wednesday":
                        $diaSemana = "miércoles";
                break;
                case "Thursday":
                        $diaSemana = "jueves";
                break;
                case "Friday":
                        $diaSemana = "viernes";
                break;
                case "Saturday":
                        $diaSemana = "sábado";
                break;
            }
            return $diaSemana;
        }
        $diaSemana = dayWeekSpanish();
        ?>

        <h1>Hola, <?php echo $name ?></h1>
        <p>Hoy es <strong><?php echo $diaSemana; ?></strong>. ¿Qué tal estás?</p>
    </body>
</html>