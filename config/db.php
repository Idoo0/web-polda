<?php

# dev
$server = "localhost";
$user = "root";
$pass = "";
$database = "polda";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

# prod
// $server = "";
// $user = "";
// $pass = "";
// $database = "";
// $conn = mysqli_connect($server, $user, $pass, $database);
// if (!$conn) {
//     die("Koneksi ke database gagal: " . mysqli_connect_error());
// }

?>