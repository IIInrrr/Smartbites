<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $conn = new mysqli("localhost", "root", "", "foodscan_db");
    if ($conn->connect_error) die("Connection failed!");

    $sql = "INSERT INTO contacts (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql)) echo "Data saved!";
    else echo "Error!";
    $conn->close();
}
?>
