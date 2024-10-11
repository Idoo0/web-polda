<?php
require '../config/db.php';
include '../controller/beritaController.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

if (isset($_POST["submit"])) {
  $id = getId($_POST); 
  if ($id != "0") {
    if (delete_data($id) > 0) {
      echo "
        <script>
          alert('data berhasil dihapus');
          document.location.href='menu.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('data gagal dihapus');
          document.location.href='delete.php';
        </script>
      ";
    }
  } else {
    echo "
      <script>
        alert('data gagal ditemukan');
        document.location.href='delete.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head> <link href="assets/LOGO TIK POLDA.png" rel="icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - TIK POLDA Manado</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="">
    <div>
      <img src="../assets/LOGO TIK POLDA.png" class="mt-5" height="90px">
    </div>
    <div>
      <h1 class="text-center text-bygn mt-5">BIDANG TEKNOLOGI INFORMASI DAN KOMUNIKASI <br> KEPOLISIAN DAERAH SULAWESI UTARA</h1>
    </div>
    <div class="login-cont px-3 py-5" style="background-color: #853F3F;">
      <div class="title mb-5">
        <h1 class="mt-3">DELETE NEWS</h1>
      </div>
      <form method="post">
      <div class="menu inputan mb-5 py-2">
        <label class="label-font">ADD LINK</label>
        <input class="p-2 mb-1" type="text" name="link">
      </div>
      <div class="menu inputan py-2">
        <h4 class="text-center">ARE YOU SURE WANT TO DELETE</h4>
        <div class="submit-cont">
          <button type="submit" name="submit">Yes!</button>
        </form>
        <button>
          <a href="menu.php" style="text-decoration: none; color: black">
              No!
            </a>
            </button>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
