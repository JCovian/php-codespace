<?php
//print_r($_POST);
if(isset($_POST)) {
    
    try {
    require_once ('connection.php');

    $name = isset($_POST["inputName"]) ? $_POST["inputName"] : false;
    $email = isset($_POST["inputEmail"]) ? $_POST["inputEmail"] : false;
    $age = isset($_POST["inputAge"]) ? $_POST["inputAge"] : false;
    $city = isset($_POST["inputCity"]) ? $_POST["inputCity"] : false;
    
    $query = "INSERT INTO employee VALUES (null, '$name', '$email', $age, '$city')";
    //var_dump ($query);
    //exit;
    $connection->exec($query);

    //echo "Usuario creado.";
    //$userId = $connection->lastInsertId();
    //echo "El id del usuario insertado es: " . $userId;
    $connection = null;
    header("Location: ./empleadosmiosql.php");

    
    } catch(PDOException $e) {
        echo "Error: " . $query . "<br>" . $e->getMessage();
        $connection = null;
    }
}
?>