<?php
  include 'koneksi.php';

  $query  = "SELECT * FROM tb_agriculate;";
  $sql    = mysqli_query($conn, $query);
  $no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- DataTables JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


<script type="text/javascript">
  $(document).ready(function(){
    $('#tb').DataTable();
  });
</script>

</head>

<body  class="hold-transition sidebar-mini layout-fixed">
<div class="collapse text-center" id="navbarToggleExternalContent" style="background-color: blue;">
  <div class="wrapper">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-underline">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Database Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php"  style="color: white;">Database User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="swasta.php" style="color: white;">Database Swasta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="provinsi.php" style="color: white;">Database Provinsi</a>
        </li>
      </ul>
  </div>
</div>
<nav class="navbar" style="background-color: blue;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" style="color: white;" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="kelola.php" class="btn btn-primary me-md-2 mt-4 md-4" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New Data</a>
    </div>
    <div class="table-responsive">
    <table id="tb" class="table table-success table-striped align-middle table-hover"  >
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Username</th>
        <th>fullname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($result = mysqli_fetch_assoc($sql)){
      ?>
          <tr>
            <td>
              <?php
              echo ++$no;
              ?>
            </td>
            <td>
            <?php
              echo $result['id'];
              ?>
            </td>
            <td>
            <?php
              echo $result['username'];
              ?>
            </td>
            <td>
            <?php
              echo $result['fullname'];
              ?>
            </td>
            <td>
            <?php
              echo $result['email'];
              ?>
            </td>
            <td>
            <?php
              echo $result['telephone'];
              ?>
            </td>
            <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="kelola.php?ubah=<?php echo $result['no'];?>" class="btn btn-primary me-md-2" type="button">Edit</a>
                    <a href="proses.php?hapus=<?php echo $result['no'];?>" class="btn btn-danger" onClick="return confirm('Are you sure?')" type="button">Delete</a>
                </div>
            </td>
          </tr>
          <?php
        }
        ?>

    </tbody>
  </table>
</div>
</div >
<div class="mb-5"></div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>