<?php
include("conexion.php");

$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$correo = $_POST['correo'];
$passwd = $_POST['passwd'];
$passwr = $_POST['paswr'];


$query1 = "INSERT INTO Inversionista(apellidop, apellidom, correo, contrasena, contrasenna)
            VALUES('$ApellidoP', '$ApellidoM', '$correo', '$passwd', '$paswsr')";
  $results1 = mysqli_query($conexion, $query1);

echo "Si salio we :V XD";

 ?>
