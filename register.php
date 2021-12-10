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
        <!-- bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
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
                <a class="nav-link" href="#about">Sewa Mobil</a>
                <a class="nav-link" href="contactus.html">Hubungi Kami</a>
                <a class="nav-link" href="Login.php" style="color: white"><b>Masuk</b></a>
              </div>
            </div>
          </div>
        </nav>
        <!-- Akhir Navbar -->
    <!-- awal Judul -->
    <section id="welcome">
      <div class="container" data-aos="fade-down" data-aos-duration="1000" style="display: flex; justify-content: center;">
        <div class="row">
          <div class="card" style="border-radius: 15px; width: 765px;">
            <a href="login.php" class="back text-black" style="position: absolute; margin: 30px;" >
              <img src="src/photo/arrow.png" href="login.php">Back
            </a>  
            <div class="card-body">
              <div
                class="logohead mb-4"
                style="margin: auto; margin-top: 20px"
                align="center"
              >
                <img
                  class="logo"
                  src="src/photo/recaricon2.png"
                  style="max-width: 150px; margin-bottom: 30px"
                  alt=""
                />
                <h3 class="card-subtitle mb-2" style="color: #333; font-weight: bold; ">PENDAFTARAN AKUN BARU</h3>
                <h6 class="card-subtitle mb-2 text-muted">
                  Masukkan Data Diri Dengan Benar Ya!
                </h6>
                </div>
                <div class="user-register" style="padding-left: 30px; padding-right: 30px;">
                    <form method="POST" action="#">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" style="font-weight: bold; color: #333;">Username</label>
                            <input type="text" class="form-control" placeholder="tulis username kamu disini..." style="border-radius: 15px;">
                        </div>
                        <div class="col">
                            <label for="fullname" style="font-weight: bold; color: #333;">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="tulis nama lengkap kamu disini..." style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" style="font-weight: bold; color: #333;">Email</label>
                            <input type="text" class="form-control" placeholder="tulis email kamu disini..." style="border-radius: 15px;">
                        </div>
                        <div class="col">
                            <label for="jk" style="font-weight: bold; color: #333;">Jenis Kelamin</label>
                            <select id="inputJk" class="form-control" style="border-radius: 15px;">
                                <option selected>Jenis Kelamin...</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" style="font-weight: bold; color: #333;">Password</label>
                            <input type="text" class="form-control" placeholder="tulis password kamu disini..." style="border-radius: 15px;">
                        </div>
                        <div class="col">
                            <label for="nohp" style="font-weight: bold; color: #333;">Nomer HP</label>
                            <input type="text" class="form-control" placeholder="tulis nomer hp kamu disini..." style="border-radius: 15px;">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" style="font-weight: bold; color: #333;">Confirm Password</label>
                            <input type="text" class="form-control" placeholder="tulis konfirmasi passsword kamu disini..." style="border-radius: 15px;">
                        </div>
                        <div class="col">
                            <label for="domisili" style="font-weight: bold; color: #333;">Domisili</label>
                            <select id="inputDomisili" class="form-control" style="border-radius: 15px;">
                                <option selected>Domisili Kamu...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div> 
                    <div class="btn-daftar" align="center">
                        <button class="btn btn-primary" style="width: 150px; border-radius: 15px;">Daftar</button>
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
  </script>
</html>
