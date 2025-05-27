<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>LISTA FAMILIAS</h1>
        <hr>
        <a href="index.php?accion=guardarfamilia">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($familias as $fam){
                ?>
                <tr>
                    <td><?=$fam->getIdfamilia()?></td>
                    <td><?=$fam->getNombre()?></td>
                    <td><?=$fam->getDescripcion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>