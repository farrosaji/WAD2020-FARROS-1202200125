<?php
require '../config/connector.php';
session_start();

$query = "SELECT * FROM showroom_farros_tabel";
$result = mysqli_query($koneksi, $query);

if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == 'succes') {
    echo "<script>alert('successfuly added to database ')</script>";
  } else if ($_GET['pesan'] == 'update') {
    echo "<script>alert('Data berhasil diupdate')</script>";
  } else if ($_GET['pesan'] == 'delete') {
    echo "<script>alert('Data berhasil dihapus')</script>";
  } else if ($_GET['pesan'] == 'failed') {
    echo "<script>alert('Gagal')</script>";
  }
}
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
  <title>List Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
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
 
  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room FARROS_1202200125</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../asset/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
    </div>
  </section>
 
  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p>Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>