<?php 
echo "
<form method=POST action=user.php> 
<input type=submit value='Log Out'> 
</form> 
<h2>Produk</h2> 
<form method=POST action=form_produk.php> 
<input type=submit value='Tambah Produk'> 
</form> 
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
		<td><a href=edit_produk.php?id=$r[id_produk]>Edit</a> |        
		<a href=hapus_produk.php?id=$r[id_produk]>Hapus</a>   
		</td></tr>";
		$no++; 
	} 
	echo "</table>"; 
	
echo "<h2>Konsumen</h2>  
<form method=POST action=form_konsumen.php> 
<input type=submit value='Tambah Konsumen'> 
</form> 
<table id='example1' class='table table-bordered table-striped'> 
<tr><th>No</th>
<th>ID</th> 
<th>Nama Lengkap</th>
<th>Alamat</th>
<th>Email</th>
<th>No. Telepon</th>
<th>Aksi</th>
</th></tr>";	
include "../config/koneksi.php"; 
$tampil=mysql_query("SELECT * FROM konsumen ORDER BY id_konsumen");
$no=1; 
while ($r=mysql_fetch_array($tampil)){   
	echo "<tr><td>$no</td>         
		<td>$r[id_konsumen]</td>         
		<td>$r[nama_k]</td>     
		<td>$r[alamat_k]</td>     
		<td><a href=mailto:$r[email_k]>$r[email_k]</a></td> 
		<td>$r[telp_k]</td>     
		<td><a href=edit_konsumen_admin.php?id=$r[id_konsumen]>Edit</a> |        
		<a href=hapus_konsumen.php?id=$r[id_konsumen]>Hapus</a>   
		</td></tr>";
		$no++; 
	} 
	echo "</table>"; 
?> 