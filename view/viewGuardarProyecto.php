<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        h1 { color: #333; }
        form { background: #f9f9f9; padding: 20px; border-radius: 5px; }
        input, select { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; }
        input[type="submit"] { background: #4CAF50; color: white; cursor: pointer; }
        input[type="submit"]:hover { background: #45a049; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            include 'menu.php';
        ?>
        <h1>Insertar Proyecto</h1>
        <hr>
        <form action="index.php?accion=guardarproyecto" method="post">
            <label for="txtNom">Nombre del Proyecto:</label>
            <input type="text" name="txtNom" id="txtNom" placeholder="Ingrese el nombre del proyecto" required>
            
            <label for="txtDesc">Descripción:</label>
            <input type="text" name="txtDesc" id="txtDesc" placeholder="Ingrese la descripción" required>
            
            <label for="txtFechaAsignacion">Fecha de Asignación:</label>
            <input type="date" name="txtFechaAsignacion" id="txtFechaAsignacion" required>
            
            <label for="txtFechaEntrega">Fecha de Entrega:</label>
            <input type="date" name="txtFechaEntrega" id="txtFechaEntrega" required>
            
            <label for="cbxIdCliente">Cliente:</label>
            <select name="cbxIdCliente" id="cbxIdCliente" required>
                <option value="">Seleccione un Cliente</option>
                <?php
                    foreach($clientes as $cli){
                ?>
                <option value="<?=$cli->getIdcliente()?>"><?=$cli->getNombres()?> <?=$cli->getApellidos()?></option>
                <?php
                    }
                ?>
            </select><br><br>
            
            <input type="submit" value="Guardar Proyecto">
        </form>
    </div>
</body>
</html>