<?php

include "db.php";

/* ZMIENNE STATUSOWE */
$success = false;
$error = false;

/* OBSŁUGA FORMULARZA PO WYSŁANIU */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* POBRANIE I OCZYSZCZENIE DANYCH Z FORMULARZA */
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    /* WALIDACJA PODSTAWOWA (SPRAWDZENIE CZY POLA NIE SĄ PUSTE) */
    if(
        !empty($name) &&
        !empty($email) &&
        !empty($phone) &&
        !empty($message)
    ){

        /* PRZYGOTOWANIE ZAPYTANIA DO BAZY DANYCH */
        $stmt = $conn->prepare("
            INSERT INTO contact_messages
            (name, email, phone, message)
            VALUES (?, ?, ?, ?)
        ");

        /* PODPIĘCIE PARAMETRÓW DO ZAPYTANIA */
        $stmt->bind_param(
            "ssss",
            $name,
            $email,
            $phone,
            $message
        );

        /* WYKONANIE ZAPYTANIA */
        if($stmt->execute()){
            $success = true;
        } else {
            $error = true;
        }

    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontakt</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- HEADER -->
<header class="header">

    <img src="images/logo.png" class="logo">

    <nav>
        <a href="index.php">STRONA GŁÓWNA</a>
        <a href="about.php">O NAS</a>
        <a href="services.php">OFERTA</a>
        <a href="contact.php">KONTAKT</a>
    </nav>

    <div class="auth-cart">
        <a href="login.php">LOGIN</a>
        <a href="register.php">REGISTER</a>
    </div>

</header>

<!-- BANER STRONY KONTAKTOWEJ -->
<section class="hero small-hero" style="background-image:url('images/kosciol.jpg')">

    <div class="overlay">

        <h1>KONTAKT</h1>

        <p>FINALIS</p>

    </div>

</section>

<!-- GŁÓWNA SEKCJA KONTAKTU -->
<section class="container">

    <div class="contact-layout">

        <!-- LEWA KOLUMNA  -->
        <div class="contact-left-box">

            <h2>DANE KONTAKTOWE</h2>

            <div class="contact-info">

                <div class="contact-row">

                    <img src="images/bell.png">

                    <div>
                        <h4>TELEFON CAŁODOBOWY</h4>
                        <p>+48 123 456 789</p>
                    </div>

                </div>

                <div class="contact-row">

                    <img src="images/documents.png">

                    <div>
                        <h4>E-MAIL</h4>
                        <p>finalisszczecin@gmail.com</p>
                    </div>

                </div>

                <div class="contact-row">

                    <img src="images/planet-earth.png">

                    <div>
                        <h4>SIEDZIBA</h4>
                        <p>Białowieska 1, Szczecin</p>
                    </div>

                </div>

                <div class="contact-row">

                    <img src="images/spa-candles.png">

                    <div>
                        <h4>DOSTĘPNOŚĆ</h4>
                        <p>24 godziny / 7 dni w tygodniu</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- PRAWA KOLUMNA -->
        <div class="contact-form-box">

            <h2>NAPISZ DO NAS</h2>

            <!-- KOMUNIKAT POWODZENIA -->
            <?php if($success): ?>
                <div class="success-message">
                    Wiadomość została wysłana.
                </div>
            <?php endif; ?>

            <!-- KOMUNIKAT BŁĘDU -->
            <?php if($error): ?>
                <div class="error-message">
                    Wystąpił błąd. Spróbuj ponownie.
                </div>
            <?php endif; ?>

            <!-- FORMULARZ KONTAKTOWY -->
            <form class="contact-form" method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="IMIĘ I NAZWISKO"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="ADRES E-MAIL"
                    required
                >

                <input
                    type="text"
                    name="phone"
                    placeholder="NUMER TELEFONU"
                    required
                    maxlength="15"
                    pattern="[0-9]{9,15}"
                    title="Number has to contain from 9 15 numbers"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                >

                <textarea
                    name="message"
                    placeholder="WIADOMOŚĆ"
                    required
                ></textarea>

                <button type="submit">
                    WYŚLIJ WIADOMOŚĆ
                </button>

            </form>

        </div>

    </div>

</section>

<!-- STOPKA -->
<footer class="footer">

    <div class="footer-grid">

        <div class="footer-box">
            <h3>☎ TELEFON</h3>
            <p>+48 512 341 186</p>
        </div>

        <div class="footer-box">
            <h3>📍 ADRES</h3>
            <p>Białowieska 1, Szczecin</p>
        </div>

        <div class="footer-box">
            <h3>✉ EMAIL</h3>
            <p>finalisszczecin@gmail.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 FINALIS — Wszystkie prawa zastrzeżone
    </div>

</footer>

</body>
</html>