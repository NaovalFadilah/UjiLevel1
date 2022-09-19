<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyPerpus</title>
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
            <h1>UJI LEVEL TINGKAT XI</h1>
            </div>
            <div class="ck-form">
                <div class="ckf-kiri">
                <form>
                    <div class="content">
                    <table>
                    <tr>
                        <td><p>Id Siswa</p></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><p>Nama</p></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><p>Kelas</p></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><p>Jurusan</p></td>
                        <td><input type="text"></td>
                    </tr>
                    </table>
                </form>
                    </div>
                </div>
                
            </div>
        </div>
     </div>
</body>
</html>