<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){

        $id = $_POST['id'];
        $pr = $_POST['province'];
        $st = $_POST['start'];
        $fi = $_POST['finish'];
        $in = $_POST['info'];


        $query = "INSERT INTO tb_provinsi VALUES(null, '$id', '$pr','$st','$fi','$in')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: provinsi.php"); 
        } else {
            echo $query;
        } }

        else if($_POST['aksi'] == "edit"){

            $no = $_POST['no'];
            $id = $_POST['id'];
            $pr = $_POST['province'];
            $st = $_POST['start'];
            $fi = $_POST['finish'];
            $in = $_POST['info'];

            $query = "UPDATE tb_provinsi SET id='$id', province='$pr', start='$st', finish='$fi', info='$in' WHERE no='$no';";

            $sql = mysqli_query($conn, $query);
            header("location: provinsi.php");

        }
}

    if(isset($_GET['hapus'])){

    $no = $_GET['hapus'];
    $query = "DELETE FROM tb_provinsi WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: provinsi.php"); 
    } else {
        echo $query;
    }

            //echo "Delete Data <a href='index.php'>[Home]</a>";
        }    
?>