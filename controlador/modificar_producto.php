<?php
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and!empty($_POST["cantidad"]) and !empty($_POST["descripcion"])){
            $id= $_POST["id"];
            $nombre=$_POST["nombre"];
            $precio=$_POST["precio"];
            $cantidad=$_POST["cantidad"];
            $descripcion=$_POST["descripcion"];
            $sql=$conexion->query("update productos set nombre='$nombre', precio='$precio', cantidad='$cantidad', descripcion='$descripcion' where id=$id");
            if ($sql == 1) {
                header("location:index.php");
            } else {
                echo "<div class='alert alert-danger'>Error al modificar los productos</div>";
            }
            
        }else{
            echo "<div class='alert alert-warning'>Campos vacios</div>";
        }
    }
?>