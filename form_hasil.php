<?php
include "form_inc.php";
if (($nama=="Imelda Audina")&&($email=="audinaimelda@gmail.com")){
        printf ("Selamat $nama, Anda Berhasil Masuk.");
        echo "<br>";
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date ("d-m-y");
        $waktu = date ("H:i:sa");
        echo date ("d-m-y, H:i:s a");
}
else{
    printf ("Nama atau Email Anda Salah.");
}
echo "<br>";
?>