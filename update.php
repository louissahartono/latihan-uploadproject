<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP KELAS XI RPL 2</title>
</head>
<body>
    <br/>
    <a href ="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA SISWA</h3>

    <?php
    include 'koneksi.php';
    $Kode_Mahasiswa = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from maha where Kode_Mahasiswa = '$Kode_Mahasiswa'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post"action="ubah.php">
            <table>
                <tr>
                    <td>Kode_Mahasiswa</td>
                    <td>
                        <input type="hidden" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>">
                        <input type="text" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>">
    </td>
                <tr>
                    <td>Nama_Mahasiswa</td>
                    <td>
                        <input type="text" name="Nama_Mahasiswa" value="<?php echo $d['Nama_Mahasiswa']; ?>">
    </td>
    <tr>
        <td>NIM</td>
        <td><input type= "number" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td><input type= "text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type= "text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
        <td><input type="hidden" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>"></td>
    </tr>
    </table>
    </form>
    <?php
    }
    ?>
</body>
</html>