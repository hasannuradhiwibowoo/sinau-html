<?php
include "koneksi.php";
$barang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM barang"));
$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM pegawai"));
$transaksi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM transaksi"));
?>

<html>
<head>
    <title>Dashboard Toko</title>
</head>
<body>
    <table>
        <tr>
            <td colspan="2">
                <h2>Dashboard Toko</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td>
                <h3>Selamat Datang</h3>
                <p>Jumlah data barang: <?php echo $barang['total']; ?></p>
                <p>Jumlah data pegawai: <?php echo $pegawai['total']; ?></p>
                <p>Jumlah data transaksi: <?php echo $transaksi['total']; ?></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>&copy; 2026 Toko</p>
            </td>
        </tr>
    </table>
</body>
</html>
