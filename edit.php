<?php
    include 'koneksi.php';

    if (isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $nisn = $_POST['nisn'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        $sql = "UPDATE datasiswa SET nama_siswa='$nama_siswa', nisn='$nisn', kelas='$kelas', jurusan='$jurusan', alamat='$alamat', jenis_kelamin='$kelamin', tanggal_lahir='$tanggal_lahir' WHERE id_siswa='$id_siswa'";
        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
            
        
    }
?>