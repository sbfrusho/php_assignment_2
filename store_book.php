<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $isbn = $_POST["isbn"];
        
        $file = fopen("books.txt", "a");
        fwrite($file, "Title: " . $title . ", Author: " . $author . ", ISBN: " . $isbn . PHP_EOL);
        fclose($file);
        echo "Book information stored successfully!";
    }
?>
