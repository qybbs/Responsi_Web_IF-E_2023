<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .coffeeslogan {
            background-image: url("main.jpg");
            background-size: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                <span class="fs-4">Coffee Address</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="session.php" class="nav-link active text-bg-dark" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="Supplies.php" class="nav-link text-dark">Supplies</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-dark">Logout</a></li>
            </ul>

    </div>
    </div>
    </header>
    </div>
    <div class="coffeeslogan" style="height: 200px;">
        <h1 style="padding-top:70px;font-family: 'Times New Roman', Times, serif; color: white;">
            <center><a class="text-bg-dark text-decoration-none">Welcome, <?php echo $_SESSION['username']; ?>!</a>
            </center>
        </h1>
    </div>
    <div class="container" style="margin-top: 30px;">
        <h2 style="font-family:'Times New Roman', Times, serif;">
            <center>Our Coffee</center>
        </h2>
        <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <center>We have carefully selected great tasting coffees from around the world.</center>
        </p>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col" style="margin: 30px;">
                    <center><img src="Delizioso_Dolce_6.png" height="300px;"></center>
                </div>
                <div class="col" style="margin: 30px;">
                    <center><img src="Delizioso_Forte_6.png" height="300px;"></center>
                </div>
                <div class="col" style="margin: 30px;">
                    <center><img src="Arabica_Classic_4.png" height="300px;"></center>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>