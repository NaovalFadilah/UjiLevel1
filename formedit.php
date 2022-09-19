<?php
include 'koneksi.php';

$Nama = $_GET['Nama'];
$sql = "SELECT * FROM dase_perpus WHERE Nama='$Nama'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>Edit Data Pelanggan</h3>
        <p><label>Nama : <input value="<?php echo $pel['nama']?>" required="required" type="hidden" name="Nama"></label></p>
        <p><label>Kelas : <input value="<?php echo $pel['Kelas']?>" required="required" type="text" name ="Kelas"></label></p>
        <p><label>Buku : <textarea required="required" name="Buku" cols="30" rows="5"><?php echo $pel['Buku']?></textarea></label></p>
        <p><label>Jumlah Halaman : <input value="<?php echo $pel['Jumlah_Halaman']?>" required="required" type="number" name="Jumlah_Halaman"></label></p>
        <p><label>Tanggal : <input value="<?php echo $pel['Tanggal']?>" required="required" type="text" name="Tanggal"></label></p>
        <p><label>Penerbit : <input value="<?php echo $pel['Penerbit']?>" required="required" type="text" name="Penerbit"></label></p>
        <input type="submit" name="save" value="Simpan">
    </form>   
</body>
</html>