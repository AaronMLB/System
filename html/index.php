<h1>British Comedy Guide v4</h1>
<h4>Attempting MySQL connection from PHP.</h4>
<?php
$host = 'mysql';
$user = 'bcg_site';
$pass = 'yfv(%&gdsa5B';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}