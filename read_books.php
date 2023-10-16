<!DOCTYPE html>
<html>
<head>
    <title>Books Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: left;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff6600;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Books Information</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Available</th>
        </tr>
        <?php
        // Read the contents of the "books.txt" file
        $fileContent = file_get_contents("books.txt");
        $lines = explode(PHP_EOL, $fileContent);

        foreach ($lines as $line) {
            $customerData = explode(", ", $line);
            echo "<tr>";
            foreach ($customerData as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            // echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
