<?php
// pengulangan
// for | while | do..while | foreach

// For
// for($i = 0; $i < 5; $i++){
//     echo "Hello world <br>";
// }

// While
// $i = 0;
// while($i < 5){
//     echo "Hello world $i <br>";
// $i++;
// }

// Do while
// $i = 0;
// do{
//     echo "Hello world";
// $i++;
// }while($i<5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i<=5; $i++) : ?>
            <?php if($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for($j=1; $j<=5; $j++) : ?>
                    <td> <?= "$i,$j"; ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>