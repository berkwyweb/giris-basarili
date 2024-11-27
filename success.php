<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başarılı</title>
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

        p {
            font-size: 22px;
            color: #fff;
            text-align: center;
            animation: fadeInUp 2s ease-in-out;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        a {
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
            text-shadow: 0 0 10px rgba(30, 144, 255, 0.7);
        }

        a:hover {
            color: #4682b4;
            transform: scale(1.1);
            text-shadow: 0 0 15px rgba(30, 144, 255, 1);
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

        /* Işıltı efekti */
        .glow {
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.5), 0 0 60px rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <!-- Başarı mesajı -->
    <h1 class="glow">Tebrikler! Şifreyi doğru çözdünüz.</h1>
    <p class="glow">Siteye girmek için <a href="index.html" id="redirect-link">buraya tıklayın</a>.</p>
    <h1 class="glow">Tıklamadığınız taktirde 5 saniye sonra otomatik olarak yönlendirileceksiniz!</h1>

    

    <!-- Havadan düşen yıldızlar -->
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>
    <div class="falling-stars">⭐</div>

    <!-- Sosyal medya ikonları (isteğe bağlı) -->
    <div class="social-icons">
        <a href="#" target="_blank">🌟</a>
        <a href="#" target="_blank">🎉</a>
        <a href="#" target="_blank">🌈</a>
    </div>

    <script>
        // 5 saniye sonra yönlendirme yap
        setTimeout(function() {
            window.location.href = "index.html"; // Yönlendirme
        }, 5000); // 5000 milisaniye = 5 saniye

        // Yıldız animasyonunu başlat
        const stars = document.querySelectorAll('.falling-stars');
        stars.forEach(star => {
            star.style.animationPlayState = 'running';
        });
    </script>
</body>
</html>
