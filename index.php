<!-- 
 nama = fahmi aziz harianto
 kelas = x1 pplg 3
  -->

<?php

require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hey dear!</h1>
    <script src="hello.js"></script>
    <?php
    global $namadariphp;
    $panggil =new config();
    $panggil->latihan();
    echo "nama: " . $namadariphp
    ?>
    <br>
    <img src="download.jpg" alt="">
</body>
</html>


