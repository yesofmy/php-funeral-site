<?php

/* PODŁĄCZENIE BAZY DANYCH */
include "db.php";

/* OBSŁUGA FORMULARZA REJESTRACJI */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* POBRANIE DANYCH Z FORMULARZA */
    $name = $_POST["name"];
    $email = $_POST["email"];

    /* HASHOWANIE HASŁA */
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    /* PRZYGOTOWANIE ZAPYTANIA DO BAZY */
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    /* WYKONANIE ZAPYTANIA I PRZEKIEROWANIE */
    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rejestracja</title>

<link rel="stylesheet" href="style.css">
</head>

<body class="split-auth-body">

<!-- LEWA STRONA -->
<div class="left-auth-side">

    <div class="left-overlay"></div>

    <div class="left-content">

        <h1>FINALIS</h1>

        <p>
            Professional funeral services <br>
            with dignity and respect
        </p>

    </div>

</div>

<!-- PRAWA STRONA  -->
<div class="right-auth-side">

<div class="modern-auth-card">

    <!-- NAGŁÓWEK FORMULARZA -->
    <div class="auth-top">
        <h1>REJESTRACJA</h1>
        <p>STWÓRZ KONTO</p>
    </div>

    <!-- FORMULARZ REJESTRACJI -->
    <form method="POST" class="modern-form">

        <div class="input-box">
            <span>👤</span>
            <input type="text" name="name" placeholder="Imie i nazwisko" required>
        </div>

        <div class="input-box">
            <span>✉</span>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <span>🔒</span>
            <input type="password" name="password" placeholder="Hasło" required>
        </div>

        <button type="submit" class="gold-btn">
            STWÓRZ KONTO
        </button>

    </form>

    <!-- LINKI DODATKOWE -->
    <div class="auth-links">
        <p>Already have account?</p>
        <a href="login.php">Login</a>
    </div>

    <a href="index.php" class="back-btn">
        ← Back Home
    </a>

</div>

</div>

</body>
</html>