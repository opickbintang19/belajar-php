<?php
    // $_GET
    // $_GET["nama"] = "Sandhika";
    // $_GET["nrp"] = "1908";
    // var_dump($_GET);
    $mahasiswa = [
        [
        "nama" => "Sandhika Galih",
        "npm" => "11",
        "email" => "husain@gmail.com",
        "jurusan" => "Informatika"
        ],
        [
            "nama" => "Husain",
            "npm" => "10",
            "email" => "husain_taufiq@gmail.com",
            "jurusan" => "Informatika"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&npm=<?=$mhs["npm"]; ?>&email=<?=$mhs["email"];?>&jurusan=<?=$mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>