<?php 
include "../config/koneksi.php"; 
 
mysql_query("DELETE FROM konsumen WHERE id_konsumen='$_GET[id]'"); 
header('location:tampil_admin.php'); 
?> 
 