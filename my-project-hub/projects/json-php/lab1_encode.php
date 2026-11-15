<?php
// Step 1: Declare associative array
$student = [
    "name" => "Antonete",
    "age" => 21,
    "course" => "IT"
];

// Step 2: Convert array to JSON string
$json = json_encode($student);

// Step 3: Output JSON
echo $json;
?>