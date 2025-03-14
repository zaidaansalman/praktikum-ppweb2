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
    <div class="container" mg-5>
        <h2>selamat datang di stt nf</h2>
        <p>silahkan isi buku tamu dibawah ini</p>
        <hr/>

  <form method="POST" action="kunjungan.php">
  <div class="form-group row">
    <label for="fullname" class="col-4 col-form-label">nama lengkap</label> 
    <div class="col-8">
      <input id="fullname" name="fullname" type="text" class="form-control" aria-describedby="full nameHelpBlock" required="required"> 
      <span id="full nameHelpBlock" class="form-text text-muted">isi nama dengan lengkap</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock"> 
      <span id="emailHelpBlock" class="form-text text-muted">isi dengan email lengkap</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="masagge" class="col-4 col-form-label">keperluan</label> 
    <div class="col-8">
      <textarea id="mesagge" name="message" cols="40" rows="5" class="form-control" required="required" aria-describedby="masaggeHelpBlock"></textarea> 
      <span id="masaggeHelpBlock" class="form-text text-muted">untuk keperluan mengundang</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    </div>
        
</body>
</html>