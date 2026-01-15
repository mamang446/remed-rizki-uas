<?php
$xml = simplexml_load_file('data_buku.xml');

if (!$xml) {
    die("Gagal memuat file XML.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UAS - Konsumsi Data XML</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        h2 { color: #2c3e50; }
    </style>
</head>
<body>

    <h2>Daftar Buku (Data dari XML)</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;

            foreach ($xml->Buku as $buku) { 
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $buku->Judul; ?></td>
                    <td><?php echo $buku->Penulis; ?></td>
                    <td><?php echo $buku->Tahun; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>