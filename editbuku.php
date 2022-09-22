<?php
    include 'koneksi.php';

    if (isset($_POST['simpanbuku'])){
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $jenis = $_POST['jenis'];
        $tahun_terbit = $_POST['tahun_terbit'];
        

        $sql = "UPDATE databuku SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', jenis='$jenis', tahun_terbit='$tahun_terbit' WHERE id_buku='$id_buku'";
        
        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: databuku.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
            
        
    }
?>