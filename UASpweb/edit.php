<?php
session_start();
if($_SESSION['is_logged_in']!=TRUE)
{
    header("Location:default.php");
}
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k -> query("SELECT * FROM users WHERE id = '".$id."'");
    if($data -> num_rows == 1)
    {
        $datauser = $data -> fetch_assoc();
        ?>
        <form acrion ="editaction.php" menthod=  "post">
            <input type = " text" name = "Name" required placeholder="Name"value="<?php echo $datauser
            ['Name']?>">
             <input type = " text" name = "Company" required placeholder="Company"value="<?php echo $datauser
            ['Company']?>">
             <input type = " email" name = "city" required placeholder="City"value="<?php echo $datauser
            ['City']?>">
             <input type = " password" name = "Progress" required placeholder="Progress"value="<?php echo $datauser
            ['Progress']?>">
            <input type = " text" name = "Created" required placeholder="Created"value="<?php echo $datauser
            ['Created']?>">
        </form>
        <?php

    }
    else{
        echo"data tidak ditemukan";
    }