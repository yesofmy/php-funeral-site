<?php

// Dane polaczenia z b.danych
$host = "localhost";
$user = "root";
$password = "";
$dbname = "funeral_db";

// Tworzenie polaczenia z baza
$conn = new mysqli($host, $user, $password, $dbname);

// Sprawdzenie poprawnosci polaczenia
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Ustawienie kodowania UTF-8
$conn->set_charset("utf8mb4");

?>