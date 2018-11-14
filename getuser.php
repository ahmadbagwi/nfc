<?php
session_start();
$idpeserta = intval($_GET['idpeserta']);

    $con = mysqli_connect('localhost','root','','tap');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM data WHERE id = '".$idpeserta."'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
      $nama = $row['nama'];
       $_SESSION['nama'] = $nama;//menyimpan session untuk digunakan kembali sebagai kueri pada file update.php
       $data = '<form>
        Nama <input type="text" name="nama" id="nama" value="'.$nama.'" disabled><br>'.
        'No Kartu <input type="text" name="nokartu" id="nokartu" tabindex="1" onchange="updateUser(this.value)"><br>'.'</form><br>'.'<button name="reset" type="submit"><a href="reset.php">Selesai</a></button>';
        echo $data;
    }

    ?>