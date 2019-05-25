<?php 
include "koneksi6.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Test
	</title>
</head>
<body>
	<div style="border: 1px solid black;width: 100%;height: 100px;">
	<center><br>
	<form action="" method="POST">	
	<input style="width: 500px; height: 50px;" type="text" name="nama">
	<input style="background-color:gray;border:1px ;border-radius: 5px;width: 250px; height: 50px;" type="submit" name="tambah_pro" value="Tambah Programmer Baru">
	</form></center>	
	<?php 
if (isset($_POST['tambah_pro'])) {
	$id = rand(1,1000);
	$nama = $_POST['nama'];
	$post = mysqli_query($koneksi,"INSERT INTO users values ('$id','$nama')");
}
 ?>
</div><br>
 <div style="border: 1px solid black;width: 100%;height: 400px;">
 	<center><br>
 		<?php   
		$xi = mysqli_query($koneksi,"SELECT * FROM users");
		while ($xxi = mysqli_fetch_array($xi)) { ?>
 	<div style="border: 1px solid black;height: 70px;width: 200px;">
			<tr>
				<td><?php  echo $xxi['id']; ?></td>
				<td><?php  echo $xxi['name']; ?></td>
			</tr>
	<?php		 }?>
	</center>
</div>
</div>
</body>
</html>
