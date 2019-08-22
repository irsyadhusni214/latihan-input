<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
</head>
<body>
    <form ACTION = "prosesreg.php" METHOD = "POST" NAME = "input">
    <legend>Form Registrasi</legend>
    <fieldset>
        Nama :<br> <input type = "text" name = "nama"><br>
        Alamat :<br> <input type = "text" name = "alamat"><br>
        Jenis Kelamin :<br> <input type = "text" name = "jk"><br>
        Agama :<br> <input type = "text" name = "agama"><br>
        Email :<br> <input type = "text" name = "email"><br>
        Password :<br> <input type = "password" name = "password"><br>
        <input type = "submit" name = "register" value = "Registrasi">
    </form>
    </fieldset>
</body>
</html>