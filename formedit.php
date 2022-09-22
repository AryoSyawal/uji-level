<?php
    include 'koneksi.php';

    $id_siswa = $_GET['id_siswa'];
    $sql = "SELECT * FROM datasiswa WHERE id_siswa='$id_siswa'";
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

    <div class="buatdata" id="edit">
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
                        <form action="edit.php" method="post" class="form-create">
                            <table>
                                <tr>
                                    <td><p><label></label></p></td>
                                    <td><input type="hidden" name="id_siswa" class="input-text" placeholder="ID Anda" required="required" value="<?php echo $data['id_siswa']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>NAMA</label></p></td>
                                    <td><input type="text" name="nama_siswa" class="input-text" placeholder="Nama Anda" required="required" value="<?php echo $data['nama_siswa']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>NISN</label></p></td>
                                    <td><input type="number" name="nisn" class="input-text" placeholder="NISN" required="required" value="<?php echo $data['nisn']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>KELAS</label></p></td>
                                    <td><input type="number" name="kelas" class="input-text" placeholder="Kelas Anda" required="required" value="<?php echo $data['kelas']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>JURUSAN</label></p></td>
                                    <td><input type="text" name="jurusan" class="input-text" placeholder="Jurusan Anda" required="required" value="<?php echo $data['jurusan']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>ALAMAT</label></p></td>
                                    <td><input type="textarea" name="alamat" class="input-text" placeholder="Alamat Anda" required="required" value="<?php echo $data['alamat']?>"></td>
                                </tr>
                                <tr>
                                    <td><p><label>JENIS KELAMIN</label></p></td>
                                    <td class="kelamin"><input type="radio" name="kelamin" value="Laki-Laki" class="radio" >Laki-Laki<input type="radio" name="kelamin" value="Perempuan" class="radio" required="required" >Perempuan</td>
                                </tr>
                                <tr>
                                    <td><p><label></label></p></td>
                                    <td><input type="hidden" name="tanggal_lahir" class="input-text" placeholder="Tanggal Lahir Anda" required="required" value="<?php echo $data['tanggal_lahir']?>"></td>
                                </tr>
                            </table> 
                            <input type="submit" name="simpan" value="simpan">
                        </form>
                    </div>
        
                </div>
                    </div>
                </div>
        
</body>
</html>