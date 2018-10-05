<?php
require_once 'db.php';
?>
<table border=1>
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Tanggal Lahir</th>
    </thead>
    <tbody>
<?php
$query    = "SELECT * FROM Siswa";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['tgl_lahir']; ?></td>
        <td>
            <a href="Edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
            <a href="Delete.php?id=<?php echo $row['id']; ?>" on click=return confirm('Apakah Anda Yakin?'>Delete</a>
        </td>
    </tr>

<?php
        }
    }else{
        echo "No result";
    }
?>
</tbody>
</table>
<br>
    <a href="form.php">Tambah Data</a>

</body>
</html>

        
        
        
