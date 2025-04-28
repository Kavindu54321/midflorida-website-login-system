<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Successful</title>
</head>
<body>
    <h2>Login Successful!</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
    <button> <a href="index.php">cancel</a></button>
</body>
</html>
