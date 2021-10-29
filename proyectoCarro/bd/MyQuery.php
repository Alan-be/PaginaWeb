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

    function SelectUser(){
        $this->_query = "SELECT ID, User, Contra, ID_Cliente FROM usuarios";
        $dt = $this->ExecuteReader();
        $lstUser = array();
        foreach ($dt as $row){
            $usuario = new Usuario();
            $usuario->id = $row["ID"];
            $usuario->user = $row["User"];
            $usuario->contra = $row["Contra"];
            $usuario-> id_cliente= $row["ID_Cliente"];
            array_push($lstUser,$usuario);

        }
        return $lstUser;
    }

    public function ObtenerVehiculos($id=0){
        if(!$id){
            return null;
        }
        $this->_query = "SELECT id, marca, modelo, color, precio, categoria, ano, imagen FROM automoviles WHERE id=$id";
        $row = $this->ExecuteReader();
        $vehiculos = null;
        if(count($row) > 0){
            $vehiculos = new Vehiculo();
            $vehiculos->id = $row[0]["id"];
            $vehiculos->marca = $row[0]["marca"];
            $vehiculos->modelo = $row[0]["modelo"];
            $vehiculos->color = $row[0]["color"];
            $vehiculos->precio = $row[0]["precio"];
            $vehiculos->categoria = $row[0]["categoria"];
            $vehiculos->ano = $row[0]["ano"];
            $vehiculos->imagen = $row[0]["imagen"];
        }
        return $vehiculos;
    }

    
    function logInUsuarios($user, $contra){
        $this->_query = "SELECT ID, User, Contra, ID_Cliente FROM usuarios WHERE Contra=$contra";
        $dt = $this->ExecuteReader();
        $usuario = null;
                foreach ($dt as $datos) {
                    if ($user==$datos['User']) {
                        $usuario = new Usuario();
                        $usuario->id = $datos["ID"];
                        $usuario->user = $datos["User"];
                        $usuario->contra = $datos["Contra"];
                        $usuario-> id_cliente= $datos["ID_Cliente"];
                    }
                }
            return $usuario;
     

    }

    function logInUsuarios1($user, $contra){
        $this->_query = "SELECT ID_Cliente FROM usuarios WHERE User=$user AND Contra=$contra";
        return $this->ExecuteReader();
        
    }

    
    function CreateUser($user,$contra,$tipoUsuario){
        $this->_query = "INSERT INTO `usuarios` (`User`, `Contra`, `ID_Cliente`) values ('$user','$contra',0)";
        if (mysqli_query($this->_conexion, $this->_query) === TRUE) {
             echo "Usuario agregado exitosamente"; 
          
          } else {
            echo "Error: " . $this->_query. "<br>";
        }
    }

    function CreateAdmin($user,$contra,$tipoUsuario){
        $this->_query = "INSERT INTO `usuarios` (`User`, `Contra`, `ID_Cliente`) values ('$user','$contra',1)";
        if (mysqli_query($this->_conexion, $this->_query) === TRUE) {
             echo "Admin agregado exitosamente"; 
          
          } else {
            echo "Error: " . $this->_query. "<br>";
        }
    }

    function InsertVehiculos(Vehiculo $obj){
        $result = false;
        if($obj){
            $this->_query = "INSERT INTO automoviles (marca, modelo, color, precio, categoria, ano, imagen) VALUES ('$obj->marca','$obj->modelo','
            $obj->color','$obj->precio','$obj->categoria','$obj->ano','$obj->imagen')";
            if($this->ExecuteQuery() > 0) $result = true;
        }
        return $result;
    }


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

    private function ExecuteQuery(){
        $rows = 0;
        if($this->_query == "") return $rows;
        mysqli_query($this->_conexion, $this->_query);
        $rows = mysqli_affected_rows($this->_conexion);
        if($rows == 0)
            $this->_error = mysqli_error($this->_conexion);
        return $rows;
    }
} 
?>


