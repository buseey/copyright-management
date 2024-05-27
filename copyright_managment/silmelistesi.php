<?php
// mysql bağlantı kodunu ekliyoruz
include("config.php");

// sorguyu hazırlıyoruz
$sql = "SELECT * FROM copyrights";

// sorguyu veritabanına gönderiyoruz
$cevap = mysqli_query($conn, $sql);

// eğer cevap FALSE ise hata yazdırıyoruz
if (!$cevap) {
    echo '<br>Hata: ' . mysqli_error($conn);
}

// sorgudan gelen tüm kayıtları tablo içinde yazdırıyoruz
// önce tablo başlıkları oluşturalım
echo "<html>";
echo "<head>";
// Bootstrap CSS dosyasını ekliyoruz
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "</head>";
echo "<body class='container mt-5'>";
echo "<h2>Copyrights Listesi</h2>";
echo "<table class='table table-bordered'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Başlık</th>";
echo "<th>Sahip</th>";
echo "<th>Tür</th>";
echo "<th>Lisans Durumu</th>";
echo "<th>Açıklama</th>";
echo "<th>Telif Hakkı</th>";
echo "<th>Oluşturulma Tarihi</th>";
echo "<th>Yayın Tarihi</th>";
echo "<th>İşlem</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// veritabanından gelen cevabı satır satır alıyoruz
while ($gelen = mysqli_fetch_array($cevap)) {
    // veritabanından gelen değerlerle tablo satırları oluşturalım
    echo "<tr><td>" . $gelen['id'] . "</td>";
    echo "<td>" . $gelen['title'] . "</td>";
    echo "<td>" . $gelen['owner'] . "</td>";
    echo "<td>" . $gelen['type'] . "</td>";
    echo "<td>" . $gelen['license_status'] . "</td>";
    echo "<td>" . $gelen['description'] . "</td>";
    echo "<td>" . $gelen['copyright'] . "</td>";
    echo "<td>" . $gelen['created_at'] . "</td>";
    echo "<td>" . $gelen['release_date'] . "</td>";
    // sil linki oluşturalım
    echo "<td><a href='kayitsil.php?id=" . $gelen['id'] . "' onclick='return confirm(\"Bu kaydı silmek istediğinize emin misiniz?\")' class='btn btn-danger'>Delete</a></td></tr>";
}

echo "</tbody>";
echo "</table>";
echo "<a href='dashboard.php' class='btn'>Back</a>";
echo "</body>";
echo "</html>";

// veritabanı bağlantısını kapatıyoruz
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete List</title>
    <style>
        .btn{
            background-color: purple;
            border-color: purple;
            color: white;
        }
    </style>
</head>
<body>
    
</body>
</html>