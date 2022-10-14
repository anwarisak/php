<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("liborery/head.php");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <?php require("liborery/nav.php")?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php require("liborery/sidebar.php")?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Registration form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form method="" action="">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label >fullname</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
                  </div>
                  
                  <div class="form-group">
                    <label >username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                  </div>
                  
                  <div class="form-group">
                    <label >password</label>
                    <input type="number" class="form-control" name="username" placeholder="Enter password">
                  </div>
                  
                  <div class="form-group">
                    <label >email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label >tell</label>
                    <input type="number" class="form-control" name="tell" placeholder="Enter tell">
                  </div>

                  <div class="form-group">
                    <label >Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter date">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="date" class="btn btn-primary">Submit</button>
                </div>

           
              </form>

            </div>
        </div>
        <div class="col-md-2"></div>
        </div>
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require("liborery/footer.php")?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php require("liborery/script.php")?>
</body>
</html>


