
<?php
    include 'inc/templates/header.php';
    include 'inc/templates/nav.php';
    include 'inc/templates/lateral.php';
?>

<div class="card">
   <div class="card-header">
      <h3 class="card-title">Lista de Usuarios</h3>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="tabla" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nombre</th>
               <th>Usuario</th>
               <th>Acciones</th>
            </tr>
         </thead>

         <tbody>
            <?php
            try{
                include_once 'inc/functions/conexion.php';
                $sql = " SELECT usuarios.US_Id, usuarios.US_Usuario, usuarios.US_Nombre ";
                $sql .= " FROM usuarios; ";
                $resultado = $conn -> query($sql);
            } catch(Exception $e){
                $error = 'Error: ' . $e -> getMessage();
                echo $error;
            }
            while($user = $resultado -> fetch_assoc()){ ?>
            <tr>
                <td><?php echo $user['US_Nombre'];?></td>
                <td><?php echo $user['US_Usuario'];?></td>
                <td>
                   <a href="editar-user?id=<?php echo $user['US_Id'];?>" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="<?php echo $user['US_Id'];?>" data-id="<?php echo $user['US_Id'];?>" data-type="usuario" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
          <?php  }
             ?>
         </tbody>

         <tfoot>
            <tr>
               <th>Usuario</th>
               <th>Nombre</th>
               <th>Acciones</th>
            </tr>
         </tfoot>
      </table>
   </div>
   <!-- /.card-body -->
</div>

<?php include 'inc/templates/footer.php'; ?>