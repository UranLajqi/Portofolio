<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $name = $_POST["name"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skills";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO mesazhetederguara (name, lastname, email, message)
    VALUES ('" . $name . "', '". $lastname ."', '". $email ."', '". $message ."')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Mesazhi juaj u dergua me sukses " . $name . "</h1>";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>