<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        h1 { color: #333; }
        .btn-nuevo { 
            background: #4CAF50; 
            color: white; 
            padding: 10px 20px; 
            text-decoration: none; 
            border-radius: 3px; 
            display: inline-block; 
            margin-bottom: 20px; 
        }
        .btn-nuevo:hover { background: #45a049; }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 12px; 
            text-align: left; 
        }
        th { 
            background-color: #f2f2f2; 
            font-weight: bold; 
        }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f5f5f5; }
        .btn-borrar { 
            background: #f44336; 
`            color: white; 
            padding: 5px 10px; 
            text-decoration: none; 
            border-radius: 3px; 
        }
        .btn-borrar:hover { background: #da190b; }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            include 'menu.php';
        ?>
        <h1>Lista de Proyectos</h1>
        <hr>
        <a href="index.php?accion=guardarproyecto" class="btn-nuevo">Crear Nuevo Proyecto</a>
        
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha Entrega</th>
                    <th>Fecha Asignación</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($proyectos as $pro){
                ?>
                <tr>
                    <td><?=$pro->getIdproyecto()?></td>
                    <td><?=$pro->getNombre()?></td>
                    <td><?=$pro->getDescripcion()?></td>
                    <td><?=$pro->getFechaEntrega()?></td>
                    <td><?=$pro->getFechaAsignacion()?></td>
                    <td><?=$pro->getNombreCliente()?></td>
                    <td><a href="index.php?accion=borrarproyecto&idproyecto=<?=$pro->getIdproyecto()?>" class="btn-borrar" onclick="return confirm('¿Está seguro de que desea borrar este proyecto?')">Borrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>