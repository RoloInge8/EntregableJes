<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Categorias</h1>
        <hr>
        <form action="index.php?accion=guardarcategoria" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <select name="cbxIdFam" id="cbxIdFam">
                <option>Seleccione Familia</option>
                <?php
                    foreach($familias as $fam){
                ?>
                <option value="<?=$fam->getIdfamilia()?>"> <?=$fam->getNombre()?> </option>
                <?php
                    }
                ?>
            </select><br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>