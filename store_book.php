<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        background-color: green; /* Changed to green background */
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $isbn = $_POST["isbn"];
        $available = $_POST["available"]; // Added this line
        
        $file = fopen("books.txt", "a");
        fwrite($file, "Title: " . $title . ", Author: " . $author . ", ISBN: " . $isbn . ", Available: " . $available . PHP_EOL);
        fclose($file);
        echo "Book information stored successfully!";
    }
    ?>
    <div class="container mt-5">

        <?php if (isset($_POST['isbn']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available'])): ?>
            <h2>Book Information</h2>
            <table class="table">
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                </tr>
                <tr>
                    <td><?= $_POST['isbn'] ?></td>
                    <td><?= $_POST['title'] ?></td>
                    <td><?= $_POST['author'] ?></td>
                    <td><?= $_POST['available'] ?></td>
                </tr>
            </table>
        <?php endif; ?>
        
    </div>
    <div class="button-container">
        <a href="read_customer.php" class="custom-button">Customer Info</a>
        <a href="read_books.php" class="custom-button">Books Info</a>
    </div>
</body>
</html>
