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
        .iconHover:hover {
            background: lightskyblue;
            color: black;
        }

        @media(max-width: 768px) {
            #main_msg {
                font-size: 30px !important;
            }

            #sub_msg, #reco {
                font-size: 18px !important;
            }
        }
    </style>

    <script>
        // Function that asks for geolocation permission
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            lat = position.coords.latitude; 
            lon = position.coords.longitude;

            console.log(lat);
            console.log(lon);

            call_google_geolocation_api(lat, lon);
        }

        function call_google_geolocation_api(lat, lon) {
            
            // Enter own API key
            var api_key = "";

            var url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lon}&key=${api_key}&result_type=country`;

            // Step 1
            var request = new XMLHttpRequest();

            // Step 2
            request.onreadystatechange = function() {
                // Step 5
                if( request.readyState == 4 && request.status == 200 ) {

                    // Convert API response to JavaScript JSON object
                    var response_object = JSON.parse(request.responseText).results[0].address_components[0];

                    var country_long = response_object.long_name; 
                    var country_short = response_object.short_name;

                    console.log(country_long);  // Singapore
                    console.log(country_short); // SG
                }
            }

            // Step 3
            request.open("GET", url, true); 

            // Step 4
            request.send();

        }

        // Calling function for browser to ask user for geolocation permission
        getLocation();

    </script>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favourites.php">Favourites <i class="far fa-heart"></i></a>
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
        <span id="main_msg" class="text-center lead d-block animate__animated animate__bounce" style="margin-bottom: 15px; font-size: 40px;">Welcome, fellow shopaholic!</span>
        <span id="sub_msg" class="h4 bg-primary text-light" style="font-size: 25px;">&nbsp;Which item is waiting for you today?&nbsp;</span>

        <form name="search_bar" action="search.php" style="margin-top: 30px; padding-left: 15%; padding-right: 15%;">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Search it!">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Recommendations -->

    <div class="container" style="margin-top: 50px;">
        <div id="reco" class="h4" style="margin-bottom: 20px;">Recommendations</div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/iphone.png" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">iPhone XS</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">$1100.00</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">iPhone XS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/iphone.png" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                Most Advanced iPhone Ever Features a 5.8-Inch and 6.5-Inch All-Screen Design, with Powerful A12 Bionic Chip and a Breakthrough Dual Camera System.
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$1100.00</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/amazon.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/nike.jpg" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal2">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal2">Nike dotted</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal2">$200.00</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nike dotted</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/nike.jpg" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                Refer to official website for description <a href="http://shopee.sg">here</a>
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$200.00</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/aliexpress.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/xiaomi.jpg" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal3">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal3">Xiaomi Air Purifier</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal3">$123.85</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xiaomi Air Purifier</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/xiaomi.jpg" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                CADR (Clean Air Delivery Rate) is the international standard for measuring the effectiveness of air purifiers. Mi Air Purifier has been redesigned from the ground up according to aerodynamic principles to deliver high performance from a compact device. The dual-blower 4-duct circulation system effectively pumps clean air into every corner of your home. Effective coverage ranges from 28m² to 48m².
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$123.85</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/amazon.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/prism.webp" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal4">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal4">Prism+</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal4">$958.67</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Prism+</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/prism.webp" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                Refer to official website for description <a href="http://shopee.sg">here</a>
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$958.67</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/aliexpress.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/underarmour.jpg" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal5">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal5">Under Armour cap</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal5">$23.70</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Under Armour cap</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/underarmour.jpg" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                UA Classic Fit features a pre-curved visor & structured front panels that maintain shape with a low profile fit
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$23.70</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/taobao.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/ipad.png" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal6">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal6">iPad PRO</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal6">$689.58</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">iPad PRO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/ipad.png" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                With iPad, getting work done is all hustle and no hassle. Edit a document while researching something on the web and making a FaceTime call to a colleague at the same time. Attach a full‑sized Smart Keyboard for comfortable typing.1 And for tasks that require more precision, support for a trackpad or mouse complements the familiar Multi‑Touch experience of iPad.
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$689.58</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/aliexpress.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/watch.jpg" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal7">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal7">Black Simple watch</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal7">$125.00</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Black Simple watch</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/watch.jpg" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                Refer to official website for description <a href="favourites.php">here</a>
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$125.00</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/amazon.png" width="40%">
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card h-100" style="padding-top: 20px;">
                    <img src="images/dettol.jpg" class="card-img-top" style="height: 223px; cursor: pointer;" alt="..." data-toggle="modal" data-target="#exampleModal8">
                        
                    <div class="card-body">
                        <h6 class="card-title" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal8">Dettol Hand Sanitiser</h6>
                        
                        <p class="card-text text-primary font-weight-bold float-left m-0" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal8">$4.30</p>
                        <p class="card-text text-secondary font-weight-bold float-right">
                            <a href="favourites.php"> <i class="far fa-heart text-secondary iconHover"></i></a>
                            <a href="cart.php"> <i class="fas fa-shopping-cart text-secondary iconHover"></i> </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dettol Hand Sanitiser</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                            <img src="images/dettol.jpg" style="height: 223px;" alt="...">
                                            </div>
                                        </div>

                                        <div class="row-cols-1">
                                            <div class="col mb-2 mt-2">
                                                Kills 99.99999% germs. Get yours today!
                                            </div>

                                            <div class="col">
                                                <p class="card-text text-primary font-weight-bold float-left m-0">$4.30</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <a href="favourites.php" class="btn btn-warning text-light">Favourite <i class="far fa-heart"></i></a>
                                    <a href="cart.php" class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-primary text-center">
                        <img src="images/taobao.png" width="40%">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>