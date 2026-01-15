<?php
$json_data = file_get_contents('data_gadget.json');

$gadgets = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Gadget</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .harga-mahal { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Daftar Harga Gadget</h2>

    <table>
        <tr>
            <th>Merek</th>
            <th>Seri</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($gadgets as $g) : ?>
            <tr>
                <td><?php echo $g['merek']; ?></td>
                <td><?php echo $g['seri']; ?></td>
                
                <td class="<?php echo ($g['harga'] > 14000000) ? 'harga-mahal' : ''; ?>">
                    Rp <?php echo number_format($g['harga'], 0, ',', '.'); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>