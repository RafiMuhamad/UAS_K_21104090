<?php
 include_once("dbkoneksi2.php");
 $ds = "SELECT NIDN, NAMA, MK, JK, ALAMAT FROM dosen";
 $hsl = mysqli_query($cnn, $ds);
 $output = mysqli_fetch_all($hsl);
 echo json_encode($output);

