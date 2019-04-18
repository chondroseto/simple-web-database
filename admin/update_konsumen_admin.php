<?php 
include "../config/koneksi.php"; 
 
mysql_query("UPDATE konsumen SET id_konsumen='$_POST[id_konsumen]', nama_k='$_POST[nama_k]', alamat_k='$_POST[alamat_k]', email_k='$_POST[email_k]', telp_k='$_POST[telp_k]'WHERE id_konsumen='$_POST[id]'"); 

header('location:tampil_admin.php');    
?>