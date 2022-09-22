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

      
        <div class="data" id="databuku">
        <div class="container">
            <div class="navbar">
            <a href="home.php"><img src="logo.png" alt=""></a>      
                <a href=""><img src="setting.png" alt=""></a>
                <h1>STAR</h1>
                <h2>LIBRARY</h2>
            </div>

            <div class="menu">
                        <div class="menu-text">
                        <a href="datasiswa.php">Data Siswa</a>
                        <a href="databuku.php">Data Peminjaman</a>
                        </div>

            </div>

            </div>
    
        
            <div class="tengah">
                <div class="tablesiswa">
                <div class="button">
                    <a href="buatdata.html" class="create">Create +</a>
                    <form action="searchbuku.php
                    "><input type="text" placeholder="Search" name="search"><input type="submit"></form>
                    </div>
                    <table cellspacing="0">
                    <tr class="rowatas">
                        <td>ID</td>
                        <td>Judul</td>
                        <td>Penulis</td>
                        <td>Penerbit</td>
                        <td>Jenis</td>
                        <td>Tahun_Terbit</td>
                        <td>Action</td>
                        
                    </tr>
                    <?php
                    if(isset($_GET['search'])){
                        $search = $_GET['search'];
                    }
                        
                    $sql = "SELECT * FROM databuku WHERE id_buku='$search' OR judul_buku='$search' OR penulis='$search' OR penerbit='$search' OR jenis='$search' OR tahun_terbit='$search'";
                    $query = mysqli_query($connect, $sql);
                    
                    while($buku = mysqli_fetch_array($query)){
                        echo "<tr>
                        <td>$buku[id_buku]</td>
                        <td>$buku[judul_buku]</td>
                        <td>$buku[penulis]</td>
                        <td>$buku[penerbit]</td>
                        <td>$buku[jenis]</td>
                        <td>$buku[tahun_terbit]</td>
                        <td>
                            <a href='formeditbuku.php?id_buku=".$buku['id_buku']."'>Edit</a>
                            <a href='hapusbuku.php?id_buku=".$buku['id_buku']."'>Hapus</a>
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