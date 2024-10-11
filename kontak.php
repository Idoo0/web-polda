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
              <a class="nav-link" aria-current="page" href="index.php"
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
              <a class="nav-link active" href="kontak.php">KONTAK</a>
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
      <div class="row">
        <div class="col-lg-12 col-md-12 main-news">
          <h3 class="">Kontak</h3>
          <div class="line-sec"></div>
          <div class="card tentangtik p-3">
            <p class="tentangtik" style="font-size: 1rem;">
              BIDANG TEKNOLOGI INFORMASI DAN KOMUNIKASI POLDA SULUT
            </p>
            <p class="tentangtik" style="font-size: 1rem;">
              Di POLDA SULUT (Lantai 3)
            </p>
            <p class="tentangtik" style="font-size: 1rem;">
              Jl. Bethesda No. 62, Kec. Sario, Kota Manado, Sulawesi Utara
            </p>
            
            <div style="color: white; background-color: #BE0606; border-radius: 5px; width: 7rem; padding: 10px;">
              Lihat Kontak :
            </div>
            <div class="column mt-3">
              <a href="https://www.instagram.com/bidtik_poldasulut?igsh=MWJyYzNxZ3kxOGhndA==">
                <img width="50px" src="assets/Logo Instagram.png">
              </a>
              <a href="https://www.youtube.com/@BidangTIKPoldaSulut">
                <img width="50px" class="ms-3" src="assets/Logo Youtube.png">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
