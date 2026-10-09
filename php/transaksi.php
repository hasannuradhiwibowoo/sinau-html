<html>
<head>
    <title>Data Transaksi</title>
</head>
<body>
    <table>
        <tr>
            <td colspan="2">
                <h2>Data Transaksi</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td>
                <a href="transaksi-input.php">+ Tambah Transaksi</a>
                <table>
                    <tr>
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
            <td colspan="2">
                <p>&copy; 2026 Toko</p>
            </td>
        </tr>
    </table>
</body>
</html>
