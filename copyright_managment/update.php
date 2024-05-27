<?php
include("config.php");

$sql = "SELECT * FROM copyrights WHERE id=".$_GET['id'];
$cevap = $conn->query($sql);

if (!$cevap) {
    echo '<br>Hata: ' . $conn->error;
}

$gelen = $cevap->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Kayıt Güncelle</title>
    <style>
        .btn {
            background-color: purple;
            border-color: purple;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Kayıt Güncelle</h2>
    <form action="updatesave.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $gelen['title'] ?>">
        </div>
        <div class="form-group">
            <label for="owner">Owner:</label>
            <input type="text" class="form-control" id="owner" name="owner" value="<?php echo $gelen['owner'] ?>">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="<?php echo $gelen['type'] ?>">
        </div>
        <div class="form-group">
            <label for="license_status">License Status:</label>
            <input type="text" class="form-control" id="license_status" name="license_status" value="<?php echo $gelen['license_status'] ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $gelen['description'] ?>">
        </div>
        <div class="form-group">
            <label for="copyright">Copyright:</label>
            <input type="text" class="form-control" id="copyright" name="copyright" value="<?php echo $gelen['copyright'] ?>">
        </div>
        <div class="form-group">
            <label for="created_at">Created At:</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $gelen['created_at'] ?>">
        </div>
        <div class="form-group">
            <label for="release_date">Release Date:</label>
            <input type="text" class="form-control" id="release_date" name="release_date" value="<?php echo $gelen['release_date'] ?>">
        </div>
        <button type="submit" class="btn">Save</button>
        <a href="updatelist.php" class="btn">Back</a>
    </form>
</div>
</body>
</html>
