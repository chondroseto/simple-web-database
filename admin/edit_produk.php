<?php 
include "../config/koneksi.php"; 
 
$edit=mysql_query("SELECT * FROM produk  WHERE id_produk='$_GET[id]'"); 
$r=mysql_fetch_array($edit); 
 
echo "<h2>Edit User</h2> 
<form method=POST action=update_produk.php> 
<input type=hidden name=id value='$r[id_produk]'> 
<table> 
<tr><td>ID Produk</td><td> :  <input type=text name=id_produk value='$r[id_produk]'></td></tr> 
<tr><td>Nama</td><td> : <input type=text name=nama_p size=50  value='$r[nama_p]'></td></tr> 
<tr><td>Harga</td><td> : <input type=text name=harga_p size=20 value='$r[harga_p]'></td></tr> 
<tr><td colspan=2><input type=submit value=Update> 
<input type=button value=Batal onclick=self.history.back()></td></tr> 
</table> 
</form>"; 
?>