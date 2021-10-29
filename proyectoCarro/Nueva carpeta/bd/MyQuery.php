<?php

class MyQuery {

    private $_conexion = null;
    private $_query = "";
    private $_error = "";
    private $_host = "localhost";
    private $_user = "root";
    private $_pass = "hola";
    private $_database = "pagina";
    private $_port = "3306";

  

    public function _construct(){
        $this->CerrarConexion();
        $this->_conexion = mysqli_connect($this->_host, $this->_user, $this->_pass, $this->_database, $this->_port);
    }

    function SelectVehiculos(){
        $this->_query = "SELECT id, marca, modelo, color, precio, categoria, ano, imagen FROM automoviles";
        $dt = $this->ExecuteReader();
        $lstVehiculos = array();
        foreach ($dt as $row){
            $vehiculos = new Vehiculo();
            $vehiculos->id = $row["id"];
            $vehiculos->marca = $row["marca"];
            $vehiculos->modelo = $row["modelo"];
            $vehiculos->color = $row["color"];
            $vehiculos->precio = $row["precio"];
            $vehiculos->categoria = $row["categoria"];
            $vehiculos->ano = $row["ano"];
            $vehiculos->imagen = $row["imagen"];
            array_push($lstVehiculos,$vehiculos);

        }
        return $lstVehiculos;
    }




  /*   function SelectVehiculos(){
        $this->_query = "SELECT id, Marca, Modelo, Color, Precio FROM vehiculos";
        $dt = $this->ExecuteReader();
        $lstVehiculos = array();
        foreach ($dt as $row){
            $vehiculos = new vehiculos();        
            $vehiculos ->id = $row["id"];
            $vehiculos ->marca = $row["Marca"];
            $vehiculos ->modelo = $row["Modelo"];
            $vehiculos ->color = $row["Color"];
            $vehiculos ->precio = $row["Precio"];
            array_push($lstVehiculos,$vehiculos);  
        }
        return $lstVehiculos;
    }
 */




















    Function CerrarConexion(){
        if($this->_conexion != null) mysqli_close($this->_conexion);

    }
    private function ExecuteReader(){
        $dt = array();
        if($this->_query == "") return $dt;
        $rst = mysqli_query($this->_conexion, $this->_query);
        if($rst){
            $dt = mysqli_fetch_all($rst, MYSQLI_ASSOC);
        }else {
            $this->_error = mysqli_error($this->_conexion);
        }
        return $dt;

    }

} 
?>


