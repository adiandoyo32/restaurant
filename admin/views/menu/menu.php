<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menu</title>
  <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="../../dist/css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php
    session_start();
  ?>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">User Info</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-3"></i><?php echo $_SESSION['username']; ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-cog mr-3"></i><?php echo $_SESSION['role']; ?>
          </a>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item dropdown-footer" data-toggle="modal" data-target="#logoutModal">Logout</button>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/bakso-logo.png" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Bakso Mas Ari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item mt-3">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../bahan/bahan.php" class="nav-link">
              <i class="nav-icon fas fa-egg"></i>
              <p>
                Ingredient
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../meja/meja.php" class="nav-link">
              <i class="nav-icon fas fa-chair"></i>
              <p>
                Table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../penjualan/penjualan.php" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Transaction
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../user/user.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Menu</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="table-menu" class="table table-hover table-sm text-center w-100">
                  <thead>
                    <button class="btn btn-info mb-3" data-toggle="modal" data-target="#add-menu-modal">
                    <i class="fa fa-plus mr-2"></i>Create</button>
                    <tr>
                      <th scope="col">#</th>
                      <!-- <th scope="col" width="3%">Number</th> -->
                      <th scope="col" width="14%">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col" width="10%">Description</th>
                      <th scope="col">Category</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status</th>
                      <th scope="col">Sequence</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-menu-body"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="add-menu-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="add-menu-form" id="add-menu-form" encypte="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for=nama_menu" class="col-form-label">Menu Name</label>
            <input type="text" class="form-control form-control-sm" name="nama_menu" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="decs">Description</label>
            <textarea class="form-control" name="desc" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="role" class="col-form-label">Category</label>
            <select class="form-control form-control-sm" name="jenis">
              <option value="bakso" selected="">Bakso</option>
              <option value="minuman">Minuman</option>
              <option value="snack">Snack</option>
            </select>
          </div>
          <div class="form-group">
            <label for="harga" class="col-form-label">Sequence</label>
            <input type="text" class="form-control form-control-sm" name="sequence" autocomplete="off">
          </div>   
          <div class="form-group">
            <label for="harga" class="col-form-label">Price</label>
            <input type="text" class="form-control form-control-sm" name="harga" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="imgInput form-control-file" id="imgInput" name="image" autocomplete="off"/>
            <label class="imgError error" id="imgError" style="display:none"></label>
            <img src="" id="upImg" class="upImg img-thumbnail" alt="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn-add-menu btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit-menu-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-menu-form" encypte="multipart/form-data">
          <input type="hidden" name="id" autocomplete="off">
          <div class="form-group">
            <label for=nama_menu" class="col-form-label">Menu Name</label>
            <input type="text" class="form-control form-control-sm" name="nama_menu" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="decs">Description</label>
            <textarea class="form-control" name="desc" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="jenis" class="col-form-label">Category</label>
            <select class="form-control form-control-sm" name="jenis">
              <option value="bakso" selected="">Bakso</option>
              <option value="Minuman">Minuman</option>
              <option value="snack">Snack</option>
            </select>
          </div>        
          <div class="form-group">
            <label for="harga" class="col-form-label">Price</label>
            <input type="text" class="form-control form-control-sm" name="harga" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="role" class="col-form-label">Status</label>
            <select class="form-control form-control-sm" name="ready">
              <option value="1">Ready</option>
              <option value="0">Not ready</option>
            </select>
          </div>
          <div class="form-group">
            <label for="harga" class="col-form-label">Sequence</label>
            <input type="text" class="form-control form-control-sm" name="sequence" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="image" class="col-form-label d-block">Image</label>
            <img src="" id="upImg" class="upImg img-thumbnail" alt="">
            <input type="file" class="imgInput form-control-file" name="image" autocomplete="off"/>
            <label class="imgError error" id="imgError" style="display:none"></label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn-edit-menu btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../../../logout.php" method="post">
        <div class="modal-body">
          Are you sure you want to Logout?
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Logout</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/jquery.validate.min.js"></script>
<script src="../../dist/js/sweetalert2@9.js"></script>
<script src="../../dist/js/app.js"></script>
</body>
</html>
