
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

           
                      for (var i = 0; i < 3; i++) {

                    console.log(valoresVehiculos[i]);
                    $("#carros"+i).attr("src","imagenes/"+valoresVehiculos[i].imagen);
                    $("#NombreCar"+i).text(valoresVehiculos[i].marca + " " +valoresVehiculos[i].modelo);
                    $("#Precio"+i).text(valoresVehiculos[i].precio);
                    $("#Ano"+i).text(valoresVehiculos[i].ano);


                  }  

                },
                error:function(jqXHR, textStatus, errorThrow){
                    alert(errorThrow);
                }
            });

          });
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
                        <li><a href="#insta">Redes</a></li>
                        <li><a href="./shopping-cart.php">Carrito</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="imagenes/cupra.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Agenda una cita con nosotros</span>
                            <h1 style="color: aliceblue;">Revisa nuestros modelos</h1>
                            <p>Revisa terminos y condiciones</p>
                            <a href="shop.php" class="primary-btn">Compra ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="imagenes/jetta.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Agenda una cita con nosotros</span>
                            <h1>Revisa nuestros modelos</h1>
                            <p>Revisa terminos y condiciones</p>
                            <a href="shop.php" class="primary-btn">Compra ahora</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="https://img.autocosmos.com/noticias/fotos/preview/NAZ_8ab5741dae2a48e18b9887c692d003ed.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nuevos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="imagenes/fiesta.jpg" alt="">
                        <div class="inner-text">
                            <h4>Seminuevos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="imagenes/elantra.jpg" alt="">
                        <div class="inner-text">
                            <h4>Usados</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->





<!-- Imagenesss -->
    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="https://i.pinimg.com/originals/db/33/17/db3317a6390cbd2b81c88baacce1996d.jpg">
                        <h2>Descubre tu nuevo auto</h2>
                        <a href="./shop.php">Adquierelo ya</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Escoge tu favorito</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="imagenes/jetta1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                               
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">2020</div>
                                <a href="#">
                                    <h5>Volkswagen Jetta</h5>
                                </a>
                                <div class="product-price">
                                    $380,000
                                    <span>$400000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="imagenes/tiguan.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">2019</div>
                                <a href="#">
                                    <h5>Volkswagen Tiguan</h5>
                                </a>
                                <div class="product-price">
                                    $500,000
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="imagenes/seat.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">2019</div>
                                <a href="#">
                                    <h5>Seat Ibiza</h5>
                                </a>
                                <div class="product-price">
                                    $380,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="imagenes/dias.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>¡Estamos de oferta!</h2>
                    <p>Por nuestro aniversario, tenemos grandes ofertas que debes aprovechar </p>
                    <div class="product-price">
                        Desde $200,000.00
                        <span>/ MXN</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="shop.php" class="primary-btn">¡Compra Ahora!</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->
    <br>


   

    <!-- Instagram Section Begin -->
    <div id="insta" class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="imagenes/insta/bm.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="imagenes/insta/cupra.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="imagenes/insta/lobo.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="imagenes/insta/march.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="imagenes/insta/subaru.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="imagenes/insta/suburban.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/autodinamicomx/">Autodinamico</a></h5>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->

    <!-- Latest Blog Section End -->

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