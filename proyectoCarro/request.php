<?php
require_once "model/Vehiculo.php";
require_once "bd/MyQuery.php";


            if(isset($_GET['val'])){
                session_start();
                $query = new MyQuery();
                $query->_construct();
                $datos = array();
                $lstVehiculos = array();
                $index = $_SESSION['carrito'];
                $carrito = $_SESSION['carrito'];

                foreach ($carrito as $index) {
                    $datos = $query-> ObtenerVehiculos($index);

                }
                array_push($lstVehiculos,$datos);
                echo json_encode($lstVehiculos); 



            }else{
                if(isset($_POST['datos'])){
                    session_start();
                    $_SESSION['carrito'] = $_POST['datos'];

                }else{
                    $query = new MyQuery();
                    $query->_construct();
                    echo json_encode($query->SelectVehiculos());
                }
            }
?>