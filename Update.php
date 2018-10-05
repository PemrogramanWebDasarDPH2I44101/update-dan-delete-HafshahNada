<?php
include_once 'db.php';

if (isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$id = $_POST['id'];

	$query = "UPDATE Siswa Set nim='$nim', nama='$nama',tgl_lahir='$tgl_lahir' Where id ='$id'";
	$query_succes = msqli_query($conn,$query);
	if (@query_succes){
		header("location: list.php");

	}else{
		echo mysql_error($conn);
		echo "<a href='Edit.php'>Kembali</a>";
	}
}