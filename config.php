<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "testybojowe";

$connect = new mysqli($servername, $username, $password, $db_name);

// Sprawdzenie, czy wystąpił błąd podczas nawiązywania połączenia
if ($connect->connect_error) {
    die("Błąd połączenia z bazą danych: " . $connect->connect_error);
}

?>