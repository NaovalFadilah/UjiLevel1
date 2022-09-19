<?php
include 'koneksi.php';

if(isset($_POST ['simpan'])){
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Buku = $_POST['Buku']; 
    $Jumlah_Halaman = $_POST['Jumlah_Halaman'];
    $Tanggal = $_POST['Tanggal'];
    
    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telepon, email) VALUES ('$id_pelanggan','$nama_pelanggan','$alamat','$telepon','$email')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilpelanggan.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?> 