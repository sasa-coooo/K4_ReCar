<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php?needlogin');
} else {
    $usr = $_SESSION['username'];
}
require_once('conn/koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$usr'");
$hasil = mysqli_fetch_array($query);
if (empty($hasil['username'])) {
    header('location:login.php?needlogin');
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Recar - Welcome</title>
    <!-- required meta tag -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="src/homeguest.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- AOS Data -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- End -->

    <!-- Typed.JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
      <style>
            *{
                font-family: 'Saira', sans-serif;
            }
        </style>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #396eb0">
      <div class="container">
        <a class="navbar-brand" href="index.php"> <img src="src/photo/RecarIcon22.png" alt="wN" width="60" height="50" style="margin-right: 20px;;"/>Re<b>Car</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="rental.php">Sewa Mobil</a>
            <a class="nav-link" href="contactus.html">Hubungi Kami</a>
            <a class="nav-link" href="Logout.php" style="color: white"><b><?php echo $hasil['username']; ?></b></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- awal Judul -->
    <section id="welcome">
      <div class="container" data-aos="fade-down" data-aos-duration="1000" >
        <div class="row"  style="display: flex; justify-content: center;">
            <div class="welcomer mt-4 mb-3">
                <h2>Selamat Datang! Kak, <b><?php echo $hasil['nama_lengkap']; ?></b></h2>
                <h4>Ingin sewa mobil apa?</h4>
            </div>
          <div class="card" style="border-radius: 15px; width: 900px;">
            <div class="card-body">
              <div class="logohead mb-4" style="margin: auto; margin-top: 20px" align="center">
                <h3 class="card-subtitle mb-2" style="color: #333;">Re<b>Car</b> Sewa Mobil</h3>
                </div>
                <div class="user-register" style="padding-left: 30px; padding-right: 30px;">
                    <form method="POST" action="#">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="pengambilan" style="font-weight: bold; color: #333;">Lokasi Pengambilan</label>
                            <select id="lkPengambilan" class="form-control" style="border-radius: 15px;">
                                <option selected>Pilih Lokasi Pengambilan</option>
                                <option>...</option>
                            </select>

                            <label class="mt-3" for="merek" style="font-weight: bold; color: #333;">Merek Mobil</label>
                            
                            <select  id="merekMobil" class="form-control" style="border-radius: 15px;" onchange="carImg()">
                                <option selected value="src/photo/car-img/default.jpg">Pilih Merek Mobil</option>
                                <!-- Daftar Mobil -->
                                <?php 
                                    $mobil = mysqli_query($koneksi, "SELECT * FROM tb_mobil");
                                    foreach ($mobil as $key) :
                                ?>
                                <option value="<?php echo $key['gambar']; ?>" ><?php echo $key['nama_mobil']; ?></option>
                                <?php endforeach; ?>
                            </select>

                            <div class="row mt-3">
                                <div class="col" style="max-width: 200px;">
                                    <label for="tglsewa" style="font-weight: bold; color: #333;">Tanggal Sewa</label>
                                    <input type="date" name="tanggal-sewa" class="form-control" style="border-radius: 15px; padding-left: 10px;" date_format>                                    
                                </div>
                                <div class="col">
                                    <label for="lamasewa" style="font-weight: bold; color: #333;">Lama Sewa</label>
                                    <select id="merekMobil" class="form-control" style="border-radius: 15px;">
                                        <option selected>Lama Sewa</option>
                                        <option value="8">8 Jam</option>
                                        <option value="12">12 Jam</option>
                                        <option value="24">24 Jam</option>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="btn-daftar" >
                                <button class="btn btn-success mt-3" style="width:100%; border-radius: 15px;">Sewa Sekarang</button>
                            </div>
                        </div>
                        <div class="col mt-3" style="margin-left: 30px;" align="center">
                            <img id="gambarMobil" src="src/photo/car-img/default.jpg" alt="" style="max-width: 300px; border-radius: 15px;">
                            <div class="keterangan mt-3" align="center">
                                <label for="car-status">Status: <b style="color: green">Ready</b></label><br>
                                <label id="harga" for="harga">Harga Sewa : <b style="color: red">Rp. 2.400.000</b></label>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </body>
  <script>
    AOS.init()

    function carImg() {
        var x = document.getElementById("merekMobil").value;
        document.getElementById("gambarMobil").src = x;  
        }
  </script>
</html>
