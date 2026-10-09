<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <table>
        <tr>
            <td colspan="2">
                <h2>Data Barang</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td>
                <a href="barang-input.php">+ Tambah Barang</a>
                <table border="1">
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "select * from barang");
                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['id_barang']; ?></td>
                        <td><?php echo $tampil['nama_barang']; ?></td>
                        <td><?php echo $tampil['harga']; ?></td>
                        <td><?php echo $tampil['stok']; ?></td>
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
