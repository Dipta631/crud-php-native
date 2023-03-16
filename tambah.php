<?php 
    include 'config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST ['email'];
        $telepon = $_POST ['telepon'];
        $alamat = $_POST ['alamat'];

        $query ="INSERT INTO user (Nama, Email, Telepon, alamat) VALUES ('$nama', '$email', '$telepon','$alamat')";
        $hasil_insert = $database->query($query);
        
            if (!$hasil_insert) {
                echo "terjadi masalah: ". $database->error;
                exit();
            } 
        
            echo "Data berhasil di insert";
            header("Location: index.php");
            $database->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<form method="POST" action="tambah.php">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Telepon</label>
    <input type="text"  name="telepon"class="form-control" id="" placeholder="">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <input type="text" name="alamat"class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<button type="submit">save</button>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>