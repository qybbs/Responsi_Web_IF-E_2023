<?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:index.php?pesan=belum_login");
    }
?>
<html>
    <head>
        <title>Input Status</title>
    </head>
    <body>
    <?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $stok = $_POST['stok'];

    $query = mysqli_query($konek,"INSERT INTO barang VALUES('','$nama','$stok')") or die(mysqli_error($konek));

    if($query) {
        header("location:Supplies.php?pesan=addberhasil");
    } else {
        header("location:Supplies.php?pesan=gagal");
    }
    ?>
    </body>
</html>