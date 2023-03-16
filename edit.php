<?php
    include 'config.php';
    //melakukan request post/mengirim data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE user SET Nama='$nama', Email='$email', Telepon='$telepon', alamat='$alamat' WHERE id=$id";
        $hasil_update = mysqli_query($database, $query);
        
        if ($hasil_update) { //jika update berhasil
            echo "Data berhasil di insert";
            // diarahkan ke index.php
            header("Location: index.php");
        } else { //jika update gagal
            echo "error: ". $database->error();
        }
    //melakukan request get/ambil data
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE id='$id'";
        $hasil_query = mysqli_query($database, $query);

        $row = mysqli_fetch_assoc($hasil_query);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php-crud-native</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <button><a href="./index.php">Table User</a></button>
    <form method="POST" action="edit.php">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input hidden name="id" value="<?php echo $row['id'] ?>">
            <input type="text" name="nama" value="<?php echo $row['Nama'] ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" value="<?php echo $row['Email'] ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
            <input type="text" name="telepon" value="<?php echo $row['Telepon'] ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control" id="exampleFormControlInput1">
        </div>
        <button type="submit">Save</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>