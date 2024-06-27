<?php
   $user = $_POST['username'];
   $paswd = 'paswd';
   $email = $_POST['email'];
   $nama = $_POST['nama'];
   $id = $_POST['userid'];
   $progdi = $_POST['progdi'];

   if($_POST['password'] == "")
   {
      $k->query("query update tanpa password");
   }
   else
   {
      $paswd =($_POST['paswd']);
      $k->query("query update dengan password");
   }
   header("location: main.php");