<?php
include_once 'conexion.php';

/* Agregar Producto */
If($_POST['accion'] === 'agregar'){
    $prod = $_POST['prod'];
    $precio = (double) $_POST['precio'];
    try{
        $stmt = $conn -> prepare (" INSERT INTO productos (Prod_Descrip, Prod_Precio) VALUES (?, ?); ");
        $stmt -> bind_param("sd", $prod, $precio);
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Agregad@',
                'icon' => 'success',
                'text' => 'Agregad@ exitosamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No agregad@',
                'icon' => 'error',
                'text' => 'No se agregad@'
            );
        }
    }catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}

/* Editar Producto */
If($_POST['accion'] === 'editar'){
    $id = (int) $_POST['id'];
    $prod = $_POST['prod'];
    $precio = (double) $_POST['precio'];
    try{
        $stmt = $conn -> prepare (" UPDATE productos SET Prod_Descrip = ?, Prod_Precio = ? WHERE Prod_Id = ?; ");
        $stmt -> bind_param("sdi", $prod, $precio, $id);
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Editad@',
                'icon' => 'success',
                'text' => 'Editad@ exitosamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No editad@',
                'icon' => 'error',
                'text' => 'No se edit@'
            );
        }
    }catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}

/* Eliminar Producto */
If($_POST['accion'] === 'eliminar'){
    $id = (int) $_POST['id'];
    try{
        $stmt = $conn -> prepare (" DELETE FROM productos WHERE Prod_Id = ?; ");
        $stmt -> bind_param("i", $id);
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Eliminad@',
                'icon' => 'success',
                'text' => 'eliminad@ exitosamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No eliminad@',
                'icon' => 'error',
                'text' => 'No se eliminad@'
            );
        }
    }catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}
?>