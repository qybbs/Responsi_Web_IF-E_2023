<?php
    session_start();


    //menangkap data yang dikirim dari form
    $adminname = $_POST['username'];
    $password = $_POST['password'];
    $confpassword = $_POST['confirmpassword'];
    $notelp = $_POST['phonenumber'];

    if ($password == $confpassword) {
        include "koneksi.php";
        $query = mysqli_query($konek,"INSERT INTO admin VALUES('','$adminname','$notelp','$confpassword')") or die(mysqli_error($konek));

        if($query) {
            header("location:index.php?pesan=terdaftar");
        } else {
            header("location:signup.php?pesan=gagal");
        } 
    } else {
        header("location:signup.php?pesan=gagal");
    } 
?>