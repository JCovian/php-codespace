<?php

// datos del servidor:
$server = 'localhost';
$user = 'user';
$password = 'user1234';
$database = 'bootcamp';


// conexión a la base de datos:
try {
    $connection = new PDO("mysql:host=$server; dbname=$database", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "conexión realizada con éxito";
    
} catch(DPOException $e) {
    echo "Error: " . $query . "<br>" . $e->getMessage();
}