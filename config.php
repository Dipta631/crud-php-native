<?php 
//config database
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'CRUD';

//konek database
$database = new mysqli($hostname, $username, $password, $database);

//ambil data menggunakan query SELECT * FROM tabel
$ambil_tabel_user = "SELECT * FROM user";
//hasil dari query
$data_user = $database->query($ambil_tabel_user);


?>