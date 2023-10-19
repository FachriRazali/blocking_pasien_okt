<?php
$koneksi = new mysqli('localhost', 'root', '', 'fachrirazali_xipplg1')
or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idpasien, nmpasien, jk, alamat) values ('$idpasien', '$nmpasien', '$jk', '$alamat')");

    header('location:pasien.php');
}

if (isset($_GET['idpasien'])) {
    $idpasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idpasien = '$idpasien'");
    header("location:pasien.php");
}


if (isset($_POST['edit'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

   $koneksi ->query("UPDATE pasien SET nmpasien='$nmpasien', jk='$jk', alamat='$alamat', WHERE idpasien='$idpasien'");
    header("location:pasien.php");
}

//UPDATE pasien SET nmpasien='$nmpasien', jk='$jk', alamat='$alamat' WHERE  idpasien=$idpasien; COMMMIT; 