<?php
// Kullanıcı adı ve şifre doğrulama
$correct_username = 'admin';  // Doğru kullanıcı adı
$correct_password = '1234';   // Doğru şifre

// Form gönderildiğinde kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kullanıcı adı ve şifreyi kontrol et
    if ($username === $correct_username && $password === $correct_password) {
        // Başarılı giriş: success.php'ye yönlendir
        header("Location: success.php");
        exit();
    } else {
        // Yanlış giriş durumu
        $error_message = "Geçersiz kullanıcı adı veya şifre!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
        /* Genel Stil */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #000; /* Siyah arka plan */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            animation: backgroundAnimation 10s ease-in-out infinite alternate;
        }

        /* Arka plan geçişi */
        @keyframes backgroundAnimation {
            0% { background-color: #000; }
            50% { background-color: #111; }
            100% { background-color: #222; }
        }

        h1 {
            text-align: center;
            font-size: 50px;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
            animation: fadeInUp 1.5s ease-in-out;
        }

        /* Giriş formu stil */
        form {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            text-align: center;
            animation: fadeInUp 2s ease-in-out;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            box-sizing: border-box;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #1e90ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-shadow: 0 0 10px rgba(30, 144, 255, 0.7);
        }

        button:hover {
            background-color: #4682b4;
        }

        /* Hata mesajı */
        .error {
            color: red;
            font-size: 18px;
            margin-top: 20px;
            text-align: center;
        }

        /* Animasyonlar */
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Yıldızlar için stil */
        .falling-stars {
            position: absolute;
            font-size: 30px;
            animation: starFall 5s linear infinite;
            opacity: 0;
        }

        /* Yıldızların düşme animasyonu */
        @keyframes starFall {
            0% { opacity: 1; transform: translateY(-100px); }
            100% { opacity: 0; transform: translateY(100vh); }
        }

        /* Yıldızların hız ve boyutlar için */
        .falling-stars:nth-child(1) { left: 5%; animation-duration: 4s; animation-delay: 0s; font-size: 25px; }
        .falling-stars:nth-child(2) { left: 50%; animation-duration: 6s; animation-delay: 1s; font-size: 18px; }
        .falling-stars:nth-child(3) { left: 80%; animation-duration: 5s; animation-delay: 2s; font-size: 22px; }
        .falling-stars:nth-child(4) { left: 20%; animation-duration: 7s; animation-delay: 3s; font-size: 15px; }
        .falling-stars:nth-child(5) { left: 70%; animation-duration: 5s; animation-delay: 4s; font-size: 20px; }

        /* Sosyal Medya İkonları */
        .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .social-icons a {
            font-size: 30px;
            color: white;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            color: #1e90ff;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <h1>Giriş Yap</h1>

    <!-- Hata mesajı varsa göster -->
    <?php if (isset($error_message)): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <!-- Giriş formu -->
    <form method="POST" action="">
        <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required><br>
        <input type="password" id="password" name="password" placeholder="Şifre" required><br>
        <button type="submit">Giriş Yap</button>
    </form>

    <!-- Havadan düşen yıldızlar -->
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>

    <script>
        // Yıldız animasyonunu başlat
        const stars = document.querySelectorAll('.falling-stars');
        stars.forEach(star => {
            star.style.animationPlayState = 'running';
        });
    </script>
</body>
</html>
