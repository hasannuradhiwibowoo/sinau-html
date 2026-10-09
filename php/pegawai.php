<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>
    <table>
        <tr>
            <td colspan="2">
                <h2>Data Pegawai</h2>
            </td>
        </tr>
        <tr>
            <?php include "sidebar.php"; ?>
            <td>
                <a href="pegawai-input.php">+ Tambah Pegawai</a>
                <table>
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "select * from pegawai");
                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['id_pegawai']; ?></td>
                        <td><?php echo $tampil['nama_pegawai']; ?></td>
                        <td><?php echo $tampil['alamat']; ?></td>
                        <td><?php echo $tampil['telepon']; ?></td>
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
