<?php 
session_start();
include "../config/koneksi.php"; 
$tampil=mysql_query("SELECT * FROM konsumen where id_konsumen=$_SESSION[namauser]");
$re=mysql_fetch_array($tampil);
echo "
<form method=POST action=user.php> 
<input type=submit value='Log Out'> 
</form> 
<h2>Data Konsumen</h2>  
<table id='example1' class='table table-bordered table-striped'> 
<th>ID</th><td>$re[id_konsumen]</td></tr> 
<th>Nama Lengkap</th><td>$re[nama_k]</td></tr>
<th>Alamat</th><td>$re[alamat_k]</td></tr>
<th>Email</th><td>$re[email_k]</td></tr>
<th>No. Telepon</th><td>$re[telp_k]</td></tr>
<td><a href=edit_konsumen.php?id=$re[id_konsumen]>Edit</a> </td>
</th></tr>
</table>";

echo "<h2>Produk</h2> 

<table id='example1' class='table table-bordered table-striped'> 
<tr>
<th>No</th>
<th>ID</th> 
<th>Nama</th>
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
