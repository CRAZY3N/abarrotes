<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bodega</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper"><!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Inicio</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">La Sociedad</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-chart-line nav-icon"></i>
            <p>Gráficas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../index.html" class="nav-link">
                <i class="fas fa-chart-bar nav-icon"></i>
                <p>Gráficas</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">USUARIOS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>Usuarios
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="list-user" class="nav-link">
                <i class="nav-icon far fa-eye" ></i>
                <p>Ver Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Agregar Usuarios</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">PRODUCTOS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="fas fa-box nav-icon"></i>
            <p>Productos
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../mailbox/mailbox.html" class="nav-link">
                <i class="nav-icon far fa-eye" ></i>
                <p>Ver Productos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="agregar-prod" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Agregar Productos</p>
              </a>
            </li>
          </ul>
        </li>
            
          <li class="nav-header">PROVEEDORES</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>Proveedores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-eye" ></i>
                  <p>Ver Proveedores</p>
                </a>
              </li>
              <li class="nav-item"> 
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Agregar Proveedor</p>
                </a>
              </li>
            </ul>
          </li>

            
          <li class="nav-header">COMPRAS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>Compras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-eye" ></i>
                  <p>Ver Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Agregar Compras</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">VENTAS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Agregar Ventas</p>
                </a>
              </li>
            </ul>
          </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                            <tr>
                <td>Coca-cola 600ml</td>
                <td>$ 12.5</td>
                <td>
                   <a href="editar-prod?id=5" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="5" data-id="5" data-type="producto" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
                          <tr>
                <td>Coca-cola 1lt</td>
                <td>$ 18</td>
                <td>
                   <a href="editar-prod?id=6" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="6" data-id="6" data-type="producto" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
                          <tr>
                <td>Azucar</td>
                <td>$ 32.4</td>
                <td>
                   <a href="editar-prod?id=7" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="7" data-id="7" data-type="producto" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
                          <tr>
                <td>Huevo</td>
                <td>$ 31.2</td>
                <td>
                   <a href="editar-prod?id=8" class="btn btn-secondary btn-lg margin">
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                   <a href="#" id="8" data-id="8" data-type="producto" class="borrar btn btn-danger btn-lg margin">
                      <i class="fas fa-trash"></i>
                   </a>
                </td>
             </tr> 
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

</div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0 - em
    </div>
    <strong>Copyright &copy; 2006-2021 <a href="#">La Sociedad</a>.</strong> All rights reserved. <p>Hecho por: <strong> <a target="_blank" href="https://emmdeveloper.netlify.app">EmmKall</a></strong></p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Main Scripts -->
<script src="js/app.js"></script>
<script src="js/operaciones.js"></script>

