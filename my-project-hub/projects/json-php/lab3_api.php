<?php
// Step 1: Tell browser we are sending JSON
header('Content-Type: application/json');

// Step 2: Create profile array
$user = [
    "id" => 24175273,
    "name" => "Antonete",
    "email" => "arlanteantonete_bsit@plmun.edu.ph",
    "status" => "active"
];

// Step 3: Convert & output
echo json_encode($user);
?>