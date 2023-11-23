<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
.beadmin {
    background-color: #ffe6cc;
    background-size: cover;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supplies page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "berhasil") { ?>
    <div class="alert alert-success" role="alert">
        Data editing process is completed!!
    </div>
    <?php } else if ($_GET['pesan'] == "addberhasil") { ?>
    <div class="alert alert-success" role="alert">
        Supply adding process is completed!
    </div>
    <?php } else if ($_GET['pesan'] == "gagal") { ?>
    <div class="alert alert-danger" role="alert">
        Supply adding process is failed!
    </div>
    <?php } else if ($_GET['pesan'] == "deletesuccess") { ?>
    <div class="alert alert-success" role="alert">
        Supply data deleted successfully!
    </div>
    <?php } else if ($_GET['pesan'] == "deletefailed") { ?>
    <div class="alert alert-danger" role="alert">
        Supply data delete failed!
    </div>
    <?php }
    }
    ?>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                <span class="fs-4">Coffee Address</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="session.php" class="nav-link text-dark">Home</a></li>
                <li class="nav-item"><a href="Supplies.php" class="nav-link active text-bg-dark"
                        aria-current="page">Supplies</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-dark">Logout</a></li>
            </ul>
        </header>
    </div>
    <div class="container" style="margin-top: 30px;">
        <h2 style="font-family:'Times New Roman', Times, serif;">
            <center>Our Supplies</center>
        </h2>
        <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <center>We select only the best ingredients for our coffee.</center>
        </p>
    </div>
    <div class="container" style="margin-top:30px;">
        <center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Supplies Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($konek, "SELECT * FROM barang");
                    while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <th scope="row"><?php echo $data['id_barang']; ?></th>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['stok']; ?></td>
                        <td><a href="editsupply.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-dark"
                                role="button" style="margin-right:10px;">Edit</a><a
                                href="hapussupply.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-dark"
                                role="button">Delete</a></td>
                    </tr>
                    <?php    } ?>
                </tbody>
            </table>
        </center>
    </div>
    <div class="beadmin">
        <div class="container" style="margin-top:30px;padding:30px;">
            <h2 style="font-family:'Times New Roman', Times, serif;">
                <center>Want to add supplies?</center>
            </h2>
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                <center>Add only quality supplies. We are very steadfast in maintaining the quality of our coffee.
                </center>
            </p>
            <center>
                <form method="POST" action="input_supplies.php">
                    <label class="form-label">Name</label>
                    <input style="margin:10px;width:400px;" class="form-control" type="text" name="nama"><br>
                    <label class="form-label">Quantity</label>
                    <input style="margin:10px;width:400px;" class="form-control" type="text" name="stok">
                    <button style="margin:10px;" type="submit" class="btn btn-dark">Submit</button>
                </form>
            </center>
        </div>
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="session.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="Supplies.php" class="nav-link px-2 text-muted">Supplies</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link px-2 text-muted">Logout</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
        </footer>
    </div>
</body>

</html>