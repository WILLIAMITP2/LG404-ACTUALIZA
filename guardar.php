<?php 
    include('includes/db.php');

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    header('Location: index.php');
    if(isset($id) == false){
        $sql = "insert into personas(nombre,email)values('$nombre', '$email')"; 
    }else{
        $sql = "UPDATE personas set nombre='$nombre', email='$email' WHERE id='$id'";
    }

    DB::query($sql);
?>