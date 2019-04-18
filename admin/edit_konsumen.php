<?php 
include "../config/koneksi.php"; 
 
$edit=mysql_query("SELECT * FROM konsumen  WHERE id_konsumen='$_GET[id]'"); 
$r=mysql_fetch_array($edit); 
 
echo "<h2>Edit User</h2> 
<form method=POST action=update_konsumen.php> 
<input type=hidden name=id value='$r[id_konsumen]'> 
<table> 
<tr><td>ID</td><td> :  <input type=text name=id_konsumen value='$r[id_konsumen]'></td></tr> 
<tr><td>Nama</td><td> : <input type=text name=nama_k size=30  value='$r[nama_k]'></td></tr> 
<tr><td>Alamat</td><td> : <input type=text name=alamat_k size=30 value='$r[alamat_k]'></td></tr> 
<tr><td>Email</td><td> : <input type=text name=email_k size=30  value='$r[email_k]'></td></tr> 
<tr><td>No. Telepon</td><td> : <input type=text name=telp_k size=30 value='$r[telp_k]'></td></tr> 
<tr><td colspan=2><input type=submit value=Update> 
<input type=button value=Batal onclick=self.history.back()></td></tr> 
</table> 
</form>"; 
?>