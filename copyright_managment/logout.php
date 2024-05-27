<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="refresh" content="5;url=login.php">
    <style>
        .container {
            padding-top: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Session Ended</h2>
        <p>You have been logged out. You will be redirected to the login page in 5 seconds.</p>
        <p>If you are not redirected, <a href="login.php">click here</a>.</p>
    </div>
</body>
</html>