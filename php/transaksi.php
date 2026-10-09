<html>
<head>
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
        <tr>
            <td colspan="2" align="center" style="padding: 20px; background: #333; color: white;">
                <h2>Data Transaksi</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td valign="top" style="padding: 20px;">
                <a href="transaksi-input.php" style="display: inline-block; margin-bottom: 15px; padding: 8px 15px; background: #28a745; color: white; text-decoration: none; border-radius: 4px;">+ Tambah Transaksi</a>
                <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                    <tr style="background: #333; color: white;">
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Barang</th>
                        <th>Pegawai</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "select * from transaksi");
                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['id_transaksi']; ?></td>
                        <td><?php echo $tampil['tanggal']; ?></td>
                        <td><?php echo $tampil['id_barang']; ?></td>
                        <td><?php echo $tampil['id_pegawai']; ?></td>
                        <td><?php echo $tampil['jumlah']; ?></td>
                        <td><?php echo number_format($tampil['total'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php } ?>
                </table>
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