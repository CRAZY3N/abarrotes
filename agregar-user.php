<?php
    include 'inc/templates/header.php';
    include 'inc/templates/nav.php';
    include 'inc/templates/lateral.php';
?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                 <h3 class="card-title">Agregar Usuario</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="inc/functions/modelo-user" name="agregar" id="agregar">
                <div class="card-body row">
                <div class="form-group col-sm-6">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required id="nombre" placeholder="Ingresa nombre de usuario">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" required id="usuario" placeholder="Ingrese usuario">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="contra">Contraseña</label>
                        <input type="password" class="form-control" name="contra" required id="contra" placeholder="Contraseña">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="ccontra">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="ccontra" required id="ccontra" placeholder="Repetir Contraseña">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-secondary">
                    <input type="hidden" id="pag" name="pag" value="list-user.php">
                    <input type="hidden" name="accion" value="agregar">
                    <input type="submit" value="Agregar" class="btn btn-primary">
                    <a href="list-user" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>


            

<!-- Footer -->
<?php include 'inc/templates/footer.php'; ?>