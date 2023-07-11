<?php
// IP Grabber
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR']; 
}

// database connect
$host = 'localhost';
$username = 'root';
$password = 'Password';
$database = 'Base Name';

$connect = new mysqli($host, $username, $password, $database);

// connect checking
if ($connect->connect_error) {
    die("Connect error: " . $conn->connect_error);
}

// ip checking
$sql = "SELECT COUNT(*) AS ip_count FROM page_views WHERE ip_address = '$ip'";
$result = $connect->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ipCount = $row['ip_count'];

    if ($ipCount == 0) {
        // adding new IP view if dont exist
        $sql = "INSERT INTO page_views (ip_address) VALUES ('$ip')";
        $result = $connect->query($sql);

        if (!$result) {
            echo "error: " . $connect->error;
        }
    }
}

$sql = "SELECT COUNT(*) AS total_views FROM page_views";
$result = $connect->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalViews = $row['total_views'];
    echo "Views: " . $totalViews;
} else {
    echo "error: " . $connect->error;
}

$connect->close();

?>
