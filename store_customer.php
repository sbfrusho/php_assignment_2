<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        
        $file = fopen("customers.txt", "a");
        fwrite($file, "First Name: " . $firstName . ", Last Name: " . $lastName . ", Email: " . $email . PHP_EOL);
        fclose($file);
        echo "Customer information stored successfully!";
    }
?>
