<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- cek pesan notifikasi -->
    <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") { ?>
                  <div class="alert alert-danger" role="alert">
                    Your Registration is failed!
                    </div>  
               <?php } 
            }
        ?>
        <center>
            <div class="container" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width:500px;margin:auto;">
                <div class="row">
                    <center><img src="logo.svg" style="width:100px;margin:30px;"></center>
                    <h2 style="margin-bottom:30px;">Register yourself here</h2>
                </div>
                <div class="row">
                    <form method="POST" action="cek_signup.php">
                        <div class="form-floating" style="margin-bottom:10px;">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Admin Name" name="username">
                        <label for="floatingInput">Admin Name</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:10px;">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Phone Number" name="phonenumber">
                        <label for="floatingInput">Phone Number</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:10px">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:10px">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="confirmpassword">
                        <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox"> By being an admin, you agree to the <a href="#" class="nav-link text-primary">Terms of Service</a>
                        </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit">Sign Up</button>
                        <label style="margin:20px">Already have an account? <a href="index.php" class="nav-link text-primary">Sign in</a></label>
                    </form>
                </div>
            </div>
        </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>