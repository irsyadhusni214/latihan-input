<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    <fieldset>
    <legend align ="center">Beli Barang</legend>
    <form ACTION = "prosesform.php" METHOD = "POST" NAME = "input">
    <table>
    <tr>
    <td>Nama :<br><input type = "text" name = "nama" required></td>
    </input>

    <!-- <tr>
    Alamat :<br>
    </tr> -->

    <tr>
   <td>Jalan/KP :<br><input type = "text" name = "jalan"><br></td>
    </tr>

    <tr>
    <td>Kecamatan :<br><input type = "text" name = "kecamatan"><br></td>
    </tr>

    <tr>
    <td>Kota : <br><input type = "text" name = "kota"><br></td>
    </tr>

    <tr>
   <td> Provinsi :<br><input type = "text" name = "provinsi"><br></td>
    </tr>
    <tr>
    <td>Kode Pos :<br><input type = "text" name = "kode"><br></td>
    </tr>

    <tr>
    <td>Nama Barang :<br><input type = "text" name = "nambar"><br></td>
    </tr>
    
    <tr>
    <td>Harga Barang :<br><input type = "text" name = "harga"><br></td>
    </tr>

    <tr>
    <td>Jumlah Barang :<br><input type = "number" name = "jumlah"><br></td>
    </tr>

    <tr>
    <td>Deskripsi :<br><input type = "text" name = "deskripsi"><br></td>
    </tr>

    <tr>
    <td>Tanggal Pembelian :<br><input type = "date" name = "tanggal"></td>
    </tr>
    
    <tr>
    <td><input type = "submit" name = "submit" value = "Submit"></td>
    </tr>

    <tr>
    <td><input type = "reset" name = "reset" value = "Reset"></td>
    </tr>
    </form>
    </fieldset>
    </table>
</body>
</html>