<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer crud en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta;
        }
    </script>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_productos.php";
    ?>
    <div class="containder-fluid row">
        <form class="col-4 p-3" method="POST">
            <h5 class="text-center alert alert-secondary">Registro de producto</h5>
            <?php
                
                include "controlador/registro_producto.php";
            ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Producto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Descripccion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query("select * from productos");
                        while($datos= $sql->fetch_object()){?>
                            <tr>
                                <td><?= $datos-> id ?></td>
                                <td><?= $datos-> nombre ?></td>
                                <td><?= $datos-> precio ?></td>
                                <td><?= $datos-> cantidad ?></td>
                                <td><?= $datos-> descripcion ?></td>
                                <td>
                                    <a href="modificar_producto.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>