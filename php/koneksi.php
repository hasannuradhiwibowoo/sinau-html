<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko");
if (!$koneksi)
    {
        die("koneksi gagal: " . mysqli_connect_error());
    }
?>