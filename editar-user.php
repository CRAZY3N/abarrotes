<?php
    include 'inc/templates/header.php';
    include 'inc/templates/nav.php';
    include 'inc/templates/lateral.php';
    $id = $_GET['id'];
?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                 <h3 class="card-title">Editar Usuario</h3>
            </div>
            <!-- /.card-header -->
            <?php
               try{
                   include_once 'inc/functions/conexion.php';
                    $sql = " SELECT US_Usuario, US_Nombre FROM usuarios WHERE US_Id = '$id'; ";
                    $resultado = $conn -> query($sql);
                    $user = $resultado -> fetch_assoc();
               }catch(Exception $e){
                   $error = 'Error: ' . $e -> getMessage();
                   echo $error;
               }
            ?>
            <!-- form start -->
            <form role="form" method="POST" action="inc/functions/modelo-user" name="agregar" id="agregar">
                <div class="card-body row">
                <div class="form-group col-sm-6">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" value="<?php echo $user['US_Nombre'];?>" name="nombre" required id="nombre" placeholder="Ingresa nombre de usuario">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" value="<?php echo $user['US_Usuario'];?>" name="usuario" required id="usuario" placeholder="Ingrese usuario">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="contra">Contraseña</label>
                        <input type="password" class="form-control" name="contra" id="contra" placeholder="Contraseña">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="ccontra">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="ccontra" id="ccontra" placeholder="Repetir Contraseña">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-secondary">
                    <input type="hidden" id="pag" name="pag" value="list-user.php">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="accion" value="editar">
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <a href="list-user" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>


            

<!-- Footer -->
<?php include 'inc/templates/footer.php'; ?>