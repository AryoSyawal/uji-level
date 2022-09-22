<?php
    include 'koneksi.php';

    if(isset($_POST['simpanbuku'])){
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $jenis = $_POST['jenis'];
        $tahun_terbit = $_POST['tahun_terbit'];
    }

    $sqlbuku = "INSERT INTO databuku (id_buku, judul_buku, penulis, penerbit, jenis, tahun_terbit) VALUES ('$id_buku', '$judul_buku', '$penulis', '$penerbit', '$jenis', '$tahun_terbit')";
    $querybuku = mysqli_query($connect, $sqlbuku);

    if($querybuku){
        header('Location: databuku.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }


?>