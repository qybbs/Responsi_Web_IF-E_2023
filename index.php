<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") { ?>
    <div class="alert alert-danger" role="alert">
        Login Failed! Your username or password is wrong!
    </div>
    <?php } else if ($_GET['pesan'] == "logout") { ?>
    <div class="alert alert-success" role="alert">
        Logout success!
    </div>
    <?php } else if ($_GET['pesan'] == "belum login") { ?>
    <div class="alert alert-danger" role="alert">
        You have to sign in to access admin page!
    </div>
    <?php } else if ($_GET['pesan'] == "terdaftar") { ?>
    <div class="alert alert-success" role="alert">
        Your Registration is complete!
    </div>
    <?php } else if ($_GET['pesan'] == "berhasil") { ?>
    <div class="alert alert-success" role="alert">
        Your Password is changed! Try Now!
    </div>
    <?php }
    }
    ?>
    <center>
        <div class="container"
            style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width:500px;margin:auto;">
            <div class="row">
                <center><img src="logo.svg" style="width:100px;margin:30px;"></center>
            </div>
            <div class="row">
                <form method="POST" action="cek_login.php">
                    <div class="form-floating" style="margin-bottom:10px;">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Admin Name"
                            name="username">
                        <label for="floatingInput">Admin Name</label>
                    </div>
                    <div class="form-floating" style="margin-bottom:10px">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-50 btn btn-lg btn-dark my-4" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>