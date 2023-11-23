<?php
include 'koneksi1.php';
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$agama = $_POST['agama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

mysqli_query($db, "update table_mahasiswa set nim='$nim', nama_mhs='$nama_mhs', agama='$agama', email='$email', alamat='$alamat' where nim='$nim'");

header("location:inputdata.php")

?>