<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Kriteria</title>
  <base href="<?= base_url('assets') ?>/">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f2f4;
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
    }

    .content-card h3 {
      color: #d472a3;
      border-bottom: 2px solid #d472a3;
      padding-bottom: 10px;
      margin-bottom: 30px;
      font-weight: 600;
    }

    label {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      margin-bottom: 10px;
    }

    input[type="text"],
    select,
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 2px solid #d472a3;
      font-size: 16px;
      background-color: #f9f2f4;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    select:focus,
    input[type="number"]:focus {
      border-color: #f8b0d9;
      outline: none;
    }

    button {
      background-color: #d472a3;
      color: white;
      padding: 12px 30px;
      text-decoration: none;
      border-radius: 8px;
      font-size: 18px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #f8b0d9;
    }

    .btn-container {
      margin-top: 20px;
      text-align: right;
    }

    .main-footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }

    /* Sidebar Styles */
    .main-sidebar {
      background-color: #343a40;
      color: white;
      width: 250px;
      position: fixed;
      height: 100%;
    }

    .main-sidebar .brand-link {
      color: white;
      font-weight: bold;
      padding: 20px;
      text-align: center;
      background-color: #1f2226;
    }

    .nav-sidebar .nav-link {
      color: white;
      padding: 12px 20px;
      font-size: 16px;
    }

    .nav-sidebar .nav-link:hover {
      background-color: #fce4ec;
      color: #d472a3;
    }

    .nav-sidebar .nav-link.active {
      background-color: #f8b0d9;
      color: white;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">SPK SISWA</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-house-user"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/kriteria" class="nav-link">
                <i class="nav-icon fas fa-check-circle"></i>
                <p>Data Kriteria</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/alternatif" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>Data Alternatif</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/matriks" class="nav-link">
                <i class="nav-icon fas fa-table-cells"></i>
                <p>Matriks Alternatif</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/normalisasi" class="nav-link">
                <i class="nav-icon fas fa-balance-scale"></i>
                <p>Normalisasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/peringkingan" class="nav-link">
                <i class="nav-icon fas fa-trophy"></i>
                <p>Perangkingan</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper" style="margin-left: 250px;">
      <div class="header">
        <h1>Edit Kriteria</h1>
      </div>

      <!-- Main Content Section -->
      <section class="content">
        <div class="container-fluid">
          <div class="content-card">
            <h3><i class="fas fa-edit"></i> Form Edit Kriteria</h3>
            <!-- Pesan Error -->
            <?php if (session()->has('validation')): ?>
              <div class="alert alert-danger">
                <ul>
                  <?php foreach (session('validation') as $error): ?>
                    <li><?= esc($error) ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php endif; ?>

            <!-- Form Edit -->
            <form action="<?= site_url('kriteria/update/' . $kriteria['id_kriteria']) ?>" method="post">
              <?= csrf_field() ?>
              <label for="kode_kriteria">Kode Kriteria</label>
              <input type="text" name="kode_kriteria" id="kode_kriteria" value="<?= esc($kriteria['kode_kriteria']) ?>" required>

              <label for="nama_kriteria">Nama Kriteria</label>
              <input type="text" name="nama_kriteria" id="nama_kriteria" value="<?= esc($kriteria['nama_kriteria']) ?>" required>

              <label for="type_kriteria">Type Kriteria</label>
              <select name="type_kriteria" id="type_kriteria" required>
                <option value="Benefit" <?= $kriteria['type_kriteria'] == 'Benefit' ? 'selected' : '' ?>>Benefit</option>
                <option value="Cost" <?= $kriteria['type_kriteria'] == 'Cost' ? 'selected' : '' ?>>Cost</option>
              </select>

              <label for="bobot_kriteria">Bobot Kriteria</label>
              <input type="number" name="bobot_kriteria" id="bobot_kriteria" value="<?= esc($kriteria['bobot_kriteria']) ?>" required>

              <div class="btn-container">
                <button type="submit">Simpan</button>
              </div>
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
