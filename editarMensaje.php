<?php

include('db.php');

$id = $_GET['id'];

$nombre = $_POST['nombre'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$respuesta = $_POST['respuesta'];

$query = "UPDATE `tabla` SET `name`= '$nombre', `last_name`= '$lastname', `email` = '$email', `phone`='$phone',`respondido` = 1, `respuesta` = '$respuesta' WHERE id =$id";
$result = mysqli_query($conn,$query);

if(!$result){
    die("fallo la Query");
}else{
echo "Hola " . $nombre . " ". $lastname.", hemos respondido tu mensaje, enviamos una copia al mail " . $email . ", o al tel " . $phone . ". Gracias.";
}

?>