<?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:index.php?pesan=belum_login");
    }
?>
<html>
    <head>
        <title>Delete Status</title>
    </head>
    <body>
    <?php
    include "koneksi.php";
    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($konek,"DELETE FROM barang where id_barang = $id_barang");

    if($query) {
        header("location:Supplies.php?pesan=deletesuccess");
    } else {
        header("location:Supplies.php?pesan=deletefailed");
    }
    ?>
    </body>
</html>