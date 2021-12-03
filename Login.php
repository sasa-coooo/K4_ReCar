<?php
session_start();
require_once('conn/koneksi.php');

if( isset($_SESSION['username']) ) {

}

$userfail = isset($_GET['userfail']);
$passwordfail = isset($_GET['passwordfail']);
$logout = isset($_GET['logout']);
$needlogin = isset($_GET['needlogin']);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Recar - Login Page</title>
    <!-- required meta tag -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="src/login.css" />
    <!-- bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

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
      <div class="container" data-aos="fade-down" data-aos-duration="1000" style="display: flex; justify-content: center; margin-top:100px;">
        <div class="row">
          <div class="card" style="border-radius: 15px; max-width: 465px">
            <div class="card-body" style="width: 100%">
              <div
                class="logohead"
                style="margin: auto; margin-top: 20px"
                align="center"
              >
                <img
                  class="logo"
                  src="src/photo/recaricon2.png"
                  style="max-width: 200px v; margin-bottom: 20px"
                  alt=""
                />
                <h6 class="card-subtitle mb-2 text-muted">
                  Silahkan login untuk memulai
                </h6>
              </div>
              <div
                class="input"
                style="
                  margin-top: 20px;
                  padding-left: 50px;
                  padding-right: 50px;
                "
              >
              <?php 
                  if ($userfail) {
                        echo '<div class="alert alert-warning alert-dismissable">
                                <p>Username / Password Salah !</p>
                              </div>';
                                }
                  else if ($passwordfail) {
                          echo '<div class="alert alert-warning alert-dismissable">
                                  <p>Username / Password Salah !</p>
                                </div>';
                                }
                  else if ($logout) {
                          echo '<div class="alert alert-warning alert-dismissable">
											            <p>Anda telah berhasil logout</p>
                                </div>';
                  }
                  else if($needlogin){
                          echo '<div class="alert alert-warning alert-dismissable">
                            <p>Silahkan login terlebih dahulu</p>
                            </div>';
                  }
                  ?>
                <form method="post" action="login_proses.php">
                  <label for="username" class="card-subtitle mb-2 text-muted"
                    >Username :</label
                  >
                  <input
                    type="text"
                    class="form form-control"
                    name="username"
                    style="border-radius: 15px; font-size: 14px;"
                    placeholder="Username / Email..."
                  />
                  <label for="password" class="card-subtitle mb-2 text-muted"
                    >Password :</label
                  >
                  <input
                    type="password"
                    class="form form-control"
                    name="password"
                    style="border-radius: 15px; font-size: 14px;"
                    placeholder="Password..."
                  />
                  <div class="forgot">
                    <a href="#forgot" class="text-reset"
                      >Lupa password?</a
                    >
                  </div>
                  <div class="button" align="center">
                    <button
                      type="submit"
                      class="btn btn-primary mt-3"
                      style="
                        width: 256px;
                        border-radius: 15px;
                        font-weight: bold;
                      "
                    >
                      Login
                    </button>
                    <p class="card-subtitle m-2 text-muted">
                      Belum punya akun?
                    </p>
                    <a
                      href="register.php"
                      class="btn btn-outline-dark"
                      style="
                        width: 256px;
                        border-radius: 15px;
                        font-weight: bold;
                      "
                    >
                      Daftar
                    </a>    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1140 320"><path fill="#396eb0" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,213.3C384,235,480,213,576,181.3C672,149,768,107,864,80C960,53,1056,43,1152,58.7C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
  </body>
  <script>
    AOS.init()
  </script>
</html>
