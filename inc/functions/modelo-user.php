<?php
include_once 'conexion.php';

/* Agregar Usuario */
if($_POST['accion'] === 'agregar'){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    
    try{
        $opciones = array(
            'cost' => 12
        );
        $con = password_hash($contra, PASSWORD_BCRYPT, $opciones);
        $stmt = $conn -> prepare(" INSERT INTO usuarios (US_Usuario, US_Nombre, US_Pass) VALUES (?, ?, ?); ");
        $stmt -> bind_param("sss", $usuario, $nombre, $con);
        
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Agregad@ exitosamente',
                'icon' => 'success',
                'text' => 'Se agrego correctamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No agregad@ exitosamente',
                'icon' => 'error',
                'text' => 'No se agrego'
            );
        }
    } catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}

/* Editar Usuario */
if($_POST['accion'] === 'editar'){
    $id = (int) $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    try{
        if($contra === ''){
            $stmt = $conn -> prepare(" UPDATE usuarios SET US_Usuario = ?, US_Nombre = ? WHERE US_Id = ?; ");
            $stmt -> bind_param("ssi", $usuario, $nombre, $id);
        } else {
            $opciones = array(
                'cost' => 12
            );
            $con = password_hash($contra, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn -> prepare(" UPDATE usuarios SET US_Usuario = ?, US_Nombre = ?, US_Pass = ? WHERE US_Id = ?; ");
            $stmt -> bind_param("sssi", $usuario, $nombre, $con, $id);
        }
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Actualizado exitosamente',
                'icon' => 'success',
                'text' => 'Se actualizo correctamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No actualizo exitosamente',
                'icon' => 'error',
                'text' => 'No se actualizado'
            );
        }
    } catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}

/* Eliminar Usuario */
if($_POST['accion'] === 'eliminar'){
    $id = (int) $_POST['id'];
    try{
        $stmt = $conn -> prepare(" DELETE FROM usuarios WHERE US_Id = ?; ");
        $stmt -> bind_param("i", $id);
        $stmt -> execute();
        if($stmt -> affected_rows){
            $respuesta = array(
                'title' => 'Eliminado exitosamente',
                'icon' => 'success',
                'text' => 'Se elimino correctamente'
            );
        } else {
            $respuesta = array(
                'title' => 'No elimino exitosamente',
                'icon' => 'error',
                'text' => 'No eliminado'
            );
        }
    } catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
    die(json_encode($respuesta));
}


?>