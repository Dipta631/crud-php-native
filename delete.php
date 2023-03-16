<?php 
    include './config.php';
    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE id='$id'";
    $hasil = mysqli_query($database, $query);

    if (!$hasil) {
        die("error: " . $database->error());
    }
    header("Location: index.php");

    $database->close();
?>