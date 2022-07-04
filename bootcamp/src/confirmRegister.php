<?php
//print_r($_POST);
if(isset($_POST)) {
    
    try {
    require_once ('connection.php');

    $name = isset($_POST["inputName"]) ? $_POST["inputName"] : false;
    $email = isset($_POST["inputEmail"]) ? $_POST["inputEmail"] : false;
    $password = isset($_POST["inputPassword"]) ? $_POST["inputPassword"] : false;
    $confirm = isset($_POST["inputConfirm"]) ? $_POST["inputConfirm"] : false;
    
    $encriptedPassword = md5($password);
    $query = "INSERT INTO users VALUES (null, '$name', '$email', '$encriptedPassword')";
    //var_dump ($query);
    $connection->exec($query);

    echo "Usuario creado.";
    $userId = $connection->lastInsertId();
    echo "El id del usuario insertado es: " . $userId;
    $connection = null;
    
    } catch(PDOException $e) {
        echo "Error: " . $query . "<br>" . $e->getMessage();
        $connection = null;
    }
}
?>