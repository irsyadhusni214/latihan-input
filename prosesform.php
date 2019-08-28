 <fieldset>
<legend align ="center">Hasil Barang</legend>
<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $jalan = $_POST['jalan'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode = $_POST['kode'];
    $nambar = $_POST['nambar'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST ['tanggal'];

    if($jumlah < 5){
        $total = ($harga * $jumlah);
    }
    if($jumlah >= 5){
        $total = ($harga * $jumlah)/0.1;
    }
    if($jumlah >= 10){
        $total = ($harga * $jumlah)/0.2; 
    }
}  
    ?>

<?php
 if($jumlah < 0){
        echo "Maaf Pesanan tidak dapat di proses";
    }else{
    echo "Catatan : <br>";
    echo "Jika Jumlah Barang Lebih Dari 5 Maka Mendapatkan Diskon 10% <br>";
    echo "Jika Jumlah Barang Lebih Dari 10 Maka Mendapatkan Diskon 20% <br><br>";
    echo "Nama : $nama". "<br><br>";
    echo "Jalan/KP :<br> $jalan". "<br><br>";
    echo "Kecamatan :<br> $kecamatan". "<br><br>";
    echo "Kota :<br> $kota". "<br><br>";
    echo "Provinsi :<br> $provinsi". "<br><br>";
    echo "Kode Pos :<br> $kode". "<br><br>";
    echo "Nama Barang : $nambar". "<br><br>";
    echo "Harga Barang : $harga". "<br><br>";
    echo "Jumlah Barang : $jumlah". "<br><br>";
    echo "Deskripsi Barang : $deskripsi". "<br><br>";
    echo "Tanggal Pembelian : $tanggal". "<br><br>";
    echo "Total : $total". "<br>";
    }
   
  
?>


</fildset>