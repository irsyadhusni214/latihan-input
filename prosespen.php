<?php
if(isset($_POST['register'])){
    $nopenda = $_POST['no'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempatlhr = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $asal = $_POST['asal'];
    $jenis = $_POST['jk'];
    $namayah = $_POST['namayah'];
    $pekerjaanyah = $_POST['pekerjaan'];
    $namabu = $_POST ['namabu'];
    $pekerjaanbu = $_POST['pekerjaanbu'];
    $agama = $_POST['agama'];

    echo "No Pendaftaran anda : $nopenda". "<br><br>";
    echo "Nisn anda : $nisn". "<br><br>";
    echo "Nama anda : $nama". "<br><br>";
    echo "Alamat anda : $alamat". "<br><br>";
    echo "Tempat lahir anda : $tempatlhr". "<br><br>";
    echo "Tanggal lahir anda : $tanggal". "<br><br>";
    echo "Asal sekolah anda : $asal". "<br><br>";
    echo "Jenis kelamin anda : $jenis". "<br><br>";
       if(isset($_POST['register'])){
    echo "Hobby anda adalah : <br>";
    if(isset($_POST['hob1'])){
        echo "- " . $_POST['hob1'] . "<br><br>";
    }
    if(isset($_POST['hob2'])){
        echo "- " . $_POST['hob2'] . "<br><br>";
    }
    if(isset($_POST['hob3'])){
        echo "- " . $_POST['hob3'] . "<br><br>";
    }
}
    echo "Agama anda : $agama";
    echo "Nama ayah anda : $namayah". "<br><br>";
    echo "Pekerjaan ayah anda : $pekerjaanyah". "<br><br>";
    echo "Nama ibu anda : $namabu". "<br><br>";
    echo "Pekerjaan ibu anda : $pekerjaanbu". "<br><br>";

 
}
?>