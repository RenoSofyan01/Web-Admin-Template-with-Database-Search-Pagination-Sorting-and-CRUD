<?php
include 'koneksi.php';

$query = "SELECT * FROM tb_provinsi;";
$sql = mysqli_query($conn, $query);
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- DataTables JavaScript -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tb').DataTable();
        });
    </script>
</head>

<body>
<div class="collapse text-center" id="navbarToggleExternalContent" style="background-color: #ffbb7b;">
    <div class="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-underline">
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
<nav class="navbar" style="background-color: #ffbb7b;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="kelolaprovinsi.php" class="btn btn-primary me-md-2 mt-4 md-4" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New Data</a>
    </div>
    <div class="table-responsive">
    <table id="tb" class="table table-success table-striped align-middle table-hover" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Province</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th>Info</th>
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
                        echo $result['province'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $result['start'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $result['finish'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $result['info'];
                        ?>
                    </td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="kelolaprovinsi.php?ubah=<?php echo $result['no'];?>" class="btn btn-primary me-md-2" type="button">Edit</a>
                            <a href="prosesprovinsi.php?hapus=<?php echo $result['no'];?>" class="btn btn-danger" onClick="return confirm('Are you sure?')" type="button">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="mb-5"></div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
