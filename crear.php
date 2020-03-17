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
            <h3>CREAR USUARIOS</h1>
        </div>
        <div class="form-group">
            <label for="">NOMBRE</label>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="">EMAIL</label>
            <input type="text" name="email">
        </div>
        <div>
            <button type="submit">GUARDAR</button>
            <a href="index.php">VOLVER</a>
        </div>
    </form>
</body>
</html>