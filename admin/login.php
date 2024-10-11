<?php
    require '../config/db.php';
    session_start();

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            // $_SESSION['role'] = $row['role'];
            header('Location: ./menu.php');
        } else {
            echo "<script>alert('username atau password Anda salah. Silakan coba lagi!')</script>";
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
    <div class="login-cont px-5" style="background-color: #853F3F;">
      <div class="user-icon my-4">
        <img src="../assets/user-3296.png" class="img-fluid">
      </div>
      <form method="post">
        <div class="input-cont p-2 mb-2">
            <label class=""><b class="text-bygn2 text-responsive" style="font-size: 1.5rem;">Username</b></label>
            <input class="p-2" type="text" name="username">
        </div>
        <div class="input-cont p-2 mb-3">
            <label class=""><b class="text-bygn2 text-responsive" style="font-size: 1.5rem;">Password</b></label>
            <input class="p-2" type="password" name="password">
        </div>
        <div class="login-cont mb-5">
          <button class="login-btn p-2" type="submit" name="submit">MASUK</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
