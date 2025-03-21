<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h2>Selamat Datang di Perpustakaan STT-NF</h2>
            <p>Silahkan isi buku tamu dibawah ini</p>
            <hr />
            <form method="post" action="proses.php">
                <div class="form-group row">
                    <label for="fullname" class="col-3 col-form-label">Nama Lengkap</label> 
                    <div class="col-9">
                    <input id="fullname" name="fullname" type="text" aria-describedby="fullnameHelpBlock" class="form-control"> 
                    <span id="fullnameHelpBlock" class="form-text text-muted">isi nama lengkap kamu.</span>
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-3 col-form-label">Jenis Kunjungan</label> 
                    <div class="col-9">
                    <?php
                        require_once 'jeniskunjungan.php';
                        $jenis_kunjungan = jeniskunjungan::getAll();
                    ?>
                    <select id="jenis_kunjungan_id" name="jenis_kunjungan_id" class="custom-select">
                        <?php foreach($jenis_kunjungan as $jk): ?>
                            <option value="<?= $jk->id ?>"> 
                                <?= $jk->display_name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <span id="jenisKunjunganBlock" class="form-text text-muted">Tujuan kunjungan kamu</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>