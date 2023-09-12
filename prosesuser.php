<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){

        $id = $_POST['id'];
        $un = $_POST['username'];
        $na = $_POST['name'];
        $em = $_POST['email'];
        $ph = $_POST['telephone'];
        $ad = $_POST['address'];


        $query = "INSERT INTO tb_user VALUES(null, '$id', '$un','$na','$em','$ph', '$ad')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: user.php"); 
        } else {
            echo $query;
        } }

        else if($_POST['aksi'] == "edit"){

            $no = $_POST['no'];
            $id = $_POST['id'];
            $un = $_POST['username'];
            $na = $_POST['name'];
            $em = $_POST['email'];
            $ph = $_POST['telephone'];
            $ad = $_POST['address'];

            $query = "UPDATE tb_user SET id='$id', username='$un', fullname='$fn', email='$em', telephone='$ph' WHERE no='$no';";

            $sql = mysqli_query($conn, $query);
            header("location: user.php");

        }
}

    if(isset($_GET['hapus'])){

    $no = $_GET['hapus'];
    $query = "DELETE FROM tb_user WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: user.php"); 
    } else {
        echo $query;
    }

            //echo "Delete Data <a href='index.php'>[Home]</a>";
        }    
?>