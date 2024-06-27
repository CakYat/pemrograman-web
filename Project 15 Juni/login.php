<?php
    include("dbconnect.php");

    $username = $_POST['username'];
    $password = $_POST['paswd'];

    $rs = $k->Query ("SELECT * FROM mhs WHERE username='$username' AND password='$password' AND active=1");

    if($rs->num_rows == 1)
    {
        $baris = $rs->fetch_assoc();
        session_start();
        $_SESSION['username'] = $baris['username'];
        $_SESSION['id'] = $baris['id'];
        $_SESSION['nama'] = $baris['nama'];
        $_SESSION['password'] = $baris['paswd'];
        $_SESSION['progdi'] = $baris['progdi'];
        $_SESSION['views'] = 0;
        $_SESSION['is_logged_in'] = TRUE;
        header("Location: main.php");
    }
    else
    {
        echo "Username atau password salah";
    }