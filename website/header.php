<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWW.GeekBuying.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
<header class="container-fluid mt-3">
    <nav class="navbar navbar-expand-sm navbar-white bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./img/PHP.png" class="img-fluid rounded-top" alt="" width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="website/shop.php">Shop</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link fw-bold" href="Bestselling.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="brand.php">About</a>
                    </li> -->
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                            <a class="nav-link fw-bold" href=".//dashboard/index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="website/login.php">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <form  class="d-flex container ms-2" role="search">
                        <input class="form-control" type="text" placeholder="Search">
                        <button class="btn btn-sm bgcolor text-white" type="button" style="width: 6rem;">Search</button>
                    </form>
                </div>
                <div class="d-flex">
                    <a href="cart.php" class="btn ms-2">
                        <i class="material-icons mt-2 textcolor" style="font-size:24px">shopping_cart</i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>