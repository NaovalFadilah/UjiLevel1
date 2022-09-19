<?php
include 'koneksi.php';

if(isset($_POST['save'])){
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Buku = $_POST['Buku'];
    $Jumlah_Halaman = $_POST['Jumlah_Halaman'];
    $Tanggal = $_POST['Tanggal'];
    $Penerbit = $_POST['Penerbit'];
    
    $sql = "UPDATE dase_perpus SET Nama = '$nama', Kelas = '$alamat', Buku = '$Buku', Jumlah_Halaman = '$Jumlah_Halaman'WHERE dase_perpus. tanggal = '$tanggal'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilperpus.php');
    }else{  
        header('Location: simpan.php?status=gagal');
    }
}
?> 