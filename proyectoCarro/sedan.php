<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="zxx">
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MotorZac</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script>
$(document).ready(function(){


        $.ajax("request.php",{
                success:function(data, textStatus, jqXHR){
                    var valoresVehiculos = JSON.parse(data);

             /*    $.each(valoresVehiculos, function(index, value) {
                    console.log(value.imagen);
                    $("#carros"+index).attr("src","imagenes/"+value.imagen);
                    $("#NombreCar"+index).text(value.marca + " " +value.modelo);
                    $("#Precio"+index).text(value.precio);
                    $("#Ano"+index).text(value.ano);     
                });*/
             /*    $("#carros1").attr("src","imagenes/seat.jpg"); */
                      for (var i = 0; i < 10; i++) {

                    console.log(valoresVehiculos[i]);
                    $("#carros"+i).attr("src","imagenes/"+valoresVehiculos[i].imagen);
                    $("#NombreCar"+i).text(valoresVehiculos[i].marca + " " +valoresVehiculos[i].modelo);
                    $("#Precio"+i).text(valoresVehiculos[i].precio);
                    $("#Ano"+i).text(valoresVehiculos[i].ano);
                    $("#Categoria"+i).text(valoresVehiculos[i].categoria);

                  }  

                },
                error:function(jqXHR, textStatus, errorThrow){
                    alert(errorThrow);
                }
            });

          });
          var carrito =[];
function anyadirCarrito (ID) {

    // Anyadimos el Nodo a nuestro carrito
    carrito.push(ID);
        alert("Añadido al carrito");
        alert(ID);
        $.post( "request.php", {
        datos: carrito
        } , function(data,status) {
            console.log(data+" "+status);
            });

    // Actualiza LocalStorage
 /*    guardarCarritoEnLocalStorage(); */
}
  </script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   <!-- Header Section Begin -->
   <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        alan.av07@hotmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +55 436 120 01 95
                    </div>
                </div>
                <div class="ht-right">
                <a href="./login.php" class="login-panel"><i class="fa fa-user"></i>Iniciar o cerrar sesión</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag1.jpg" data-imagecss="flag yt"
                                data-title="English">Español</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">Ingles </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categorias</span>
                        <ul class="depart-hover">
                            <li><a href="./suv.php">SUV</a></li>
                            <li><a href="./sedan.php">Sedan</a></li>
                            <li><a href="./hatch.php">HatchBack</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">Inicio</a></li>
                        <li><a href="./shop.php">Tienda</a></li>
                        <li><a href="./shopping-cart.php">Carrito</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index.php"><i class="fa fa-home"></i>Inicio</a>
                        <span>Sedan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                        <h4 class="fw-title">Categorias</h4>
                        <ul class="filter-catagories">
                            <li><a href="./sedan.php">Sedan</a></li>
                            <li><a href="./suv.php">SUV</a></li>
                            <li><a href="./hatch.php">Hatchback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p> 03 Of 09 </p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros0" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(1)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a id="Categoria0"></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano0" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar0">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio0" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros2" src="" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(3)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a id="Categoria2"></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano2" class="catagory-name"></div>
                                        <a href="#">
                                            <h5 id="NombreCar2">Guangzhou sweater</h5>
                                        </a>
                                        <div id="Precio2" class="product-price">
                                            $13.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                        <div class="pi-pic">
                                            <img id="carros5" src="" alt="">
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a onclick="anyadirCarrito(7)"><i class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a id="Categoria5"></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div id="Ano5" class="catagory-name"></div>
                                            <a href="#">
                                                <h5 id="NombreCar5">Guangzhou sweater</h5>
                                            </a>
                                            <div id="Precio5" class="product-price">
                                                $13.00
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros3" src="" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(4)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano3" class="catagory-name"></div>
                                        <a href="#">
                                            <h5 id="NombreCar3">Guangzhou sweater</h5>
                                        </a>
                                        <div id="Precio3" class="product-price">
                                            $13.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros4" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(5)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano4" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar4">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio4" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros5" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(6)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano5" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar5">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio5" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros6" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(7)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano6" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar6">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio6" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros7" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(8)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano7" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar7">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio7" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img id="carros8" src="" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a onclick="anyadirCarrito(9)"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a>Compra ahora</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div id="Ano8" class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5 id="NombreCar8">Pure Pineapple</h5>
                                        </a>
                                        <div id="Precio8" class="product-price">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

  <!-- Footer Section Begin -->
  <footer class="footer-section" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Hector Berlioz #4922</li>
                            <li>Phone: +52 436 120 01 95</li>
                            <li>Email: alan.av07@hotmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>