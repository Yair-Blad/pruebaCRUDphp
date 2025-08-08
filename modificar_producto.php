<?php
include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query(" select * from productos where id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
            <h5 class="text-center alert alert-secondary">Modificar de producto</h5>
            <?php
            while($datos=$sql->fetch_object()){?>
                <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Producto</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" value="<?= $datos->precio?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Descripccion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion?>">
            </div>
            <?php }
            ?>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
        </form>
</body>
</html>