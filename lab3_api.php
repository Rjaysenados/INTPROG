<?php
header('Content-Type: application/json');
$user = array(
    "id" => 1,
    "name" => "Maximo",
    "email" => "maximo@example.com",
    "status" => "active"
);

echo json_encode($user);
?>