<?php
require './config/connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_farros_table WHERE id_mobil = $id";

if (mysqli_query($conn, $deletequery)) {
  header("location: ../pages/listcar.php?pesan=delete");
} else {
  header("location: ../pages/listcar.php?pesan=failed");
}
