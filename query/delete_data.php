<?php
include '../conn/conn.php'; 
// include '../dashboard.php'; // masukan konekasi DB

// ambil variable
$npm = $_GET['npm'];

//Proses query simpan
$delete = mysqli_query($connection, "DELETE FROM mhs WHERE npm = $npm");

if ($delete) {
    echo "Data berhasil didelete: <a href='../dashboard.php'> Tampil data </a>";
} else {
    echo "Gagal delete data!";
}
