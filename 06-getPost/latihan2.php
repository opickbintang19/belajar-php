<?php 
    if( !isset($_GET["nama"]) || 
        !isset($_GET["npm"]) || 
        !isset($_GET["email"]) || 
        !isset($_GET["jurusan"])
        ){
        // redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sandhika 1</title>
</head>
<body>
    <ul>
        <li>Nama    : <?= $_GET["nama"]; ?></li>
        <li>NPM     : <?= $_GET["npm"]; ?></li>
        <li>Email   : <?= $_GET["email"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>