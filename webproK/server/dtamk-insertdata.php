<?php
    $h["error"] = 1; 
    if(isset($_POST["txkode"])){
        include_once("dbkoneksi2.php");
        $kode = $_POST["txkode"];
        $matkul = $_POST["txmatkul"];
        $dosen =  $_POST["txdosen"];
        $sks =  $_POST["txsks"];

        $sql = "INSERT INTO mk(KODE_MK,NAMA_MK,NAMA_DOSEN,SKS) VALUES('$kode','$matkul','$dosen','$sks')";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);
