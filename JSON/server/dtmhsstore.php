<?php
    include_once("dbkoneksi2.php");

    $r["sukses"] = fales;

    if(isset($_POST["nim"])){

    

        $NIM=$_POST["nim"];
        $NAMA= $_POST["nama"];
        $JURUSAN=$_POST["jr"];
        $JK=$_POST["jkel"];
        $TGLLAHIR=$_POST["tgl"];


        $sql = "INSERT INTO mhs(NIM , NAMA , JURUSAN , JK , TGLLAHIR) 
                VALUES('$NIM' , '$NAMA' , '$JURUSAN' , '$JK' , '$TGLLAHIR')";

        $r["sukses"] = mysqli_query($cnn,$sql);

    }
    echo json_encode($r);