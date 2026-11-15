<?php
// Step 1: JSON string
$json_string = '{"name":"Antonete","age":21,"email":"arlanteantonete_bsit@plmun.edu.ph"}';

// Step 2: Decode to OBJECT
$obj = json_decode($json_string);

// Step 3: Decode to ASSOCIATIVE ARRAY (true = array)
$arr = json_decode($json_string, true);

// Step 4: Display values
echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr['email'];
?>