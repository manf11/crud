<?php
session_start();
if ( !isset($_SESSION['log']) ){
    header('location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h1>halaman login</h1><br>
    <a href="logout.php" class="btn btn-info" onclick="return confirm('yakin ingin logout?')">logout</a>

</body>
</html>