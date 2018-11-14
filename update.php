<?php
session_start();
  $nama = $_SESSION['nama'];//mengambil sesion nama untuk kueri where
  $nokartu = $_GET['nokartu'];
  $con = mysqli_connect('localhost','root','','tap');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    $sql="UPDATE data SET nokartu='$nokartu' WHERE nama='$nama'";
    $result = mysqli_query($con,$sql);
   
    if (!$result){
       echo "Gagal update data ".mysql_error();
   } else {
     echo "<h1 style='text-align:center;'>Kartu dengan nomor ".$nokartu."<br>Telah diberikan kepada peserta<br></h1>";
        echo "<h1  style='text-align:center;'>Dengan id peserta nama<br> ".$nama."</h1>";
    }
    mysqli_close($con);
    session_unset();
    session_destroy();
    ?>