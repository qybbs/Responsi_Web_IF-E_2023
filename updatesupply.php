<?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:index.php?pesan=belum_login");
    }
?>
<html>
    <head>
        <title>Update Status</title>
    </head>
    <body>
        <?php
            include "koneksi.php";

            $id_barang = $_POST['id_barang'];
            $nama = $_POST['nama'];
            $stok = $_POST['stok'];
            $query = mysqli_query($konek,"UPDATE barang SET nama_barang='$nama', stok='$stok' where id_barang = '$id_barang'") or die(mysqli_error($konek));
            if($query) {
                header("location:Supplies.php?pesan=berhasil");
            } else {
                header("location:editsupply.php?pesan=gagal");
            }
        ?>
    </body>
</html>