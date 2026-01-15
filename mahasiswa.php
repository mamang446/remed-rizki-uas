<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_kampus");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
    exit();
}

// Query ambil data
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>prodi</th>
        </tr>

        <?php 
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['prodi']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>