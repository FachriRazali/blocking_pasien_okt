<?php
$koneksi = new mysqli('localhost', 'root', '', 'fachri')
or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");

    header('location:pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header('location:pasien.php');
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");
    header("location:pasien.php");
}



2.
<?php
$koneksi = new mysqli('localhost', 'root', '', 'fachri')
or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])){
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi ->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien','$nmPasien','$jk','$alamat');")

    header('location:pasien.php');
}

if (isset($_GET['idPasien'])){
    $idPasien = $_GET['idPasien'];
    $koneksi -> query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi ->query("UPDATE pasien SET idPasien='$idPasien',nmpasien='$nmPasien', jk='$jk', alamat='$alamat' WHERE idPasien='$idPasien'");
    header("location:pasien.php");
}

?>


3.
<?php
$koneksi = new mysqli('localhost', 'root', '', 'fachrirazali_xipplg1');

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien','$nmPasien,'$jk','$alamat)");
  
    
    header('location:pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header('location:pasien.php');
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    // Gunakan statement prepared untuk mengamankan input
    $stmt = $koneksi->prepare("UPDATE pasien SET nmPasien='$nmPasien', jk='$jk', alamat='$alamat' WHERE idPasien='$idPasien'");
    $stmt->bind_param("ssss", $nmPasien, $jk, $alamat, $idPasien);
    $stmt->execute();
    
    header("location:pasien.php");
}

$koneksi->close();
?>


4. <?php
$koneksi = new mysqli('localhost', 'root', '', 'fachrirazali_xipplg') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    // Validasi dan escape input
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $idPasien, $nmPasien, $jk, $alamat);
    
    if ($stmt->execute()) {
        header('location:pasien.php');
    } else {
        die("Error: " . $stmt->error);
    }
}

if (isset($_GET['idPasien'])) {
    // Validasi dan escape input
    $idPasien = $_GET['idPasien'];
    
    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("DELETE FROM pasien WHERE idPasien = ?");
    $stmt->bind_param("s", $idPasien);
    
    if ($stmt->execute()) {
        header('location:pasien.php');
    } else {
        die("Error: " . $stmt->error);
    }
}

if (isset($_POST['edit'])) {
    // Validasi dan escape input
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("UPDATE pasien SET nmPasien = ?, jk = ?, alamat = ? WHERE idPasien = ?");
    $stmt->bind_param("ssss", $nmPasien, $jk, $alamat, $idPasien);
    
    if ($stmt->execute()) {
        header("location:pasien.php");
    } else {
        die("Error: " . $stmt->error);
    }
}
?>

4. 
<?php
$koneksi = new mysqli('localhost', 'root', '', 'HERIKOXI')
or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");

    header('location:pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header('location:pasien.php');
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");
    header("location:pasien.php");
}

5. 
<html>
    <head>
        <title>My App | Halaman App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h3>Edit Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query ("SELECT * FROM pasien where idPasien = '$_GET[edit]'");

                while ($row = $panggil->fetch_assoc()) {
                    ?>
                <form action = "koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <div class="form-check">
                            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if (($row['jk']) === "Perempuan") {
                                    echo "checked";
                                } ?>> Perempuan
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if (($row['jk']) === "Laki-laki") {
                                    echo "checked";
                                } ?>> Laki-laki
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"<?= $row['alamat'] ?>></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                   <?php } ?>
                </div>
            </div>
       </div>
    </body>

    6. 
    <!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");

                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?= ($row['jk'] === "Perempuan") ? "checked" : "" ?>> Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?= ($row['jk'] === "Laki-laki") ? "checked" : "" ?>> Laki-laki
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"><?= $row['alamat'] ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
7. 
<html>
    <head>
        <title>My App | Halaman App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h3>Edit Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query ("SELECT * FROM pasien where idPasien = '$_GET[edit]'");

                while ($row = $panggil->fetch_assoc()) {
                    ?>
                <form action = "koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <div class="form-check">
                            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if (($row['jk']) === "Perempuan") {
                                    echo "checked";
                                } ?>> Perempuan
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if (($row['jk']) === "Laki-laki") {
                                    echo "checked";
                                } ?>> Laki-laki
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"<?= $row['alamat'] ?>></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                   <?php } ?>
                </div>
            </div>
       </div>
    </body>

    8.<html>
    <head>
        <title>My App | Halaman App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h3>Edit Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query ("SELECT * FROM pasien where idpasien = '$_GET[edit]'");

                while ($row = $panggil->fetch_assoc()) {
                    ?>
                <form action = "koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien" value="<?= $row['idpasien'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmpasien">Nama Pasien</label>
                        <div class="form-check">
                            <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien" value="<?= $row['nmpasien'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if (($row['jk']) === "Perempuan") {
                                    echo "checked";
                                } ?>> Perempuan
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if (($row['jk']) === "Laki-laki") {
                                    echo "checked";
                                } ?>> Laki-laki
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="alamat"<?= $row['alamat'] ?>></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                   <?php } ?>
                </div>
            </div>
       </div>
    </body>