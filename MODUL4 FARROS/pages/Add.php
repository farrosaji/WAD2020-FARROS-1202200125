<?php
require "../config/connector.php";

$query = "SELECT * FROM showroom_farros_tabel";
$result = mysqli_query($koneksi, $query);

session_start();
if (isset($_SESSION["login"])) {
  $login_as = $_SESSION["email"];
  $result_login = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$login_as'");
  $data_login = mysqli_fetch_assoc($result_login);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand navbar-dark bg-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>">
    <div class="container py-2">
      <div class="navbar-nav">
        <a class="nav-link" style="color: white;" href="../index.php">Home</a>
        <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "./ListCar.php" : print "./Add.php" ?>">MyCar</a>
      </div>
      <div class="d-flex">
        <a href="./Add.php" class="btn btn-light text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" role="button">Add Car</a>
        <div class="dropdown ms-4">
          <button class="btn btn-light dropdown-toggle text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="./Profile.php">Profile</a></li>
            <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="../config/logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section id='form'>
    <div class="container">
      <h1>Tambah Mobil</h1>
      <p>Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="../config/add.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="nama_mobil" placeholder="Masukkan Nama Mobil">
        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="pemilik" name="nama_pemilik" placeholder="Masukkan Nama Pemilik">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="merk_mobil" placeholder="Masukkan Merk Mobil">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" name="tanggal_beli">
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="deskripsi" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="foto_mobil" style="height: 40px;">
        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status_bayar" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status_bayar" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>