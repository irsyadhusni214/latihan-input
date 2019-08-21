<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengolahan form</title>
</head>
<body>
    <form action = "" method = "post" name= "input">
        Nama Anda  : <input type = "text" name = "nama" required><br>
        nilai 1    : <input type = "text" name = "nil1" required><br>
        nilai 2    : <input type = "text" name = "nil2" required><br>
        <input type = "submit" name ="input" value="Simpan">
    </form>
</body>
</html>

<?php
    if(isset($_POST['input'])){
        $nama = $_POST['nama'];
        $nil1 = $_POST['nil1'];
        $nil2 = $_POST['nil2'];
        $hsl = ($nil1 + $nil2)/2;
        echo "Nama Anda  : <b>$nama</b> <br>";
        echo "Nilai 1  : <b>$nil1</b> <br>";
        echo "Nilai 2  : <b>$nil2</b> <br>";
        echo "Nilai Rata Rata : <b>$hsl</b>";
    }
?>