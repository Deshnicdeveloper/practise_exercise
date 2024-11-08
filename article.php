<?php

include 'connect.php';

$sql = "SELECT * FROM blog_tb";
$result = $conn->query($sql);



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>

<body>
    <h1>Welcome to my Cosmos blog</h1>
    <?php
    if ($result->num_rows > 0) {
        # code...
        while ($row = $result->fetch_assoc()) {
            # code...
            echo "
                <h3>" . $row['topic'] . "</h3>" .
                "<p>" . $row['article'] . "</p>" .
                "<p>" . $row['author'] . " " . $row['created_at'] . "</p>";
        }
    }



    ?>
</body>

</html>