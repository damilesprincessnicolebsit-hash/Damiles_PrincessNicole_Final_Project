<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    
    echo "<h2>✅ Data Received Successfully!</h2>";
    echo "<strong>Name:</strong> " . $name . "<br>";
    echo "<strong>Email:</strong> " . $email . "<br><br>";
    echo "<a href='index.html'>← Go Back</a>";
}
?>
