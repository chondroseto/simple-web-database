<?php 
echo "<h2>Tambah Konsumen</h2> 
<form method=POST action=input_konsumen.php> 
<table> 
<tr><td>ID</td> 
<td> : <input type=text name='id_konsumen'></td></tr> 
<tr><td>Passowrd</td> 
<td> : <input type=text name='password'></td></tr> 
<tr><td>Nama Lengkap</td> 
<td> : <input type=text name='nama_k'></td></tr> 
<tr><td>Alamat</td> 
<td> : <input type=text name='alamat_k' size=30></td></tr> 
<tr><td>E-mail</td> 
<td> : <input type=text name='email_k' size=30></td></tr> 
<tr><td>No. Telepon</td> 
<td> : <input type=text name='telp_k' size=30></td></tr> 
<tr><td colspan=2><input type=submit value=Simpan> 
<input type=button value=Batal onclick=self.history.back()> 
</td></tr> 
</table> 
</form>"; 
?> 
 