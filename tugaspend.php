<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>
</head>
<body>
<fieldset>
    <legend align = "center"><marquee><font color = "red"><h1>Form Pendaftaran</h1></font></marquee></legend></h1>
    <form ACTION = "prosespen.php" METHOD = "POST" NAME = "input">
    
        No Pendaftaran :<br> <input type = "number" name = "no"><br>
        NISN :<br> <input type = "number" name = "nisn"><br>
        Nama :<br> <input type = "text" name = "nama"><br>
        Alamat : <textarea name = "alamat"></textarea><br>
        Tempat lahir :<br> <input type = "text" name = "tempat"><br>
        Tanggal Lahir :<br> <input type = "date" name = "tanggal"><br>
        Asal Sekolah :<br> <input type = "text" name = "asal"><br>
        Jenis kelamin : <input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                        <input type = "radio" name = "jk" value = "perempuan">perempuan<br>
        Jurusan :
        <select name = "jrs">
        <option value = "RPL">RPL</option>
        <option value = "TKR">TKR</option>
        <option value = "TSM">TSM</option>
        </select><br>

         Nama Ayah :<br> <input type = "text" name = "namayah"><br>
         Pekerjaan Ayah :<br> <input type = "text" name = "pekerjaan"><br>
         Nama Ibu :<br> <input type = "text" name = "namabu"><br>
         Pekerjaan Ibu :<br> <input type = "text" name = "pekerjaanbu"><br>
         
         Hobby :<br>
         <input type="checkbox" name = "hob1" value="ngegame" checked>Ngegame<br>
         <input type="checkbox" name = "hob2" value="denger lagu"> Denger Lagu<br>
         <input type="checkbox" name = "hob3" value="ngusep"> Ngusep<br>
        

         Agama : <input type = "radio" name = "agama" value = "Islam">Islam
                 <input type = "radio" name = "agama" value = "Kristen">Kristen
                 <input type = "radio" name = "agama" value = "Budha">Budha
                 <input type = "radio" name = "agama" value = "Konghucu">Konghucu<br>

         <input type = "submit" name = "register" value = "Daftar">
          <input type = "reset" name = "reset" value = "Reset">
    </fieldset>
    </form>
</body>
</html>