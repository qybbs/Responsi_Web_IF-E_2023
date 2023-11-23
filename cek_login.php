<?php
    session_start();
    //menghubungkan dengan koneksi
    $query = new mysqli('localhost','root','','coffeeshop');

    //menangkap data yang dikirim dari form
    $adminname = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($query, "select * from admin where nama_admin='$adminname' and password='$password'") or die (mysqli_error($query));

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $adminname;
        $_SESSION['status'] = "login";
        header("location:session.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>