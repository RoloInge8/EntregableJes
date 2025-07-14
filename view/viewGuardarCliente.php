<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Insercion de clientes</h1>
        <hr>
        <form action="index.php?accion=guardarcliente" method="post">
            <input type="text" name="txtNom" placeHolder="Nombres">
            <input type="text" name="txtApe" placeHolder="Apellidos">
            <input type="text" name="txtEma" placeHolder="Email">
            <input type="text" name="txtDni" placeHolder="Dni">

            <input type="submit" value="Guardar">
        </form>
    </div>
    
</body>
</html>