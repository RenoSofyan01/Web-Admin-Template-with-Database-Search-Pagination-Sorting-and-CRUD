<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){

        $id = $_POST['id'];
        $cn = $_POST['companyname'];
        $pt = $_POST['partnershiptype'];
        $co = $_POST['contact'];


        $query = "INSERT INTO tb_swasta VALUES(null, '$id', '$cn','$pt','$co')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: swasta.php"); 
        } else {
            echo $query;
        } }

        else if($_POST['aksi'] == "edit"){

            $no = $_POST['no'];
            $id = $_POST['id'];
            $cn = $_POST['companyname'];
            $pt = $_POST['partnershiptype'];
            $co = $_POST['contact'];

            $query = "UPDATE tb_swasta SET id='$id', companyname='$cn', partnershiptype='$pt', contact='$co' WHERE no='$no';";

            $sql = mysqli_query($conn, $query);
            header("location: swasta.php");

        }
}

    if(isset($_GET['hapus'])){

    $no = $_GET['hapus'];
    $query = "DELETE FROM tb_swasta WHERE no = '$no';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: swasta.php"); 
    } else {
        echo $query;
    }

            //echo "Delete Data <a href='index.php'>[Home]</a>";
        }    
?>