<?php
    include("dbconnect.php");

    $users = $_POST['username'];
    $paswd = ['paswd'];
    $nama = $_POST['nama'];
    $progdi = $_POST['progdi'];

    $insert = $k->query("INSERT INTO users (username,nama,email,paswd,progdi,active) VALUES ('".$user."','".$nama."','".$paswd."',1)");
    if($insert)
    {
       header("Location: default.php");
    }
    else
    {
        echo "insert data gagal";
    }