<?php 
include "../config/koneksi.php";    
mysql_query("UPDATE produk SET id_produk='$_POST[id_produk]',                           
					nama_p='$_POST[nama_p]',                                  
							harga_p='$_POST[harga_p]'						
						WHERE id_produk='$_POST[id]'"); 
header('location:tampil_admin.php');    
?>