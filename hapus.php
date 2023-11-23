<?php
include 'koneksi1.php';
$nim = $_GET['nim'];
$sql = mysqli_query($db, "DELETE from table_mahasiswa WHERE nim='$nim'")or die(mysql_error());

echo $sql;
if ($sql) {
	// code...
	echo "<script> alert ('delete arsip, ok !'); window.location='inputdata.php';</script>";
}else{
	echo "<script> alert ('data gagal dihapus')</script>";
}
?>