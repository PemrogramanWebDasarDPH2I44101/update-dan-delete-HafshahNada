<?php
require_once 'db.php';

$nama       = $_POST['nama'];
$nim        = $_POST['nim'];
$tgl_lahir  = $_POST['tgl_lahir'];

$sql = "INSERT INTO siswa(nama, nim, tgl_lahir) 
        VALUES ('$nama','$nim','$tgl_lahir')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "silahkan klik <a href='list.php'>link</a> untuk ke halaman list";
?> 
