<?php
    include 'inc/templates/header.php';
    include 'inc/templates/nav.php';
    include 'inc/templates/lateral.php';
    $id = $_GET['id'];
    try{
        include_once 'inc/functions/conexion.php';
        $sql = " SELECT productos.Prod_Descrip AS Prod, productos.Prod_Precio AS Precio";
        $sql .= " FROM productos ";
        $sql .= " WHERE productos.Prod_Id = '$id' ";
        $resultado = $conn -> query($sql);
        $prod = $resultado -> fetch_assoc();
    }catch(Exception $e){
        $error = 'Error: ' . $e -> getMessage();
        echo $error;
    }
?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                 <h3 class="card-title">Editar Producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="inc/functions/modelo-prod" name="editar" id="editar">
                <div class="card-body row">
                    <div class="form-group col-sm-8">
                        <label for="prod">Descripción de producto:</label>
                        <input type="text" class="form-control" name="prod" required id="prod" value="<?php echo $prod['Prod'];?>" placeholder="Ingresa la descripción del producto">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="precio">Password</label>
                        <input type="text" class="form-control" name="precio" value="<?php echo $prod['Precio'];?>" required id="precio" placeholder="Precio">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-secondary">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" id="pag" name="pag" value="list-prod.php">
                    <input type="hidden" name="accion" value="editar">
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <a href="list-prod" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>


            

<!-- Footer -->
<?php include 'inc/templates/footer.php'; ?>