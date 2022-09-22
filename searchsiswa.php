<?php
    include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

      
        <div class="data" id="data">
        <div class="container">

            <div class="navbar">
                <a href="home.php"><img src="logo.png" alt=""></a>      
                <a href=""><img src="setting.png" alt=""></a>
                <h1>STAR</h1>
                <h2>LIBRARY</h2>
            </div>

            <div class="menu">
                        <div class="menu-text">
                        <a href="">Data Siswa</a>
                        <a href="databuku.php">Data Peminjaman</a>
                        </div>

                </div>

            </div>
    
        
            <div class="tengah">
                <div class="tablesiswa">
                    <div class="button">
                    <a href="buatdata.html" class="create">Create +</a>
                    <form action="searchsiswa.php
                    " method="get"><input type="text" placeholder="Search" name="search"><input type="submit"></form>
                    </div>
                    <table cellspacing="0">
                    <tr class="rowatas">
                        <td>ID</td>
                        <td>Nama</td>
                        <td>NISN</td>
                        <td>Kelas</td>
                        <td>Jurusan</td>
                        <td>Alamat</td>
                        <td>Jenis Kelamin</td>
                        <td>Tanggal Lahir</td>
                        <td>Action</td>
                        
                    </tr>
                    <?php
                    if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    }
                    
                    $sql = "SELECT * FROM datasiswa WHERE id_siswa='$search' OR nama_siswa='$search' OR nisn='$search' OR kelas='$search' OR jurusan='$search' OR alamat='$search' OR jenis_kelamin='$search' OR tanggal_lahir='$search' ";
                    $query = mysqli_query($connect, $sql);
                    
                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>
                        <td>$siswa[id_siswa]</td>
                        <td>$siswa[nama_siswa]</td>
                        <td>$siswa[nisn]</td>
                        <td>$siswa[kelas]</td>
                        <td>$siswa[jurusan]</td>
                        <td>$siswa[alamat]</td>
                        <td>$siswa[jenis_kelamin]</td>
                        <td>$siswa[tanggal_lahir]</td>
                        <td>
                            <a href='formedit.php?id_siswa=".$siswa['id_siswa']."'>Edit</a>
                            <a href='hapus.php?id_siswa=".$siswa['id_siswa']."'>Hapus</a>
                        </td>
                    </tr>";
                    };
                ?>
                </table>
                </div>
            </div>

        </div>
        </div>
         

</body>
</html>