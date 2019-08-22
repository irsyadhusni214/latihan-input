<?php
if(isset($_POST['register'])){
    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    $c = $_POST['jk'];
    $d = $_POST['agama'];
    $e = $_POST['email'];

    echo "Nama : ".$a."<br>";
    echo "Alamat : ".$b."<br>";
    echo "Jenis Kelamin : ".$c."<br>";
    echo "Agama : ".$d."<br>";
    echo "Email : ".$e."<br>";

    $user = $_POST['email'];
    $pass = $_POST['password'];
    if($user == "irsyadaqiila27@gmail.com" && $pass == "123"){
        echo "Status Aktif";
    }else{
        echo "Status Tidak Aktif";
    }
}
?>