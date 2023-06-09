<?php
      session_start();
      if($_SESSION['status_login'] != true){
            echo '<script>window.location="login.php"</script>';
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | Project UTS</title>

      <link rel="shortcut icon" href="layouts/assets/img/Logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/Logo2.jpeg" class="brand">
                  <div class="user">LOLA CITRA UTAMI</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/home.png" alt=""> Beranda
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=barang_tampil">
                                    <img class="icon" src="layouts/assets/img/barang.png" alt="">Data Barang
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pelanggan_tampil">
                                    <img class="icon" src="layouts/assets/img/pelanggan.png" alt=""> Data Pelanggan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=transaksi_tampil">
                                    <img class="icon" src="layouts/assets/img/transaksi.png" alt=""> Data Transaksi
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=detail_tampil">
                                    <img class="icon" src="layouts/assets/img/detail.png" alt=""> Data Detail
                              </a>
                        </li>
                        
                        <li>
                              <a href="index.php?hal=logout">
                              <img class="icon" src="layouts/assets/img/logout2.PNG" alt=""> Keluar
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            
            <footer>
                  Copyright &copy; 2023. Lola Citra Utami
            </footer>
      </main>

</body>

</html>