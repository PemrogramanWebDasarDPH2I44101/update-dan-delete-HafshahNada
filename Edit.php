<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>WebDas</title>
</head>
<body>
	<table>
		<form action="Update.php"  method="POST">
			<?php
			$id = $_GET['id'];
			$query ="Select * From Siswa Where id = '$id'";
			$result = mysqli_fetch_array($result)){
			?>

			<input type="hidden" name="id" value="<?php echo $GET['id'];?>">

			<tr>

				<td>Nama</td>
				<td><input type="text" name="nama" value<?php echo $d['nama']; ?>"> </td>

			</tr>
			<tr>
				
				<td>NIM</td>
				<td><input type="text" name="nim" value<?php echo $d['nim']; ?>"> </td>

			</tr>

			<tr>
				
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir" value<?php echo $d['tgl_lahir']; ?>"> </td>

			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>

			<?php
		}
		?>
		</form>
	</table>

</body>
</html>