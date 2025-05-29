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
        <h1>Lista de Categorias</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>IdFam</td>
                    <td>Borrar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($categorias as $cat){
                ?>
                <tr>
                    <td><?=$cat->getIdcategoria()?></td>
                    <td><?=$cat->getNombre()?></td>
                    <td><?=$cat->getIdfamilia()?></td>
                    <td><a href="">Borrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>