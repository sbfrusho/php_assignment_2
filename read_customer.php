<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
</head>
<body>
    <h2>Customer Information</h2>
    <ul>
        <?php
        $file = fopen("Customer.php", "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo "<li>" . htmlspecialchars($line) . "</li>";
            }
            fclose($file);
        }
        ?>
    </ul>
</body>
</html>
