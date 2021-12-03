<?php
session_start();
require_once('conn/koneksi.php');

$user = $_POST['username'];
$pass     = $_POST['password'];
$cekuser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if ($jumlah == 0) {
    header('location:login.php?userfail');
} else {
    if ($pass <> $hasil['password']) {
        header('location:login.php?passwordfail');
    } else {
        $_SESSION['username'] = $user;
        header('location:rental.php');
    }
}
