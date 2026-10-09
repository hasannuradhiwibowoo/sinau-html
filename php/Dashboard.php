<?php
include "koneksi.php";

$barang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM barang"));
$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM pegawai"));
$transaksi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM transaksi"));
?>

<html>
<head>
    <title>Dashboard Toko</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
        <tr>
            <td colspan="2" align="center" style="padding: 20px; background: #333; color: white;">
                <h2>Dashboard Toko</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td valign="top" style="padding: 20px;">
                <h3>Selamat Datang</h3>
                <p>Jumlah data barang: <?php echo $barang['total']; ?></p>
                <p>Jumlah data pegawai: <?php echo $pegawai['total']; ?></p>
                <p>Jumlah data transaksi: <?php echo $transaksi['total']; ?></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding: 20px; background: #f4f4f4;">
                <p>&copy; 2026 Toko</p>
            </td>
        </tr>
    </table>
</body>
</html>