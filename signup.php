<!-- signup.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
</head>

<body>
    <h2>Signup</h2>
    <form action="signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Signup</button>
    </form>
</body>

</html>

<?php
// Connect to the database
include "connect.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO user (username, password, email ) VALUES ('$username', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful! You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>