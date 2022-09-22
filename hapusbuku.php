<?php
    include 'koneksi.php';


    $id_buku = $_GET['id_buku'];

    $sql = "DELETE FROM databuku WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: databuku.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
?>