<?php
include'koneksi1.php';
?>

Kembali kehalaman Utama <a href="index.html">Klik disini</a>
<br/>
<form method="post" action="">
	<table>
		<tr>
			<td>Nim</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama_mhs"></td>
		</tr>
		<tr>
			<td>agama</td>
			<td><input type="text" name="agama"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php
error_reporting(0);
	$nim = $_POST['nim'];
	$nmmhs = $_POST['nama_mhs'];
	$agama = $_POST['agama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
if (!$nim ||!$nmmhs ||!$agama ||!$email ||!$alamat)
{
	echo "lengkapi data";
}
else{
	$sql=$db->query("INSERT INTO table_mahasiswa values('$nim','$nmmhs','$agama','$email','$alamat')") or die (mysql_error());
	if ($sql)
	{
		echo"data berhasil diinput";
	}
}

?>

<br>
<br>
<h2>List Mahasiswa</h2>
<table border="1">
	<tr>
		<th>no</th>
		<th>nim</th>
		<th>nama Mahasiswa</th>
		<th>Agama</th>
		<th>Email</th>
		<th>Alamat</th>
		<th colspan="2">aksi</th>
	</tr>

	<?php 
	$mhs = Mysqli_query($db, "select * from table_mahasiswa");
	$no=1;
	foreach ($mhs as $row) {
		?>
		echo "
		<tr>
		<td><?php echo $no++ ?>
		<td><?php echo $row['nim']; ?></td>
		<td><?php echo $row['nama_mhs']; ?></td>
		<td><?php echo $row['agama']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><a href="hapus.php?nim=<?php echo $row['nim'];?>">delete</a></td>
		<td><a href="edit.php?nim=<?php echo $row['nim'];?>">Edit</a></td>
		</tr>";
	}
	<?php } ?>
</table>

<a href="cetak.php" target="_BLANK">print data</a>