<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "datawaktu.php";

if (empty($nama) || empty($email)) {
    header('Location: tidaklengkap.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "Terakhir Login : $tanggal $waktu";
}
?>