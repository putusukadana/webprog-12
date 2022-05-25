<?php
include_once("dbkoneksi2.php");
    $sql = "Select NIM , NAMA , JURUSAN JK , TGLLAHIR FROM mhs ";
    $hsl =  mysqli_query($cnn,$sql);
    $output = mysqli_fetch_all($hsl);
    echo json_encode($output);