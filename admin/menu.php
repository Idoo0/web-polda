<?php
require '../config/db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <div class="login-cont px-5 py-5 mt-5" style="background-color: #853F3F;">
      <a href="add.php" style="text-decoration: none;">
      <div class="menu mb-5">
          <h3 class="mt-3" style="color: black;">ADD NEWS</h3>
        </div>
      </a>
      <a href="editConfirm.php" style="text-decoration: none;">
      <div class="menu mb-5">
          <h3 class="mt-3" style="color: black;">EDIT</h3>
        </div>
      </a>
      <a href="delete.php" style="text-decoration: none;">
      <div class="menu">
          <h3 class="mt-3" style="color: black;">DELETE</h3>
        </div>
      </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
