<?php 
    include('includes/db.php');

    $sql = "select * from personas";
    
    $result = DB::query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<center> <h2>LISTADO DE PERSONAS </h3></center>
</head>
<body>
    <div>
         <a href="crear.php">NUEVO INGRESO</a>
    </div>
        <table style="width: 100%; border: 1px solid black">
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>EMAIL</td>
            </tr>
            
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre'] ?></td>
                    <td><?= $mostrar['email'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $mostrar['id']?>">EDITAR</a>
                        <a href="">ELIMINAR</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div>
         <a href="crear.php">NUEVO INGRESO</a>
    </div>
</body>
</html>