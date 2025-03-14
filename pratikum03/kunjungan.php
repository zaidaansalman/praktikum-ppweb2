<?php
require_once('BukuTamu.php');
session_start();
if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}
if (isset($_POST['submit'])) {
    //membuat objek dari class BukuTamu
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp =date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    array_push($_SESSION['bukutamu'], $bukutamu);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form subtation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container" my-5>
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table>
            <tr>
                <th>timestamp</th>
                <th>Nama</th>
                <th>Email</th>
                <th>message</th>
            </tr>
            <?php foreach ($_SESSION['bukutamu'] as $entry):  ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($bukutamu->timestamp); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($bukutamu->fullname); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($bukutamu->email); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($bukutamu->message); ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <hr/>
            </div>
       
        
</body>
         </table>
         <a href="index.php"> &lt;&lt;&lt; kembali</a>
         <!-- <a href="index.php"> <<<<<< kembali</a> -->

</div>
</html>