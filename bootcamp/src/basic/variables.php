<html>
  <head>
    <script src="text/javascript">./mijs.js</script>
  </head>
  <body>
    <h1 class="h12" style="color:red">Bootcamp Fullstack</h1>
    <p>Hola, <?php $name = "Jose";  print_r($name); ?></p>
    <hr>
  </body>
</html>

<?php

// Variables primitivas
$string = "cadena de texto";
$integer = 27;
$float = 22.83;
$bool = false;

// Constantes
define("OBJETO", "Soy una tetera");
const OTRO_OBJETO = "Soy un cucharón";

// Arrays
$array = array('dato', 5, 21.2, true);  // Sintaxis antigua
$array2 = ['dato', 5, 21.2, true];      // Sintaxis PHP 5.4
$array_asociativo = [
  'nombre' => 'Carlos',
  'apellidos' => 'Herrera Conejero',
  'telefono' => '600123456',
  'email' => 'carlos@correo.com',
  'ciudad' => 'Málaga'
];

echo $array_asociativo['telefono'];
echo $float;
print_r($array_asociativo);

?>