<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $no = '';
    $id = '';
    $un = '';
    $na = '';
    $em = '';
    $ph = '';
    $ad = '';

    if(isset($_GET['ubah'])){
    $no = $_GET['ubah'];

    $query = "SELECT * FROM tb_user WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $id = $result['id'];
    $un = $result['username'];
    $na = $result['name'];
    $em = $result['email'];
    $ph = $result['telephone'];
    $ad = $result['address'];


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
          <a class="nav-link active" href="user.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="swasta.php">Swasta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="provinsi.php">Provinsi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <form method="POST" action="prosesuser.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $no;?>" name="no">
    <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" id="inputid" class="form-control" placeholder="Input ID" value="<?php echo $id;?>">
                </div>
        </div>
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="inputusername" class="form-control" placeholder="Input Username" value="<?php echo $un;?>">
                </div>
        </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="inputname" class="form-control" placeholder="Input Name" value="<?php echo $na;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" name="email" id="inputemail" class="form-control" placeholder="Input Email" value="<?php echo $em;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input type="text" name="telephone" id="inputphone" class="form-control" placeholder="Input Phone Number" value="<?php echo $ph;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" name="address" id="inputaddress" class="form-control" placeholder="Input Address" value="<?php echo $ad;?>">
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
        <a href="user.php" class="btn btn-danger" type="button">Cancel</a>
        </div>
    </div>
    </form>

</div>

</div>
</div>
</body>
</html>