<?php 
echo "<h2>User</h2> 
<form method=POST action=form_login_konsumen.php> 
<input type=submit value='Login Konsumen'> 
</form>
<form method=POST action=form_login_admin.php> 
<input type=submit value='Login Admin'> 
</form>

<table id='example1' class='table table-bordered table-striped'> 
<tr><th>No</th>
<th>ID</th> 
<th>Nama Produk</th>
<th>Harga</th>
</th></tr>"; 

include "../config/koneksi.php"; 
$tampil=mysql_query("SELECT * FROM produk ORDER BY id_produk");
$no=1; 
while ($r=mysql_fetch_array($tampil)){   
	echo "<tr><td>$no</td>         
		<td>$r[id_produk]</td>         
		<td>$r[nama_p]</td>     
		<td>$r[harga_p]</td>     
		</td></tr>";
		$no++; 
	} 
	echo "</table>"; 

?> 