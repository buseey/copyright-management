# Copyright Management

Bu proje, telif hakları yönetimi için basit bir web uygulamasıdır. Proje, PHP, MySQL, Bootstrap ve phpMyAdmin kullanılarak oluşturulmuştur.

## Kurulum

Bu projeyi XAMPP üzerinde çalıştırmak için aşağıdaki adımları takip edin:

### Gereksinimler

- [XAMPP]
- [Git]

### Adımlar

1. **Depoyu Klonlayın:**

    ```bash
    git clone https://github.com/buseey/copyright-management.git
    ```

2. **XAMPP Kontrol Panelini Başlatın:**

    - Apache ve MySQL servislerini başlatın.

3. **Veritabanını Oluşturun:**

    - phpMyAdmin'e gidin.
    - Yeni bir veritabanı oluşturun ve adını `copyright_management` olarak belirleyin.
    - `schma.sql` dosyasını içeri aktarın. Bu dosya, proje kök dizininde bulunur.

4. **Yapılandırma Dosyasını Güncelleyin:**

    - `config.php` dosyasını açın ve veritabanı bağlantı bilgilerini kendi ayarlarınıza göre güncelleyin.

    ```php
    <?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "copyright_management";

    // Bağlantı oluştur
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
     ?>
    ```

5. **Projenizi Tarayıcıda Açın:**

    - Tarayıcınızda `(http://localhost/copyright_managment)` adresine gidin.

### Kullanım

1. **Kayıt Olun:**
    - `register.php` sayfasından yeni bir kullanıcı oluşturun.
2. **Giriş Yapın:**
    - `login.php` sayfasından giriş yapın.
3. **Telif Hakkı Ekleyin:**
    - Giriş yaptıktan sonra, telif haklarınızı yönetebilirsiniz.

### Arayüz Açıklaması

Bu proje, telif haklarınızı yönetmek için kullanabileceğiniz bir web arayüzü sunar. Arayüz, aşağıdaki bileşenlerden oluşur:

- **Bootstrap:** Kullanıcı dostu ve duyarlı bir tasarım sağlamak için kullanılmıştır.
- **PHP:** Sunucu tarafında çalışarak iş mantığını ve veritabanı etkileşimini yönetir.
- **MySQL:** Telif hakları ve kullanıcı bilgilerini saklamak için kullanılır.
- **phpMyAdmin:** Veritabanını yönetmek için kullanılan web tabanlı bir araçtır.

#### Özellikler:

- **Kullanıcı Kaydı ve Girişi:**
  Kullanıcılar sisteme kayıt olabilir ve giriş yapabilirler.
  
- **Telif Hakkı Yönetimi:**
  Kullanıcılar, telif hakkı bilgilerini ekleyebilir, güncelleyebilir ve silebilirler.

- **Duyarlı Tasarım:**
  Bootstrap kullanılarak tüm cihazlarda düzgün görüntülenen bir arayüz sağlanmıştır.


## Bağlantılar

- [GitHub Repository](https://github.com/buseey/copyright-management.git)

