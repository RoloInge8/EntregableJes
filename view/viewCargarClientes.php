<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            include 'menu.php';
        ?>
        <h1>LISTA CLIENTES</h1>
        <hr>
        <a href="index.php?accion=guardarcliente">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($clientes as $cli){
                ?>
                <tr>
                    <td><?=$cli->getIdcliente()?></td>
                    <td><?=$cli->getNombres()?></td>
                    <td><?=$cli->getApellidos()?></td>
                    <td><?=$cli->getEmail()?></td>
                    <td><?=$cli->getDni()?></td>
                    <td><a href="index.php?accion=borrarcliente&idcli=<?=$cli->getIdcliente()?>">Borrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>