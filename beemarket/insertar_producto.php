<?php
include 'php/connection.php';
$conn=conectar();

$pr_nombre=$_POST['pr_nombre'];
$pr_des=$_POST['pr_des'];
$pr_precio=$_POST['pr_precio'];
$pr_ubicacion=$_POST['pr_ubicacion'];
$pr_horario=$_POST['pr_horario'];
$pr_us_id=$_POST['pr_us_id'];

if($pr_nombre == '' || $pr_des == '' || $pr_precio == '' || $pr_ubicacion == '' || $pr_horario == ''){
    echo '
 <script>
     alert("Todos los campos deben llenarse");
     window.location = "nuevo_producto.php";
 </script>
';
exit();
}

$sql="INSERT INTO producto(pr_nombre, pr_des, pr_precio, pr_ubicacion,pr_horario,pr_us_id) VALUES ('$pr_nombre','$pr_des','$pr_precio','$pr_ubicacion', '$pr_horario','$pr_us_id')";


$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}