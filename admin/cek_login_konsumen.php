<?php
include "../config/koneksi.php"; 

$login=mysql_query("SELECT * FROM konsumen  
WHERE id_konsumen='$_POST[id_konsumen]' AND password='$_POST[password]'"); 
$ketemu=mysql_num_rows($login); 
$r=mysql_fetch_array($login); 
// Apabila username dan password ditemukan (valid) 
if ($ketemu > 0){ 
  session_start(); 
// Untuk memulai session 
  // Daftarkan session ke server
 // session_register("namauser");  
 // session_register("passuser"); 
  // isi dari variabel session 
  $_SESSION[namauser]=$r[id_konsumen]; 
  $_SESSION[passuser]=$r[password]; 
  header('location:tampil_konsumen.php'); 
// Buka hal input berita
} 
else{ 
  echo("Login gagal! username & password tidak benar<BR>"); 
  echo("<A HREF=form_login_konsumen.php>Ulangi Lagi</A>"); 
} 
?>