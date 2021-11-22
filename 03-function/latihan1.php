<?php
    // fungsi date
    // echo date("l, d-M-Y");
    // echo "<br>";
    // echo time();
    // echo date("l", time());
    
    // mktime
    // membuat sendiri detik
    // jam menit detik bulan tanggal tahun
    echo date("l",mktime(0,0,0,6,1,2001));
    echo "<br>";
    // strtotime
    echo strtotime("01 jun 2001");
?>