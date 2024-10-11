<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>BID TIK POLDA MANADO</title>

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
            <h2>BID TIK POLDA MANADO</h2>
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
              <a class="nav-link active" href="tentangtik.php">TENTANG TIK</a>
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
      <div class="row">
        <div class="col-lg-auto col-md-12 main-news">
          <h3 class="">Tentang TIK</h3>
          <div class="line-sec"></div>
          <div class="card tentangtik p-3">
            <p class="tentangtik" style="font-size: 1.25rem;">VISI MISI</p>
            <p class="tentangtik" style="font-size: 1rem;">VISI BID TIK POLDA SULUT <br> “Bidang Teknologi Informasi dan Komunikasi Polda Sulut dengan semangat pelayanan dan profesionalisme bertekad membangun sinergi melalui teknologi informasi dan komunikasi Polda Sulut untuk mewujudkan efektifitas dan efisiensi dalam mendukung pelaksanaan tugas Polda Sulut”.</p>
            <p class="tentangtik" style="font-size: 1rem;">MISI BID TIK POLDA SULUT <br> 
              a) menyelanggarakan pembinaan teknologi informasi dan komunikasi Polda Kalsel serta penyajian informasi kriminal dan pelayanan multimedia; <br>
              b) membantu Pimpinan dalam rangka mengawasi, menyusun, merumuskan dan melaksanakan kebijakan pimpinan Polri di bidang teknologi informasi dan komunikasi Polda Kalsel; <br>
              c) meningkatkan kemampuan SDM Polda Kalsel dibidang teknologi informasi dan komunikasi; <br>
              d) membantu mempermudah kelancaran pelaksanaan tugas di seluruh tingkatan organisasi melalui sistem teknologi informasi dan komunikasi yang modern sehingga dapat memberikan pelayanan yang prima; <br>
              e) mengembangkan sistem teknologi informasi dan komunikasi konvensional menuju sistem komputerisasi dan digitalisasi yang dapat menerima dan menyajikan informasi secara cepat dan akurat; <br>
              f) menyelenggarakan kerjasama dengan Lembaga Pemerintah lainnya di bidang teknologi informasi dan komunikasi.
            </p>
            
            <p class="tentangtik" style="font-size: 1.25rem;">STRUKTUR</p>
            <p class="tentangtik" style="font-size: 1rem;">STRUKTUR ORGANISASI BID TIK POLDA SULUT <br> Bidang Teknologi Informasi dan Komunikasi yang selanjutnya disebut Bid TIK adalah unsur pengawas dan pembantu pimpinan dalam bidang Teknologi Informasi dan Komunikasi pada tingkat Polda yang berada di bawah Kapolda. Bid TIK, yang dipimpin oleh Kabid TIK bertugas menyelenggarakan pembinaan teknologi informasi dan komunikasi, pengumpulan dan pengolahan data, serta penyajian informasi Kamtibmas dan pelayanan multimedia.</p>
            <p class="tentangtik" style="font-size: 1rem;">MISI BID TIK POLDA SULUT <br> 
              a. penyusunan rencana kerja dan anggaran, pengelolaan dan pembinaan manajemen personel dan logistik, administrasi dan ketatausahaan, serta pengelolaan keuangan; <br>
              b. pembangunan, pembinaan, pemeliharaan jaringan komunikasi dan pengolahan data, serta pelayanan telekomunikasi; <br>
              c. pembinaan dan penyelenggaraan sistem informasi meliputi sentralisasi pengumpulan dan pengolahan data, pengamanan sistem, penyajian informasi dan dokumentasi, serta analisis dan evaluasi; <br>
              d. pembinaan dan penyelenggaraan pusat sistem informasi Kamtibmas, meliputi penyiapan dan penyajian data operasional dan pembinaan; dan<br> 
              e. pemberian bimbingan, bantuan teknis penyelenggaraan TIK kepada satuan organisasi di lingkungan Polda. <br>
              (Berdasarkan Peraturan Kepolisian Negara RI Nomor 3 Tahun 2024)
            </p>

            <img class="img-fluid mb-3" src="assets/struktur (1).png">
            <img class="img-fluid" src="assets/struktur (2).png">
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
