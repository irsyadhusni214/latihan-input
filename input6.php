<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih jurusan</title>
</head>
<body>
    <form ACTION="proses6.php" METHOD = "POST" NAME = "input">
        <h2>Pilih Jurusan Anda : </h2>
                <input type = "radio" name = "jurusan" value="TI" checked>
            Teknik Informatika<br>
                <input type = "radio" name = "jurusan" value="SI">
            Sistem Informasi<br>
                <input type = "radio" name = "jurusan" value="SK">
            Sistem Komputer<br>
                <input type = "radio" name = "jurusan" value="KA">
            Komputerisasi Akuntansi<br>
                <input type = "submit" name = "pilih" value= "Pilih"> 
    </form>
</body>
</html>