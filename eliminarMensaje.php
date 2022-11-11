<?php
$id = $_GET['id'];
include('db.php');

$query = "DELETE FROM `tabla` WHERE id = $id";
$result = mysqli_query($conn,$query);


if(!$result){
    die("Fallo la Query");
}else{
    echo "Hemos Eliminado el mensaje correctamente.";
}

?>