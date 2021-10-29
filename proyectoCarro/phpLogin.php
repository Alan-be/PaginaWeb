<?php
    
    if  (isset($_POST['password']) && isset($_POST['name'])){
                    require_once "model/Usuario.php";
                    require_once "bd/MyQuery.php";
                    session_start();
                    ini_set("display_errors",0);
                    $query = new MyQuery();
                    $query->_construct();
                    $auth = $query->logInUsuarios($_POST['name'],$_POST['password']);
                    if (is_null($auth)) {
                        echo("Error en los datos");
                        echo($_POST['name']);
                        echo($_POST['password']);
                    }else{
                        $_SESSION['usuario'] = $auth;

                        print_r($auth);
                        
                        $var2=$query->logInUsuarios1($_POST['name'],$_POST['password']);
                        echo $var2[0]["ID_Cliente"];
                        $var3=  $var2[0]["ID_Cliente"];
                        

                        if($var3==1){
                        
                            header("Location: http://localhost/paw221_2/proyectoCarro/faq.php");
                        }
                        else{
                            
                            header("Location: http://localhost/paw221_2/proyectoCarro/index.php");
                        }
                        
                    }
        }
?> 


