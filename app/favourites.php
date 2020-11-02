<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome - for heart and cart icon -->
    <script src="https://kit.fontawesome.com/996cf4158f.js" crossorigin="anonymous"></script>

    <!-- Animation.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Lazy Shopaholics - Home Page</title>

    <style>
        @media(max-width: 768px) {
            #main_msg {
                font-size: 30px !important;
            }

            #sub_msg, #reco {
                font-size: 18px !important;
            }
        }
    </style>

</head>
<body>
    <!-- Navigation bar-->
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <a href="index.php">
                <span class="navbar-text text-body" style="font-size: 20px;">Lazy Shopaholics</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
                      
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="favourites.php">Favourites <i class="far fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="register.php">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Welcome message & Search Bar-->
    <div class="container text-center" style="margin-top: 100px;">
        <span id="main_msg" class="text-center lead d-block" style="margin-bottom: 15px; font-size: 40px;"><i class="far fa-heart"></i><br>Your Favourite Items</span>
    </div>

    <!-- Favourite Items -->
    <div class="container" style="margin-top: 50px;">
        
        <table class="table table-striped table-hover table-bordered table-sm">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pt-2">
                        <img src="images/iphone.png" width="80" height="80" class="float-left mr-2">
                        <strong>iPhone XS <span class="badge badge-pill badge-warning">Amazon</span></strong> <br>
                        <i>Most Advanced iPhone Ever Features a 5.8-Inch and 6.5-Inch All-Screen Design..</i>
                    </td> 

                    <td class="align-middle">$1100.00</td>

                    <td class="align-middle">
                        <a href="delete.php" class="btn btn-danger btn-sm mb-2">Remove</a> <a href="delete.php" class="btn btn-primary btn-sm mb-2">Move to cart <i class="fas fa-shopping-cart"></i></a>
                    </td>
                </tr>
                
                <tr>
                    <td class="pt-2">
                        <img src="images/xiaomi.jpg" width="80" height="80" class="float-left mr-2">
                        <strong>Xiaomi Air Purifier <span class="badge badge-pill badge-warning">AliExpress</span></strong> <br>
                        <i>CADR (Clean Air Delivery Rate) is the international standard for measuring the..</i>
                    </td> 

                    <td class="align-middle">$123.85</td>

                    <td class="align-middle">
                        <a href="delete.php" class="btn btn-danger btn-sm mb-2">Remove</a> <a href="delete.php" class="btn btn-primary btn-sm mb-2">Move to cart <i class="fas fa-shopping-cart"></i></a>
                    </td>
                </tr>

                <tr>
                    <td class="pt-2">
                        <img src="images/dettol.jpg" width="80" height="80" class="float-left mr-2">
                        <strong>Dettol Hand Sanitiser <span class="badge badge-pill badge-warning">Taobao</span></strong> <br>
                        <i>Kills 99.99999% germs. Get yours today!</i>
                    </td> 

                    <td class="align-middle">$4.30</td>

                    <td class="align-middle">
                        <a href="delete.php" class="btn btn-danger btn-sm mb-2">Remove</a> <a href="delete.php" class="btn btn-primary btn-sm mb-2">Move to cart <i class="fas fa-shopping-cart"></i></a>
                    </td>
                </tr>

                <tr>
                    <td class="pt-2">
                        <img src="images/prism.webp" width="80" height="80" class="float-left mr-2">
                        <strong>Prism+ <span class="badge badge-pill badge-warning">Amazon</span></strong> <br>
                        <i>Click the "Buy!" button to view item description</i>
                    </td> 

                    <td class="align-middle">$958.67</td>

                    <td class="align-middle">
                        <a href="delete.php" class="btn btn-danger btn-sm mb-2">Remove</a> <a href="delete.php" class="btn btn-primary btn-sm mb-2">Move to cart <i class="fas fa-shopping-cart"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>