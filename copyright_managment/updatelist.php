<?php
include("config.php");

$sql = "SELECT * FROM copyrights";
$cevap = $conn->query($sql);

if (!$cevap) {
    echo '<br>Hata: ' . $conn->error;
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
echo "<title>Kayıt Listesi</title>";
echo "</head>";
echo "<body>";
echo "<div class='container mt-5'>";
echo "<h2 class='mb-4'>Kayıt Listesi</h2>";
echo "<table class='table table-bordered'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Title</th>";
echo "<th>Owner</th>";
echo "<th>Type</th>";
echo "<th>License Status</th>";
echo "<th>Description</th>";
echo "<th>Copyright</th>";
echo "<th>Created At</th>";
echo "<th>Release Date</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($gelen = $cevap->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$gelen['id']."</td>";
    echo "<td>".$gelen['title']."</td>";
    echo "<td>".$gelen['owner']."</td>";
    echo "<td>".$gelen['type']."</td>";
    echo "<td>".$gelen['license_status']."</td>";
    echo "<td>".$gelen['description']."</td>";
    echo "<td>".$gelen['copyright']."</td>";
    echo "<td>".$gelen['created_at']."</td>";
    echo "<td>".$gelen['release_date']."</td>";
    echo "<td><a href='update.php?id=".$gelen['id']."' class='btn'>Update</a></td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "<a href='dashboard.php' class='btn btn-secondary'>Back</a>";
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
