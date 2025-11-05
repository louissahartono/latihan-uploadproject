<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <a href="tambah.php"  class="add-button">+ TAMBAH SISWA</a>

    <br/>
    <br/>
    <table border="1" class="table-mahasiswa">
        <tr>
            <th>Kode_Mahasiswa</th>
            <th>Nama_Mahasiswa</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from maha");
while ($d=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $d['Kode_Mahasiswa']; ?></td>     
        <td><?php echo $d['Nama_Mahasiswa']; ?></t>
        <td><?php echo $d['NIM']; ?></td>
        <td><?php echo $d['Jurusan']; ?></td>
        <td><?php echo $d['Alamat']; ?></td>
        <td>  
            <a href="update.php?id=<?php echo $d['Kode_Mahasiswa']; ?>">UPDATE</a>
            <a href="delete.php?id=<?php echo $d['Kode_Mahasiswa']; ?>">DELETE</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>