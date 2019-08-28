<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form ACTION="" METHOD="GET">
    <label for="">Masukan Jumlah</label>
    <input type="number" name = "jumlah" required>
    <br>
    <input type = "submit" name = "submit" value ="Simpan">
    <br>
    </form>
    <?php
    if(isset($_GET['submit'])){
        $jumlah=$_GET['jumlah'];
        for($a = 1; $a <= $jumlah; $a++){
        ?>
        <form ACTION = "formarraypro.php" METHOD="POST">
            <label for="">Nama</label>
            <input type="text" name = "nama[]" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas[]" required><br>
            <br>
            <br>

        <?php } ?>
        <input type="submit" name="sbm" value="Simpan">
        <input type="reset" value="Reset">
        </form>
    <?php } ?>
    
    </fieldset>
</body>
</html>