<?php
require_once "model/Vehiculo.php";
require_once "bd/MyQuery.php";

            $query = new MyQuery();
            $query->_construct();
            echo json_encode($query->SelectVehiculos());
 
?>