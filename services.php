<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Oferta</title>

<link rel="stylesheet" href="style.css">

<style>
/* POPRAWKA: ikona + tekst w jednym rzędzie */
.service-icon{
    display:flex;
    align-items:center;
    gap:12px;
}

/* STYL IKONY */
.service-icon .icon{
    font-size:22px;
    line-height:1;
}

/* BLOK TYTUŁU OFERTY */
.service-icon h3{
    margin:0;
    font-size:18px;
}
</style>

</head>

<body>

<!-- HEADER / NAWIGACJA -->
<header class="header">

  <img src="images/logo.png" class="logo">

  <nav>
    <a href="index.php">Strona główna</a>
    <a href="about.php">O nas</a>
    <a href="services.php">Oferta</a>
    <a href="contact.php">Kontakt</a>
  </nav>

  <div class="auth-cart">
    <a href="login.php">LOGIN</a>
    <a href="register.php">REGISTER</a>
  </div>

</header>

<!-- HERO / BANER -->
<section class="hero small-hero" style="background-image:url('images/kwiaty3.jpg')">

  <div class="overlay">
    <span class="hero-small">
      GODNOŚĆ • SZACUNEK • WSPARCIE
    </span>

    <h1>NASZA OFERTA</h1>
  </div>

</section>

<!-- SEKCJA OFERTY -->
<section class="container">

<div class="services-grid">

    <!-- KARTA 1 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">⚰</span>
            <h3>TRUMNA DREWNIANA</h3>
        </div>

        <span class="service-subtitle">Klasyczne rozwiązanie</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Trumna drewniana sosnowa</li>
            <li>Kompletna obsługa pogrzebu</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>600-1000 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

    <!-- KARTA 2 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">⚱</span>
            <h3>TRUMNA METALOWA</h3>
        </div>

        <span class="service-subtitle">Trwałość i elegancja</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Trumna metalowa lakierowana</li>
            <li>Kompletna obsługa pogrzebu</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>1400-3500 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

    <!-- KARTA 3 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">❦</span>
            <h3>TRUMNA EKOLOGICZNA</h3>
        </div>

        <span class="service-subtitle">Ekologiczny wybór</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Trumna ekologiczna z tektury</li>
            <li>Kompletna obsługa pogrzebu</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>1000-1200 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

    <!-- KARTA 4 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">⚱</span>
            <h3>URNA DREWNIANA</h3>
        </div>

        <span class="service-subtitle">Naturalne piękno</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Urna drewniana</li>
            <li>Kompletna obsługa ceremonii</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>300-400 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

    <!-- KARTA 5 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">⚱</span>
            <h3>URNA METALOWA</h3>
        </div>

        <span class="service-subtitle">Wytrzymałość i estetyka</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Urna metalowa</li>
            <li>Kompletna obsługa ceremonii</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>500-600 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

    <!-- KARTA 6 -->
    <div class="service-card">

        <div class="service-icon">
            <span class="icon">⚱</span>
            <h3>URNA KAMIENNA</h3>
        </div>

        <span class="service-subtitle">Ponadczasowa elegancja</span>
        <div class="service-line"></div>

        <ul class="service-list">
            <li>Urna kamienna</li>
            <li>Kompletna obsługa ceremonii</li>
            <li>Transport w obrębie miasta</li>
            <li>Formalności i dokumentacja</li>
        </ul>

        <div class="service-bottom">
            <span>600-800 zł</span>
            <a href="contact.php"><button>Skontaktuj się</button></a>
        </div>

    </div>

</div>

</section>

<!-- STOPKA -->
<footer class="footer">

    <div class="footer-grid">

        <div class="footer-box">
            <h3>📞 Telefon</h3>
            <p>+48 512 341 186</p>
        </div>

        <div class="footer-box">
            <h3>📍 Adres</h3>
            <p>Białowieska 1, Szczecin</p>
        </div>

        <div class="footer-box">
            <h3>✉️ Email</h3>
            <p>finalisszczecin@gmail.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 FINALIS — Wszystkie prawa zastrzeżone
    </div>

</footer>

</body>
</html>