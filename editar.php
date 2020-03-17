<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from personas where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
        echo "El usuario no existe";
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="guardar.php" method="post">
        <div>
        <center> <h2>EDITAR USUARIO </h3></center>
        </div>
        <input type="hidden" name="id" value="<?= $persona->id ?>">
        <div class="form-group">
            <label for="">NOMBRE</label>
            <input type="text" name="nombre" value="<?= $persona->nombre ?>">
        </div>
        <div class="form-group">
            <label for="">EMAIL</label>
            <input type="text" name="email" value="<?= $persona->email ?>">
        </div>
        <div>
            <button type="submit">GUARDAR</button>
            <a href="index.php">VOLVER</a>
        </div>
    </form>
</body>
</html>