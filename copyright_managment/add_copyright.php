<?php
include('includes/auth.php');
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $owner = $_POST['owner'];
    $type = $_POST['type'];
    $license_status = $_POST['license_status'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $copyright = $_POST['copyright'];

    $sql = "INSERT INTO copyrights (title, owner, type, license_status, description, release_date, copyright) 
            VALUES ('$title', '$owner', '$type', '$license_status', '$description', '$release_date', '$copyright')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Copyright</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-group {
            margin-bottom: 25px;
            max-width: 500px;
        }
        .form-control {
            max-width: 100%;
        }
        .container {
            margin-top: 20px;
        }
        .btn {
            background-color: purple;
            border-color: purple;
            color: white;
        }
    </style>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
        <h2>Add New Copyright</h2>
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Owner</label>
                <input type="text" name="owner" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" required>
            </div>
            <div class="form-group">
                <label>License Status</label>
                <input type="text" name="license_status" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Release Date</label>
                <input type="date" name="release_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Copyright</label>
                <input type="text" name="copyright" class="form-control" required>
            </div>
            <button type="submit" class="btn">Add</button>
        </form>
    </div>
</body>
</html>
