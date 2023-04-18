<!DOCTYPE html>
<html>
    <head>
        <title>FORM BIODATA</title>
    </head>
    <body>
        <h1> Masukkan Biodata </h1>
        <form method="POST" action="biodata_hasil.php">
            Nama : <input type="text" name="nama"> </br>
            Alamat : <input type="text" name="alamat"> </br>
            Jenis Kelamin :
            <input type="radio" name="jk" value="laki-laki"/> Laki - Laki
            <input type="radio" name="jk" value="perempuan" /> Perempuan
            </br>
            Tanggal Lahir: <input type=date name=tanggal> </br>
            Hobi :<input type="text" name="hobi"> </br>
            <input type="submit" value="proses">
        </form>
    </body>
</html>