<!DOCTYPE html>
<html>
<head>
    <title>Books Information</title>
</head>
<body>
    <h2>Books Information</h2>
    <ul>
        <?php
        $file = fopen("Book.php", "r");
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
