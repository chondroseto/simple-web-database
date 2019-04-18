<?php
include "../config/koneksi.php";
mysql_query("INSERT INTO konsumen (id_konsumen,password,nama_k,alamat_k,email_k,telp_k) VALUES('$_POST[id_konsumen]','$_POST[password]','$_POST[nama_k]','$_POST[alamat_k]','$_POST[email_k]','$_POST[telp_k]')");
header('location:tampil_admin.php');
?>