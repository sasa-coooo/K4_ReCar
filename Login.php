<!DOCTYPE html>
<html>
  <head>
    <title>Recar - Welcome</title>
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
    <link rel="stylesheet" href="src/homeguest.css" />
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
  </head>
  <body><!DOCTYPE html>
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
      </head>
      <body>
        <!-- Awal Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #396eb0">
          <div class="container">
            <a class="navbar-brand" href="#"> <img src="src/photo/RecarIcon22.png" alt="wN" width="60" height="50" style="margin-right: 20px;;"/>Re<b>Car</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#about">Sewa Mobil</a>
                <a class="nav-link" href="#gallery">Hubungi Kami</a>
                <a class="nav-link" href="Login.html" style="color: white"><b>Masuk</b></a>
              </div>
            </div>
          </div>
        </nav>
        <!-- Akhir Navbar -->
    <!-- awal Judul -->
    <section id="welcome">
      <div class="container"  style="display: flex; justify-content: center;">
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
                <form action="post">
                  <label for="username" class="card-subtitle mb-2 text-muted"
                    >Username :</label
                  >
                  <input
                    type="text"
                    class="form form-control"
                    name="username"
                    style="border-radius: 15px"
                  />
                  <label for="username" class="card-subtitle mb-2 text-muted"
                    >Password :</label
                  >
                  <input
                    type="text"
                    class="form form-control"
                    name="password"
                    style="border-radius: 15px"
                  />
                  <div class="forgot">
                    <a href="#forgot" class="text-reset" style=""
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
                    <button
                      type="submit"
                      class="btn btn-outline-dark"
                      style="
                        width: 256px;
                        border-radius: 15px;
                        font-weight: bold;
                      "
                    >
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
