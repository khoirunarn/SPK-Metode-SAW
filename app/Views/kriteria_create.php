<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Kriteria</title>
  <base href="<?php echo base_url('assets') ?>/">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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

    .content-card {
      background: white;
      border-radius: 10px;
      padding: 30px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
    }

    .content-card h3 {
      color: #d472a3;
      border-bottom: 2px solid #d472a3;
      padding-bottom: 10px;
      margin-bottom: 20px;
      font-weight: 600;
    }

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    form input,
    form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ddd;
      box-sizing: border-box;
      font-size: 14px;
      transition: border 0.3s ease;
    }

    form input:focus,
    form select:focus {
      border-color: #d472a3;
      outline: none;
      box-shadow: 0 0 5px rgba(212, 114, 163, 0.6);
    }

    form input[type="number"] {
      -moz-appearance: textfield;
    }

    form button {
      background-color: #d472a3;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    form button:hover {
      background-color: #f8b0d9;
    }

    .btn-container {
      margin-top: 20px;
      text-align: right;
    }

    .btn {
      background-color: #d472a3;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #f8b0d9;
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

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">SPK SISWA</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
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
      <div class="header">
        <h1>Tambah Kriteria</h1>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="content-card">
            <h3><i class="fas fa-plus-circle"></i> Form Tambah Kriteria</h3>
            <form action="/kriteria/store" method="post">
              <?= csrf_field() ?>
              <label for="kode_kriteria">Kode Kriteria</label>
              <input type="text" id="kode_kriteria" name="kode_kriteria" placeholder="Masukkan kode kriteria" required>

              <label for="nama_kriteria">Nama Kriteria</label>
              <input type="text" id="nama_kriteria" name="nama_kriteria" placeholder="Masukkan nama kriteria" required>

              <label for="type_kriteria">Type Kriteria</label>
              <select id="type_kriteria" name="type_kriteria" required>
                <option value="Benefit">Benefit</option>
                <option value="Cost">Cost</option>
              </select>

              <label for="bobot_kriteria">Bobot Kriteria</label> <!-- Tambahkan input bobot -->
              <input type="number" step="0.01" id="bobot_kriteria" name="bobot_kriteria"
                placeholder="Masukkan bobot kriteria" required>

              <button type="submit">Simpan</button>
            </form>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="text-center">By Khoiruna</div>
    </footer>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
</body>

</html>