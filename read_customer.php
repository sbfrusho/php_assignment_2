<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Customer Information</h2>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Customer ID</th>
        </tr>
        <?php
        $fileContent = file_get_contents("customers.txt");
        $lines = explode(PHP_EOL, $fileContent);

        foreach ($lines as $line) {
            $customerData = explode(", ", $line);
            echo "<tr>";
            foreach ($customerData as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>
