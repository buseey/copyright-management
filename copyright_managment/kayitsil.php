<?php
// mysql bağlantı kodunu ekliyoruz
include("config.php");

// gelen id parametresini alıyoruz
$id = $_GET['id'];

// eğer id geçerliyse (numerik olup olmadığını kontrol ediyoruz)
if (is_numeric($id)) {
    // sorguyu hazırlıyoruz
    $sql = "DELETE FROM copyrights WHERE id = $id";
    
    // sorguyu veritabanına gönderiyoruz
    $cevap = mysqli_query($conn, $sql);
    
    echo "<html>";
    // türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
    
    if (!$cevap) {
        echo '<br>Hata: ' . mysqli_error($conn);
    } else {
        echo "Kayıt Silindi!</br>";
        echo " <a href='silmelistesi.php'>Listele</a>\n";
    }
    
    echo "</html>";
} else {
    echo "Geçersiz ID.";
}

// veritabanı bağlantısını kapatıyoruz
mysqli_close($conn);
?>
