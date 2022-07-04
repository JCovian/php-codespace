<?php

//$server = 'localhost';
//$user = 'user';
//$password = 'user1234';
//$database = 'bootcamp';

$id = $_GET[id];

try {
  include_once('connection.php');
  $connection = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM employee WHERE id=$id";
  $connection->exec($sql);

  //echo "Record deleted successfully";
  $conexion = null;

  //redirige al usuario otra vez a la tabla
  header('Location: empleadosmiosql.php?message=deletedOK');

} catch(PDOException $e) {
  echo "Error: " . $sql . "<br>" . $e->getMessage();
  $conexion = null;
}