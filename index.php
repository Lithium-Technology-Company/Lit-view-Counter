<?php
// database connection in /config.php
require 'config.php';
// checks if the cookie has already been saved
if (!isset($_COOKIE['visited'])) {
    // if a user visits the page 1 time - the script will save it as a session and add one unique display in the database
    $litsqlview = "UPDATE page_views SET visits = visits + 1 WHERE id = 1";
    if ($connect->query($litsqlview) === false) {
        echo "Error: " . $connect->error;
    }

    // If you want to set session deletion after a given time add a line:"time() + 86400"
    setcookie('visited', 'yes');
}

// Pobranie liczby odwiedzin z bazy danych
$litsqlview = "SELECT visits FROM page_views WHERE id = 1";
$result = $connect->query($litsqlview);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $visits = $row['visits'];
} else {
    $visits = 0;
}

// counter visualization /w theme
include "template.php";

$connect->close();
?>