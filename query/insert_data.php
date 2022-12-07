<?php
include '../conn/conn.php'; // masukan konekasi DB

// ambil variable
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}

//Proses query simpan
$insert = mysqli_query($connection, "insert into mhs(npm, nama, alamat, email, gender) values ('$npm','$nama','$alamat','$email','$gender')");

if ($insert) {
    echo "Data berhasil disimpan: <a href='../dashboard.php'> Tampil data </a>";
} else {
    echo "Gagal simpan data!";
}
