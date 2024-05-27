<?php
include("config.php");

extract($_POST);

$sql = "UPDATE copyrights SET 
        title='$title',
        owner='$owner',
        type='$type',
        license_status='$license_status',
        description='$description',
        copyright='$copyright',
        created_at='$created_at',
        release_date='$release_date'
        WHERE id=".$_GET['id'];

$cevap = $conn->query($sql);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
echo "<title>Kayıt Güncelleme Sonucu</title>";
echo "</head>";
echo "<body>";
echo "<div class='container mt-5'>";

if (!$cevap) {
    echo "<div class='alert alert-danger'>Hata: " . $conn->error . "</div>";
} else {
    echo "<div class='alert alert-success'>Kayıt Güncellendi.</div>";
    echo "<a href='updatelist.php' class='btn btn-secondary'>Geri Dön</a>";
}

echo "</div>";
echo "</body>";
echo "</html>";

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    .btn {
            background-color: purple;
            border-color: purple;
            color: white;
        }
   </style>
</head>
<body>
    
</body>
</html>