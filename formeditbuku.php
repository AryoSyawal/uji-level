<?php
    include 'koneksi.php';

    $id_buku = $_GET['id_buku'];
    $sql = "SELECT * FROM databuku WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)  < 1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="buatdata" id="editbuku">
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
                <div class="pelapisluar">
                    <div class="pelapisdalam">
                        <form action="editbuku.php" method="post" class="form-create" autocomplete="off">
                            <table>
                                <tr>
                                    <td><p><label></label></p></td>
                                    <td><input type="hidden" name="id_buku" class="input-text" placeholder="ID Buku" required="required" value="<?php echo $data['id_buku']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>JUDUL BUKU</label></p></td>
                                    <td><input type="text" name="judul_buku" class="input-text" placeholder="Judul Buku" required="required" value="<?php echo $data['judul_buku']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>PENULIS</label></p></td>
                                    <td><input type="text" name="penulis" class="input-text" placeholder="Penulis" required="required" value="<?php echo $data['penulis']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>PENERBIT</label></p></td>
                                    <td><input type="text" name="penerbit" class="input-text" placeholder="Penerbit" required="required" value="<?php echo $data['penerbit']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>JENIS</label></p></td>
                                    <td><input type="text" name="jenis" class="input-text" placeholder="Jenis" required="required" value="<?php echo $data['jenis']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>TAHUN TERBIT</label></p></td>
                                    <td><input type="text" name="tahun_terbit" class="input-text" placeholder="Tahun Terbit" required="required" value="<?php echo $data['tahun_terbit']?>"></td>
                                </tr>
                                <tr>
                            </table> 
                            <input type="submit" name="simpanbuku" value="simpan">
                        </form>
                    </div>
        
                </div>
                    </div>
                </div>
        
</body>
</html>