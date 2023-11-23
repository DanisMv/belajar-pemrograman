<?php 
include 'koneksi1.php';
$nim = $_GET['nim'];
$data = mysqli_query($db, "select * from table_mahasiswa where nim='$nim'");
while ($row=mysqli_fetch_array($data)) {
?>
 
 <form method="post" action="fungsiedit.php">
<table>
	<tr>
		<td>nim</td>
		<td><input type="text" name="nim" value="<?php echo $row['nim'];?>"></td>
	</tr>
	<tr>
		<td>nama mahasiswa</td>
		<td><input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'];?>"></td>
	</tr>
	<tr>
		<td>agama</td>
		<td><input type="text" name="agama" value="<?php echo $row['agama'];?>"></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="update"></td>
	</tr>
</table>
</form>
<?php
}
?>