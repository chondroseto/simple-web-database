<?php 
echo "<h2>Tambah User</h2> 
<form method=POST action=input_produk.php> 
<table> 
<tr><td>ID Produk</td> 
<td> : <input type=text name='id_produk'></td></tr> 
<tr><td>Nama</td> 
<td> : <input type=text name='nama_p'></td></tr> 
<tr><td>Harga</td> 
<td> : <input type=text name='harga_p' size=30></td></tr> 
<tr><td colspan=2><input type=submit value=Simpan> 
<input type=button value=Batal onclick=self.history.back()> 
</td></tr> 
</table> 
</form>"; 
?> 
 