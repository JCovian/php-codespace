<?php

// datos del servidor:
$server = 'localhost';
$user = 'user';
$password = 'password';
$database = 'bootcamp';

// conexión a la base de datos:
try {
  $connection = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "conexión realizada con éxito"; 
          
  } catch(DPOException $e) {
    echo "Error: " . $query . "<br>" . $e->getMessage();
    }

try {
  $stmt = $connection->prepare("SELECT * FROM employee");
  $stmt->execute();
    
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $results = $stmt->fetchAll();
  //foreach($results as $result) {
  //  print_r($result);
  //}
  } catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
    }

header('Content-type: application/json');
echo json_encode($results);

$connection = null;
?>