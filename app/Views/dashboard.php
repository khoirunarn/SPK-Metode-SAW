<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard METODE SAW</title>
  <base href="<?php echo base_url('assets') ?>/">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .header {
      background: linear-gradient(90deg, #f8b0d9, #d472a3);
      color: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .header p {
      font-size: 18px;
      font-weight: 300;
      margin-top: 10px;
      line-height: 1.6;
    }

    .content-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .content-card:hover {
      transform: translateY(-10px);
    }

    .content-card h3 {
      display: flex;
      align-items: center;
      border-bottom: 2px solid #d472a3;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .content-card h3 i {
      margin-right: 10px;
      color: #f8b0d9;
    }

    .content-card ol li {
      padding: 5px 0;
      transition: color 0.3s ease;
    }

    .content-card ol li:hover {
      color: #d472a3;
    }

    .nav-sidebar .nav-item .nav-link {
      font-size: 16px;
      padding: 10px 15px;
      white-space: nowrap;
      text-align: left;
    }

    .nav-sidebar .nav-item .nav-link i {
      margin-right: 10px;
    }

    .nav-sidebar .nav-item .nav-link p {
      margin: 0;
      font-weight: 500;
    }

    .nav-sidebar .nav-item .nav-link.active {
      background-color: #d472a3;
      color: white;
      border-radius: 5px;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link" style="
          text-align: center;
          color: white;
          font-size: 20px;
          font-weight: bold;
          text-transform: uppercase;
          padding: 15px;
          display: block;">
        SPK SISWA
      </a>

      <!-- Sidebar -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <!-- Dashboard Menu -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-house-user"></i> <!-- Ganti ikon dashboard -->
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Data Kriteria Menu -->
          <li class="nav-item">
            <a href="/kriteria" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i> <!-- Ganti ikon data kriteria -->
              <p>Data Kriteria</p>
            </a>
          </li>

          <!-- Data Alternatif Menu -->
          <li class="nav-item">
            <a href="/alternatif" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i> <!-- Ganti ikon data alternatif -->
              <p>Data Alternatif</p>
            </a>
          </li>

          <!-- Matriks Alternatif Menu -->
          <li class="nav-item">
            <a href="/matriks" class="nav-link">
              <i class="nav-icon fas fa-table-cells"></i> <!-- Ganti ikon matriks alternatif -->
              <p>Matriks Alternatif</p>
            </a>
          </li>

          <!-- Normalisasi Menu -->
          <li class="nav-item">
            <a href="/normalisasi" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i> <!-- Ganti ikon normalisasi -->
              <p>Normalisasi</p>
            </a>
          </li>

          <!-- Perangkingan Menu -->
          <li class="nav-item">
            <a href="/peringkingan" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i> <!-- Ganti ikon perangkingan -->
              <p>Perangkingan</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Header -->
    <div class="header">
      <h1>Dashboard METODE SAW</h1>
      <p>
      SISTEM PENDUKUNG KEPUTUSAN PENENTUAN SISWA BERPRESTASI <br>
      PADA SMA XAVERIUS PRINGSEWU MENGGUNAKAN METODE SAW
      </p>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Metode SAW -->
        <div class="content-card">
          <h3><i class="fas fa-cogs"></i> Metode SAW</h3>
          <p>
            Metode <strong>Simple Additive Weighting (SAW)</strong> merupakan salah satu metode dalam pengambilan
            keputusan multi-kriteria (MCDM).
            <!-- Metode ini menggunakan penjumlahan nilai ternormalisasi dari setiap alternatif berdasarkan bobot
              masing-masing kriteria yang telah ditentukan. -->
            Metode SAW dikenal dengan metode penjumlahan terbobot.
            Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja untuk setiap alternatif dan
            semua atribut.
          </p>
        </div>

        <!-- Langkah-Langkah -->
        <div class="content-card">
          <h3><i class="fas fa-list-alt"></i> Langkah-Langkah Penyelesaian Metode SAW</h3>
          <ol>
            <li>Menentukan kriteria yang akan dijadikan acuan dalam pengambilan keputusan.</li>
            <li>Memberikan nilai bobot untuk masing-masing kriteria sebagai W.</li>
            <li>Memberikan nilai rating kecocokan setiap alternatif pada setiap kriteria.</li>
            <li>Membuat tabel rating kecocokan dari setiap alternatif pada setiap kriteria.</li>
            <li>Membuat matriks keputusan.</li>
            <li>Melakukan normalisasi matriks keputusan.</li>
            <li>Menghitung hasil akhir nilai preferensi.</li>

          </ol>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
</body>

</html>