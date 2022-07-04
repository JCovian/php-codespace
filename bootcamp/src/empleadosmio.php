<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <?php include_once 'mimenu.php'; ?>

    <table>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Ciudad</th>
      </tr>
    
      <?php

      $people = [
          ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
          ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
          ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
          ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
        ]; 

      foreach ($people as $person) {
        //echo("<tr><td>".$person['name']."</td><td>".$person['email']."</td><td>".$person['age']."</td><td>".$person['city']."</td></tr>");
        echo("<tr><td>$person[name]</td><td>$person[email]</td><td>$person[age]</td><td>$person[city]</td></tr>");
      }
      
      ?>
    
    </table>
  
  </body>
</html>







