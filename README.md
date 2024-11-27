# giris-basarili
***Bu PHP kodu, kullanıcı adı ve şifre doğrulama işlemi gerçekleştirir. Eğer doğru kullanıcı adı ve şifre girilirse, kullanıcı başarı sayfasına yönlendirilir. Yanlış giriş durumunda ise hata mesajı gösterilir. Ayrıca, sayfa estetik açıdan havadan düşen yıldızlar ve animasyonlu arka plan gibi görsel öğelerle zenginleştirilmiştir.***

Kullanıcı Girişi ve Doğrulama:

$correct_username ve $correct_password değişkenleri, doğru kullanıcı adı ve şifreyi tanımlar.
$_SERVER["REQUEST_METHOD"] == "POST" ifadesi, form gönderildiğinde işlemi başlatır.
$_POST['username'] ve $_POST['password'] ile kullanıcının girdiği bilgiler alınır.
Eğer girilen kullanıcı adı ve şifre doğruysa, kullanıcı success.php sayfasına yönlendirilir. Yanlış giriş durumunda ise bir hata mesajı gösterilir.
HTML Yapısı ve Stil:

> [!TIP]

HTML kısmında, kullanıcı adı ve şifre girişi için form elemanları yer alır.
Sayfa stilinde, siyah arka plan ve animasyonlu geçişler kullanılmıştır.
@keyframes kullanılarak arka plan ve yıldız animasyonları tanımlanmıştır. Yıldızlar, sayfanın üzerinde rastgele düşmektedir.
CSS kodu ayrıca giriş formunun ve butonun stilini belirler ve hover efektleri ekler.
Hata Mesajı:

Eğer giriş bilgileri yanlışsa, error_message değişkeni ile kullanıcıya "Geçersiz kullanıcı adı veya şifre!" mesajı gösterilir.
Havadan Düşen Yıldızlar:

.falling-stars sınıfı, rastgele yerleştirilen yıldız karakterlerini içerir. Yıldızlar, sayfa üzerinde düşme animasyonuyla hareket eder.
Sosyal Medya İkonları:

Kodda sosyal medya ikonları için bir boş alan tanımlanmış ancak herhangi bir bağlantı eklenmemiş. Bu kısım, daha sonra sosyal medya bağlantıları eklemek için kullanılabilir.
