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
              <a class="nav-link active" href="layanan110.php">LAYANAN 110</a>
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
      <div class="row">
        <div class="col-lg-12 col-md-12 main-news">
          <h3 class="">LAYANAN 110</h3>
          <div class="line-sec"></div>
          <div class="card tentangtik p-3">
            <div class="card p-1" style="background-color: #FF0000;">
              <div class="card py-3 align-items-center" style="background-color: #D9D9D9; border-radius: 10px; border: 1px solid black;">
                <div class="display-6" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.50); letter-spacing: 2px;">
                  LAYANAN POLISI
                </div>
                <div class="layanan110 display-3" style="color: #E60C0C; text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.50); letter-spacing: 5px;">
                  1 1 0
                </div>
                <div style="text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.50);">MELINDUNGI - MELAYANI - MENGAYOMI</div>
              </div>
            </div>
            <p class="tentangtik mt-4" style="font-size: 1rem;">
              Layanan Polisi 110 (Call Center Polri) menyediakan sarana bagi masyarakat untuk melaporkan atau memberikan informasi terkait keamanan dan ketertiban masyarakat (Kamtibmas), yang akan diterima oleh Operator SPKT (Sentra Pelayanan Kepolisian Terpadu) di Polres/ta terdekat. <br><br>  

              Untuk meningkatkan kecepatan pelayanan, Polri bekerja sama dengan PT Telkom Indonesia dalam menyediakan Layanan Polisi 110. Layanan ini dirancang untuk memenuhi kebutuhan masyarakat akan keamanan publik, dilengkapi dengan sistem aplikasi yang memungkinkan pencatatan dan perekaman setiap interaksi antara Polri dan masyarakat. Sistem ini memungkinkan Polri merespons kebutuhan masyarakat dengan lebih efektif. <br><br>  

              Saat masyarakat menghubungi nomor 110, panggilan akan langsung diarahkan ke Operator SPKT terdekat, yang akan menangani informasi, laporan (seperti kecelakaan, bencana, atau kerusuhan), serta pengaduan (seperti penghinaan, ancaman, atau kekerasan) untuk ditindaklanjuti oleh unit kepolisian terkait. <br><br>  

              Layanan Polisi ini bisa digunakan secara gratis. Namun, Polri mengingatkan agar layanan ini tidak disalahgunakan, karena laporan palsu akan dilacak dan ditindaklanjuti oleh pihak kepolisian.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
