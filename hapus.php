<?php
    include 'koneksi.php';


    $id_siswa = $_GET['id_siswa'];

    $sql = "DELETE FROM datasiswa WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: datasiswa.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
?>