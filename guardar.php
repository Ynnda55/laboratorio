<?php  
require 'conexion.php'; 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido']; 
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$examen = $_POST['examen']; 

$insertar = "INSERT INTO ordenes VALUES ('$nombre','$apellido','$cedula','$email','$examen')";

$query = mysqli_query($conectar, $insertar); 

if($query){
    echo "<script> alert('Datos Guardados'); 
    location.href ='index.php'; 
    </script>"; 
} else{
    echo "<script> alert('No se pudieron Guardar los datos'); 
    location.href ='index.php'; 
    </script>";
}

?>