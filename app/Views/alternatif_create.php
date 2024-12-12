<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Alternatif</title>
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
    }

    .content-card h3 {
      color: #d472a3;
      border-bottom: 2px solid #d472a3;
      padding-bottom: 10px;
      margin-bottom: 20px;
      font-weight: 600;
    }

    /* Styling the form */
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    form input,
    form select,
    form button {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ddd;
      outline: none;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    form input:focus,
    form select:focus {
      border-color: #d472a3;
      box-shadow: 0 0 5px rgba(212, 114, 163, 0.5);
    }

    form button {
      background-color: #d472a3;
      color: white;
      cursor: pointer;
      border: none;
      transition: background-color 0.3s ease;
    }

    form button:hover {
      background-color: #f8b0d9;
    }

    label {
      font-weight: 600;
      color: #333;
    }

    /* For consistent layout */
    .form-container {
      max-width: 600px;
      margin: 0 auto;
    }

    /* Responsive layout */
    @media (max-width: 768px) {
      .header h1 {
        font-size: 28px;
      }

      .content-card {
        padding: 20px;
      }
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">SPK SISWA</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
            <li class="nav-item"><a href="/" class="nav-link"><i class="nav-icon fas fa-house-user"></i><p>Dashboard</p></a></li>
            <li class="nav-item"><a href="/kriteria" class="nav-link"><i class="nav-icon fas fa-check-circle"></i><p>Data Kriteria</p></a></li>
            <li class="nav-item"><a href="/alternatif" class="nav-link active"><i class="nav-icon fas fa-users-cog"></i><p>Data Alternatif</p></a></li>
            <li class="nav-item"><a href="/matriks" class="nav-link"><i class="nav-icon fas fa-table-cells"></i><p>Matriks Alternatif</p></a></li>
            <li class="nav-item"><a href="/normalisasi" class="nav-link"><i class="nav-icon fas fa-balance-scale"></i><p>Normalisasi</p></a></li>
            <li class="nav-item"><a href="/peringkingan" class="nav-link"><i class="nav-icon fas fa-trophy"></i><p>Perangkingan</p></a></li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <div class="header">
        <h1>Tambah Alternatif</h1>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="content-card">
            <h3><i class="fas fa-plus-circle"></i> Form Tambah Alternatif</h3>
            <div class="form-container">
              <form method="post" action="/alternatif/store">
                <label for="kode_alternatif">Kode Alternatif</label>
                <input type="text" id="kode_alternatif" name="kode_alternatif" required>
                
                <label for="nama_alternatif">Nama Alternatif</label>
                <input type="text" id="nama_alternatif" name="nama_alternatif" required>

                <button type="submit">Simpan</button>
              </form>
            </div>
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
