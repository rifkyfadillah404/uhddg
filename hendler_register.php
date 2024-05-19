<?php
$nama = $_POST ['name'];
$gmail = $_POST ['email'];
$password = $_POST ['password'];

$koneksi = new mysqli('localhost', 'root', '' , 'db.login');

if ($koneksi) {
    echo "Wellcome";
}else{
    echo $koneksi->error;
}

$insert = $koneksi->query("INSERT INTO register
(nama, gmail, password)
values
('$nama', '$gmail', '$password')
");

if ($insert) {
    echo " insert data berhasil";
}else {
    echo "gagal insert data";
}

?>