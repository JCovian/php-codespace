<?php
//print_r($_POST);
if(isset($_POST)) {
    try {
    require_once 'connection.php';

    $name = isset($_POST["inputName"]) ? $_POST["inputName"] : false;
    $password = isset($_POST["inputPassword"]) ? $_POST["inputPassword"] : false;
    
    //$encriptedPassword = md5($_POST[password]);
    $encriptedPassword = md5($password);
    $query = $connection->prepare("SELECT name, password FROM users WHERE name = '$name' AND password = '$encriptedPassword'");
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    //var_dump($query);
    $user = $query->fetchAll();

    //echo $user[0]['name'];
    //echo $user[0]['password'];
    //echo " ";
    //echo $name;
    //echo $encriptedPassword;
    //exit;

    if($user[0]['name'] === $name && $user[0]['password'] === $encriptedPassword) {
        $connection = null;
        header("Location: ./login.php?status=logged");
    } else {
        $connection = null;
        header("Location: ./login.php?status=notvalid");
    }
    
    } catch(PDOException $e) {
        echo "Error: " . $query . "<br>" . $e->getMessage();
        $connection = null;
    }
}
?>