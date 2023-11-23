<?php
include'koneksi1.php';
?>

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
		
		</tr>";
	}
	<?php } ?>
</table>

<script>
	window.print();
</script>