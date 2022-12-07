<?php
include '../conn/conn.php'; // masukan konekasi DB

// ambil variable
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$gender = $_POST['gender'];

//Proses query simpan
$update = mysqli_query($connection, "UPDATE mhs SET nama='$nama', alamat='$alamat', email='$email', gender='$gender'");

if ($update) {
    echo "Data berhasil diupdate: <a href='../dashboard.php'> Tampil Data </a>";
} else {
    echo "Gagal simpan data!";
}
?>