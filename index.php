<?php 
    include 'config.php';
    $base_url = 'http://localhost/CRUD/';
    $database->close();
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<button><a href="./tambah.php">tambah</a></button>
<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th>Opsi</th>
            </tr>
        </thead>
        </thead>
        <tbody>
            <?php foreach ($data_user as $data) { ?>
            <tr>
                <th><?php echo $data['id'] ?></th>
                <td><?php echo $data['Nama'] ?></td>
                <td><?php echo $data['Email'] ?></td>
                <td><?php echo $data['Telepon'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['created_at'] ?></td>
                <td><?php echo $data['updated_at'] ?></td>
                <td>
                <button><a href="<?php echo $base_url.'edit.php?id='.$data['id'] ?>">Update</a></button>
                    <button><a href="<?php echo $base_url.'delete.php?id='.$data['id'] ?>">Delete</a></button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    <table/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>