<?php 
    // $mahasiswa = [
    // ["Sandhika Galih","19081010075","sandhika@gmail.com","Informatika"],
    // ["Husain T","001","husain@gmail.com","Informatika"]
    // ];

    // array asosiatig
    $mahasiswa = [
        [
        "nama" => "Sandhika Galih",
        "npm" => "10",
        "email" => "husain@gmail.com",
        "jurusan" => "Informatika"
        ],
        [
            "nama" => "Sandhika Galih",
            "npm" => "10",
            "email" => "husain@gmail.com",
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
    <title>Document</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NPM :<?= $mhs["npm"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>