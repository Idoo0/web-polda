<?php
require 'config/db.php';
include 'controller/beritaController.php';

$berital = read_latest()[0];
$berita = read_all_except_latest();
?>
<!DOCTYPE html>
<html lang="en">
  <head> <link href="assets/LOGO TIK POLDA.png" rel="icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="styles/style.css" rel="stylesheet" />
    <title>BID TIK POLDA SULUT</title>

    <style>

      a{
        text-decoration: none;
        color: black;
      }
      /* Ensure the navbar items are aligned to the left on desktop */
      .navbar-nav {
        margin-left: 0;
      }

      /* Style the login button */
      .navbar .login-btn {
        padding: 8px 16px;
        background-color: #007bff;
        border: none;
        color: white;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
      }

      /* Style the login button hover effect */
      .navbar .login-btn:hover {
        background-color: #0056b3;
      }

      /* Move hamburger menu (toggler) to the right */
      .navbar-toggler {
        margin-left: auto;
      }

      /* Right-align the collapsed menu items */
      .navbar-collapse {
        justify-content: flex-end;
      }

      /* When the navbar is collapsed, make the menu align to the right */
      @media (max-width: 991.98px) {
        .navbar-collapse {
          text-align: right;
        }
      }
    </style>
  </head>
  <body>
    <header class="bg-cover">
      <div class="container">
        <div class="row align-items-center pt-4">
          <div class="col-12 col-md-3 text-center">
            <img
              class="img-fluid img-logo"
              src="assets/LOGO TIK POLDA.png"
              alt="Kapolda"
            />
            <h2>BID TIK POLDA SULUT</h2>
          </div>
          <div class="col-12 col-md-6 text-center text-md-start">
            <h1 class="header-title">
              BIDANG TEKNOLOGI INFORMASI DAN KOMUNIKASI<br />
              KEPOLISIAN DAERAH SULAWESI UTARA
            </h1>
          </div>
          <div class="col-12 col-md-3 text-center">
            <img
              class="img-fluid img-kapolda mt-4"
              src="assets/PRESISI.png"
              alt="Logo"
            />
            
          </div>
        </div>
      </div>
    </header>

    <!-- Responsive Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >BERANDA</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentangtik.php">TENTANG TIK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan110.php">LAYANAN 110</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">KONTAK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://presisi.sulut.polri.go.id/">PORTAL POLDA</a>
            </li>
          </ul>
          <div class="d-flex ms-auto">
            <div class="d-flex align-items-center">
              <a href="admin/login.php">
                <button class="login-btn">LOGIN</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <div class="row justify-content-between">
        <!-- Main news (Berita Utama) -->
        <div class="col-lg-7 col-md-12 main-news mb-5">
          <h3 class="">BERITA UTAMA</h3>
          <div class="line-sec"></div>
          <div class="card">
            <img
              src="<?= 'upload/' . $berital['thumbnail'] ?>"
              class="card-img-top"
              alt="Main News"
              height="350px"
            />
            <a href="<?= $berital['link'] ?>">
              <div class="card-body" style="box-shadow: 0px 2px 10px 0px rgb(125, 103, 103, 80);">
                <p class="card-text">
                  <?= $berital['judul'] ?>
                </p>
              </div>
            </a>
          </div>
        </div>

        <!-- Latest news (Berita Terbaru) -->
        <div class="col-lg-4 col-md-12">
          <h3 class="">BERITA TERBARU</h3>
          <div class="line-sec"></div>
          <div class="row">
            <!-- Repeat this block for each latest news -->
            <?php foreach($berita as $b): ?>
            <div class="col-6 col-lg-6 mb-3 thumbnail-news">
              <img
                src="<?= 'upload/' . $b['thumbnail'] ?>"
                alt="Latest News 1"
                class="img-thumbnail"
              />
              <a href="<?= $b['link'] ?>">
                <div class="news-title">
                  <?= $b['judul'] ?>
                </div>
              </a>
            </div>
            <?php endforeach; ?>
           </div>
          </div>
        </div>

        
      </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
