<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customerId = $_POST["customer_id"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            
            // Store customer information in a text file
            $file = fopen("customers.txt", "a");
            fwrite($file, "Customer ID: " . $customerId . ", First Name: " . $firstName . ", Last Name: " . $lastName . ", Email: " . $email . PHP_EOL);
            fclose($file);
            
            // Display stored customer information
            echo "<h2>Customer Information</h2>";
            echo "<table class='table'>";
            echo "<tr><th>Customer ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
            echo "<tr><td>$customerId</td><td>$firstName</td><td>$lastName</td><td>$email</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
    <div class="button-container">
        <a href="read_customer.php" class="custom-button">Customer Info</a>
        <a href="read_books.php" class="custom-button">Books Info</a>
    </div>
</body>
</html>
