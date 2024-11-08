<?php
// welcome.php
session_start();
print_r($_SESSION);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>

</html>