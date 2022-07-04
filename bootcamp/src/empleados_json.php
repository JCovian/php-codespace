<?php
$people = [
    ['name' => 'Carlos', 'email' => 'carlos@correo.es', 'age' => 20, 'city' => 'Benalmádena'],
    ['name' => 'Carmen', 'email' => 'carmen@correo.es', 'age' => 15, 'city' => 'Fuengirola'],
    ['name' => 'Carmelo', 'email' => 'carmelo@correo.es', 'age' => 17, 'city' => 'Torremolinos'],
    ['name' => 'Carolina', 'email' => 'carolina@correo.es', 'age' => 18, 'city' => 'Málaga']
];

header('Content-type: application/json');

echo json_encode($people);
?>