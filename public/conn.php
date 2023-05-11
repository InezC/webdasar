</php

$host = "localhost";
$user = "root";
$pass = "";
$base = "mahasiswa";

$conn = mysqli_connect("localhost","root","","seal_fakultas");

if (mysqli_connect_errno()) {
    die("Failed To Connect");
}