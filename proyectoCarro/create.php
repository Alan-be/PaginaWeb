<?php
 /* include 'bd/MyQuery.php';  */
 include 'bd/connect.php'; 
/* require_once "model/Vehiculo.php"; */





$Marca = $_POST['marca'];
$Modelo = $_POST['modelo'];
$Color = $_POST['color'];
$Precio = $_POST['precio'];
$Categoria = $_POST['categoria'];
$Ano = $_POST['ano'];
$Imagen = $_POST['imagen'];

$SQL_CREATE = "INSERT INTO 'automoviles' (marca, modelo, color, precio, categoria, ano, imagen) VALUES ('$Marca',
'$Modelo, '$Color', '$Precio', '$Categoria', '$Ano', '$Imagen')";
mysqli_query($conn,$SQL_CREATE);
echo $SQL_CREATE;


?>