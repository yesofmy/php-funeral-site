<?php

/* START SESJI I PODŁĄCZENIE BAZY DANYCH */
session_start();
include "db.php";

/* OBSŁUGA FORMULARZA LOGOWANIA */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* POBRANIE DANYCH Z FORMULARZA */
    $email = $_POST["email"];
    $password = $_POST["password"];

    /* WYSZUKANIE UŻYTKOWNIKA W BAZIE PO EMAILU */
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    /* WERYFIKACJA HASŁA I LOGOWANIE */
    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["name"];
        header("Location: index.php");
        exit();
    } else {
        $error = "Wrong email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

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

<!-- PRAWA STRONA -->
<div class="right-auth-side">

<div class="modern-auth-card">

    <!-- GÓRA FORMULARZA -->
    <div class="auth-top">
        <h1>LOGIN</h1>
        <p>WELCOME BACK</p>
    </div>

    <!-- KOMUNIKAT BŁĘDU -->
    <?php if(isset($error)) echo "<div class='error-box'>$error</div>"; ?>

    <!-- FORMULARZ LOGOWANIA -->
    <form method="POST" class="modern-form">

        <div class="input-box">
            <span>✉</span>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <span>🔒</span>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="gold-btn">
            LOGIN
        </button>

    </form>

    <!-- LINKI DODATKOWE -->
    <div class="auth-links">
        <p>Don't have account?</p>
        <a href="register.php">Create Account</a>
    </div>

    <a href="index.php" class="back-btn">
        ← Back Home
    </a>

</div>

</div>

</body>
</html>