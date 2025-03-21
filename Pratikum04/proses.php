<?php
require_once('kunjungan.php');
session_start();
if (isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];

}

if (isset($_post['submit'])) {
    $kunjungan = new Kunjungan();
    $kunjungan->fullname = $_post['fullname'];
    $kunjungan->email = $_post['email'];
    $kunjungan->jenis_kunjungan_id = $_post['jenis_kunjungan_id'];
    $kunjungan->save();

}
$daftar_kunjungan = Kunjungan::getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Kujungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>timestamp</th>
                    <th>fullname</th>
                    <th>email</th>
                    <th>jenis</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($daftar_kunjungan as $entry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entry->id); ?></td>
                        <td><?php echo htmlspecialchars($entry->timestamp); ?></td>
                        <td><?php echo htmlspecialchars($entry->fullname); ?></td>
                        <td><?php echo htmlspecialchars($entry->email); ?></td>
                        <td><?php echo htmlspecialchars($entry->jenis_kunjungan_id); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">&lt;&lt;&lt; Kembali</a>
    </div>
</body>

</html>