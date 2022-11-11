<?php

include('db.php');

$nombre = $_POST['nombre'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO `tabla`(`name`, `last_name`, `email`, `phone`, `mensaje`) VALUES ('$nombre','$lastname','$email','$phone','$mensaje')";
$result = mysqli_query($conn, $query);

if(!$result){
    die("fallo la Query");
}else{
echo "Hola " . $nombre . " ". $lastname.", hemos recibido tu mensaje, nos comunicaremos contigo al mail " . $email . ", o al tel " . $phone . ". Gracias.";
}

?>