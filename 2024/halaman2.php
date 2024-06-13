<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header('location: form_login.php');
        exit();
    }
    echo $_SESSION['nama'];
    ?>
</body>
</html>