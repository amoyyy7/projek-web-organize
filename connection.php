<?php
class config {
    function latihan(){
    global $namadariphp;
    $namadariphp = "adam";
    $namavariabel = "<h1> halo dear! </h1>";
    echo $namavariabel;

    }

    function koneksi() {
        $koneksi = mysqli_connect("localhost","");
        mysqli_select_db($koneksi,"siswa_db");


        if($koneksi) {
            echo "<br> anda berhasil terhubung ke database! <br>";
        }else {
            mysqli_connect_error();
        }
        return $koneksi;
    }
}




?>