<?php

session_start();


include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);


    if ($data['level'] == "admin") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location:halaman_admin.php");
    } else if ($data['level'] == "guru") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "guru";

        header("location:halaman_guru.php");
    } else if ($data['level'] == "siswa") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";

        header("location:halaman_siswa.php");
    } else if ($data['level'] == "adminsekolah") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "adminsekolah";

        header("location:halaman_adminsekolah.php");
    } else if ($data['level'] == "orangtua") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "orangtua";

        header("location:halaman_orangtua.php");
    } else if ($data['level'] == "staffadmin") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "staffadmin";

        header("location:halaman_staffadmin.php");
    } else if ($data['level'] == "administrator") {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "administrator";

        header("location:halaman_.php");

        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
