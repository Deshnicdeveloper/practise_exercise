<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <form action="dashboard.php" method="post">
        <label for="">Author Name</label><br>
        <input type="text" name="authorName" id="authorName"><br><br>
        <label for="">Topic</label><br>
        <input type="text" name="topic" id="topic"><br><br>
        <textarea name="article" id="article" cols="100" rows="30"></textarea><br><br>
        <input type="submit" value="Upload">
    </form>
</body>

</html>

<?php
include 'connect.php';

//collect and sanitize data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $author = $conn->real_escape_string($_POST['authorName']);
    $topic = $conn->real_escape_string($_POST['topic']);
    $article = $conn->real_escape_string($_POST['article']);

    //Insert into the db
    $sql = "INSERT INTO blog_tb (author, topic, article) VALUES ('$author', '$topic', '$article')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        # code...
        echo "<br><p>Article successfully added</p>";
    } else {
        echo "Error:" . $conn->error;
    }
}

$conn->close();
?>