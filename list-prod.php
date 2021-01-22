<?php
    include 'inc/templates/header.php';
    include 'inc/templates/nav.php';
    include 'inc/templates/lateral.php';
?>
  
  <div class="card">
   <div class="card-header">
      <h3 class="card-title">Lista de Productos</h3>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="tabla" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Producto</th>
               <th>Precio</th>
               <th>Acciones</th>
            </tr>
         </thead>

         <tbody>
            <?php
            try{
                include_once 'inc/functions/conexion.php';
                $sql = " SELECT productos.Prod_Id, productos.Prod_Descrip, productos.Prod_Precio ";
                $sql .= " FROM inventario ";
                $sql .= " JOIN productos ON inventario.Inv_ProdId = productos.Prod_Id ";
                $resultado = $conn -> query($sql);
            } catch(Exception $e){
                $error = 'Error: ' . $e -> getMessage();
                echo $error;
            }
            while($prod = $resultado -> fetch_assoc()){ ?>
                <tr>
                <td><?php echo $prod['Prod_Descrip'];?></td>
                <td>$ <?php echo (float) $prod['Prod_Precio'];?></td>
                <td>
                   <a href="editar-prod?id=<?php echo $prod['Prod_Id'];?>" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="<?php echo $prod['Prod_Id'];?>" data-id="<?php echo $prod['Prod_Id'];?>" data-type="producto" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
          <?php  }
             ?>
         </tbody>

         <tfoot>
            <tr>
               <th>Producto</th>
               <th>Precio</th>
               <th>Acciones</th>
            </tr>
         </tfoot>
      </table>
   </div>
   <!-- /.card-body -->
</div>


<?php include 'inc/templates/footer.php'; ?>