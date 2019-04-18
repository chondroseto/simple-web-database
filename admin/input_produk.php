<?php
include "../config/koneksi.php";
//Enkripsi password sebelum disimpan di database
mysql_query("INSERT INTO produk (id_produk,nama_p,harga_p) VALUES('$_POST[id_produk]','$_POST[nama_p]','$_POST[harga_p]')");
header('location:tampil_admin.php');
?>