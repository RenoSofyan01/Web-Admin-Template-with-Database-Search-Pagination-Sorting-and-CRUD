<?php
include 'koneksi.php';

if(isset($_POST['aksiuser'])){
    if($_POST['aksiuser'] == "add"){

        $id = $_POST['id'];
        $un = $_POST['username'];
        $fn = $_POST['fullname'];
        $em = $_POST['email'];
        $ph = $_POST['telephone'];

        $query = "INSERT INTO tb_agriculate VALUES(null, '$id', '$un','$fn','$em','$ph')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php"); 
        } else {
            echo $query;
        } }

        else if($_POST['aksiuser'] == "edit"){

            $no = $_POST['no'];
            $id = $_POST['id'];
            $un = $_POST['username'];
            $fn = $_POST['fullname'];
            $em = $_POST['email'];
            $ph = $_POST['telephone'];

            $query = "UPDATE tb_agriculate SET id='$id', username='$un', fullname='$fn', email='$em', telephone='$ph' WHERE no='$no';";

            $sql = mysqli_query($conn, $query);
            header("location: index.php");

        }
}

    if(isset($_GET['hapus'])){

    $no = $_GET['hapus'];
    $query = "DELETE FROM tb_agriculate WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: index.php"); 
    } else {
        echo $query;
    }

            //echo "Delete Data <a href='index.php'>[Home]</a>";
        }    
?>