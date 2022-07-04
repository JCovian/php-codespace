<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <table class = "table">
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Ciudad</th>
        <th>Action</th>
      </tr>
    
      <?php
      // datos del servidor:
      //$server = 'localhost';
      //$user = 'user';
      //$password = 'user1234';
      //$database = 'bootcamp';
      
      require_once 'mimenu.php';
      
      // conexión a la base de datos:
      try {
        //$connection = new PDO("mysql:host=$server; dbname=$database", $user, $password);
        //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "conexión realizada con éxito"; 
        include_once 'connection.php';
                
        } catch(DPOException $e) {
          echo "Error: " . $query . "<br>" . $e->getMessage();
          }
      
      try {
        $stmt = $connection->prepare("SELECT * FROM employee");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $people = $stmt->fetchAll();
        foreach($people as $person) {
            print_r("<tr>");
              print_r("<td>$person[name]</td>");
              print_r("<td>$person[email]</td>");
              print_r("<td>$person[age]</td>");
              print_r("<td>$person[city]</td>");
              print_r("
                <td>
                  <a href='empleadosmiodelete.php?id=$person[id]'>
                  <button class='btn btn-danger' onclick = 'return confirm(`Confirma borrado`);'>ELIMINAR</button>
                </td>");
            print_r("</tr>");
        }
        } catch(PDOException $e) {
          echo "Error: " . $sql . "<br>" . $e->getMessage();
          }
//<button class='btn btn-danger' onclick = 'var result = confirm"."(`Confirma borrado`)"."'>DELETE</button>
//<button class='btn btn-danger' onclick = 'let result = confirm(`Confirma borrado`); if(result == false) {return false};'>ELIMINAR</button>
      $connection = null;
      ?>
    
    </table>
    <?php
      require_once 'empleadonuevo.php';
    ?>
  </div>
  </body>
</html>







