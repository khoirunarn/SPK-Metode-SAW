<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perhitungan Normalisasi</title>
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
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .content-card h3 {
      color: #d472a3;
      border-bottom: 2px solid #d472a3;
      padding-bottom: 10px;
      margin-bottom: 20px;
      font-weight: 600;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table th,
    table td {
      padding: 10px;
      text-align: left;
    }

    table th {
      background-color: #d472a3;
      color: white;
    }

    table tr:nth-child(odd) {
      background-color: #fce4ec;
    }

    table tr:nth-child(even) {
      background-color: #f9f2f4;
    }

    table tr:hover {
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

    .brand-link {
      color: white !important;
      font-weight: bold;
    }

    .nav-sidebar .nav-link.active {
      background-color: #f8b0d9;
      color: white;
    }

    .nav-sidebar .nav-link:hover {
      background-color: #fce4ec;
      color: #d472a3;
    }

    .nav-sidebar .nav-link i {
      color: white;
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
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
            <!-- Dashboard Menu -->
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-house-user"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- Data Kriteria Menu -->
            <li class="nav-item">
              <a href="/kriteria" class="nav-link">
                <i class="nav-icon fas fa-check-circle"></i> 
                <p>Data Kriteria</p>
              </a>
            </li>

            <!-- Data Alternatif Menu -->
            <li class="nav-item">
              <a href="/alternatif" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>Data Alternatif</p>
              </a>
            </li>

            <!-- Matriks Alternatif Menu -->
            <li class="nav-item">
              <a href="/matriks" class="nav-link">
                <i class="nav-icon fas fa-table-cells"></i>
                <p>Matriks Alternatif</p>
              </a>
            </li>

            <!-- Normalisasi Menu -->
            <li class="nav-item">
              <a href="/normalisasi" class="nav-link">
                <i class="nav-icon fas fa-balance-scale"></i>
                <p>Normalisasi</p>
              </a>
            </li>

            <!-- Perangkingan Menu -->
            <li class="nav-item">
              <a href="/peringkingan" class="nav-link">
                <i class="nav-icon fas fa-trophy"></i>
                <p>Perangkingan</p>
              </a>
            </li>
          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <div class="header">
        <h1>Perhitungan Normalisasi</h1>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="content-card">
            <h3><i class="fas fa-table"></i> Tabel Hasil Normalisasi</h3>
            <table>
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Alternatif</th>
                  <th>Kode Kriteria</th>
                  <th>Hasil Normalisasi</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($normalisasi)): ?>
                  <?php foreach ($normalisasi as $index => $row): ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= htmlspecialchars($row['kode_alternatif'] ?? '-') ?></td>
                      <td><?= htmlspecialchars($row['kode_kriteria'] ?? '-') ?></td>
                      <td><?= number_format($row['hasil_normalisasi'] ?? 0, 4) ?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="4" class="text-center">Belum ada data normalisasi.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
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
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>