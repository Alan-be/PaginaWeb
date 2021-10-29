<?php
    include "model/Vehiculo.php";
    include "bd/MyQuery.php";
    include "model/Usuario.php";
    $query = new MyQuery();
    $query-> _construct();

    if(isset($_POST["agregar"])){
        $obj = new Vehiculo();
        $obj->marca = $_POST["marca"];
        $obj->modelo = $_POST["modelo"];
        $obj->color = $_POST["color"];
        $obj->precio = $_POST["precio"];
        $obj->categoria = $_POST["categoria"];
        $obj->ano = $_POST["ano"];
        if(isset($_FILES["imagen"])){
            echo "Con Imagen";
            $temp = $_FILES["imagen"]["tmp_name"];
            $name = $_FILES["imagen"]["name"];
            if(move_uploaded_file($temp,"imagenes/$name")){
                $obj->imagen = $name;
            }
        }
        if($query->InsertVehiculos($obj))
            echo "Vehiculo Agregado";
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                        <span>Administrador</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Faq Section Begin -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
      <th scope="col">Año</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
  <?php 
            $vehiculos = $query->SelectVehiculos();
            foreach($vehiculos as $tel){
                echo "<tr><td>$tel->marca</td><td>$tel->modelo</td><td>$tel->color</td><td>$".number_format($tel->precio,2)."</td>
                        <td>$tel->categoria</td><td>$tel->ano</td><td><img src='imagenes/$tel->imagen' /></td></tr>";
            }
        ?>
  </tbody>
<!-- </table>
    <table border="1">
        <tr><th>Marca</th><th>Modelo</th><th>Color</th><th>Precio</th><th>categoria</th><th>Año</th><th>Imagen</th></tr>
       
    </table> -->
    <form action="" method="POST" enctype="multipart/form-data">
            Marca: <input type="text" name="marca" >
            Módelo: <input type="text" name="modelo" >
            Color: <input type="text" name="color" >
            Precio: <input type="text" name="precio" >
            Categoria: <input type="text" name="categoria" >
            Año: <input type="text" name="ano" >
            <input type="file" name="imagen"  id="">
            <input type="submit" name="agregar" value="Agregar">
    </form>
    <br>
    <br>
   <!-- Tabla Usuarios -->

    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
  <?php 
            $user = $query->SelectUser();
            foreach($user as $tel){
                echo "<tr><td>$tel->id</td><td>$tel->user</td><td>$tel->contra</td><td>$tel->id_cliente</td></tr>";
            }
        ?>
  </tbody>
</table>


    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Registro de administrador</h2>
                        <form action="" method="post">
                            <div class="group-input">
                                <label for="username">Nombre de admin</label>
                                <input type="text" name="usuario">
                            </div>
                            <div class="group-input">
                                <label for="pass">Contraseña</label>
                                <input type="text" name="password">
                                <input type="hidden" name="tipoUsuario" value="0">
                            </div>
                            <button type="submit" class="site-btn register-btn">Registrar</button>
                        </form>
                        <?php
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                require_once "bd/MyQuery.php";
                  $query = new MyQuery();
                  $query->_construct();
                 
                  $query-> CreateAdmin($_REQUEST["usuario"],$_REQUEST["password"],$_REQUEST["tipoUsuario"]);

              }
          
            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Faq Section End -->

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