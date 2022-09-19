<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="container-kiri">

            <div class="ck-atas">
                <img src="img/smktb-removebg-preview.png" alt="eror">
                <h1>My Perpus</h1>
            </div>
            <div class="ck-bawah">
                <div class="ckb-datasiswa">
                    <a href="">Data Siswa</a>
                </div>
                <div class="ckb-data">
                    <a href="">Data Buku</a>
                </div>
            </div>
        </div>
        <div class="container-kanan">
            <div class="ck-title">
        <div class="tbsiswa">
        <h3>Data Siswa</h3>
    <h4><a href="tambahdatasiswa.html">[+]Tambah Baru</a></h4>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Buku</th>
            <th>Jumlah_Halaman</th>
            <th>Tanggal</th>
            <th>Penerbit</th>
        </tr>
        <?php
            $sql = "SELECT * FROM DASE_PERPUS";
            $query = mysqli_query ($connect,$sql);
            while($sis = mysqli_fetch_array ($query)){
                // var_dump($query)
                echo "
            <tr>
            <td>$sis[Nama]</td>
            <td>$sis[Kelas]</td>
            <td>$sis[Buku]</td>
            <td>$sis[Jumlah_Halaman]</td>
            <td>$sis[Tanggal]</td>
            <td>$sis[Penerbit]</td>

            <td>
                <a href='formedit.php?Nama=".$sis['Nama']."'>Edit</a>
                <a href='hapusdatasiswa.php?Nama=".$sis['Nama']."'>Hapus</a>
            </td>
            </tr>";
            }
        ?>
    </table>
    </div>
    </div>
</body>
</html>


