<?php
include "../config/koneksi.php"; 

$login=mysql_query("SELECT * FROM login  
WHERE id_user='$_POST[id_user]' AND password='$_POST[password]'"); 
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
  $_SESSION[nama]=$r[id_user]; 
  $_SESSION[pass]=$r[password]; 
  header('location:tampil_admin.php'); 
// Buka hal input berita
} 
else{ 
  echo("Login gagal! username & password tidak benar<BR>"); 
  echo("<A HREF=form_login_admin.php>Ulangi Lagi</A>"); 
} 
?>