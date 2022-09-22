<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $nisn = $_POST['nisn'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
    }

    $sqlsiswa = "INSERT INTO datasiswa (id_siswa, nama_siswa, nisn, kelas, jurusan, alamat, jenis_kelamin, tanggal_lahir) VALUES ('$id_siswa', '$nama_siswa', '$nisn', '$kelas', '$jurusan', '$alamat', '$kelamin', '$tanggal_lahir')";
    $querysiswa = mysqli_query($connect, $sqlsiswa);

    if($querysiswa){
        header('Location: datasiswa.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }


?>