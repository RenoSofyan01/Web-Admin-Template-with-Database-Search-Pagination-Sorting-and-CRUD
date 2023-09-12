<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $no = '';
    $id = '';
    $cn = '';
    $pt = '';
    $co = '';

    if(isset($_GET['ubah'])){
    $no = $_GET['ubah'];

    $query = "SELECT * FROM tb_swasta WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $id = $result['id'];
    $cn = $result['companyname'];
    $pt = $result['partnershiptype'];
    $co = $result['contact'];


    //var_dump($result);
    //die();
    }
?>

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
</head>
<body>
<nav class="navbar" style="background-color: #ffbb7b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="swasta.php">Swasta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="provinsi.php">Provinsi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <form method="POST" action="prosesswasta.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $no;?>" name="no">
    <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" id="inputid" class="form-control" placeholder="Input ID" value="<?php echo $id;?>">
                </div>
        </div>
        <div class="mb-3 row">
            <label for="companyname" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="companyname" id="inputcompanyname" class="form-control" placeholder="Input Company Name" value="<?php echo $cn;?>">
                </div>
        </div>
    <div class="mb-3 row">
        <label for="partnershiptype" class="col-sm-2 col-form-label">Fullname</label>
        <div class="col-sm-10">
            <input type="text" name="partnershiptype" id="inputpartnershiptype" class="form-control" placeholder="Input Partnership Type" value="<?php echo $pt;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="contact" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" name="contact" id="inputcontact" class="form-control" placeholder="Input Contact" value="<?php echo $co;?>">
        </div>
    </div>
    <div class="mb-3 row mt-4">
        <div class="col">
        <?php
        if(isset($_GET['ubah'])){
        ?>
            <button class="btn btn-primary me-md-2" type="submit" name="aksi" value="edit">Update</button>
        <?php
        }else {
        ?>
            <button class="btn btn-primary me-md-2" type="submit" name="aksi" value="add"><i class="fa fa-plus" aria-hidden="true">Add</i></button>
        <?php
        }
         
        ?>
        <a href="swasta.php" class="btn btn-danger" type="button">Cancel</a>
        </div>
    </div>
    </form>

</div>

</div>
</div>
</body>
</html>