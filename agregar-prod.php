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
                 <h3 class="card-title">Agregar Producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="inc/functions/modelo-prod" name="agregar" id="agregar">
                <div class="card-body row">
                    <div class="form-group col-sm-8">
                        <label for="prod">Descripción de producto:</label>
                        <input type="text" class="form-control" name="prod" required id="prod" placeholder="Ingresa la descripción del producto">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" required id="precio" placeholder="Precio">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-secondary">
                    <input type="hidden" id="pag" name="pag" value="list-prod.php">
                    <input type="hidden" name="accion" value="agregar">
                    <input type="submit" value="Agregar" class="btn btn-primary">
                    <a href="list-prod" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>


            

<!-- Footer -->
<?php include 'inc/templates/footer.php'; ?>