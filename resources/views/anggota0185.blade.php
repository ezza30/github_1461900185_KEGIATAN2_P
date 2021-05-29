<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
<button>
	<h3>Data Anggota</h3>
    <h3>1461900185_Ezzania Alfiyanti</h3>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>No Telpon</th>
		</tr>
		@foreach($anggota as $a)
		<tr>
			<td>{{ $a->anggota_nama }}</td>
			<td>{{ $a->anggota_alamat }}</td>
			<td>{{ $a->anggota_jk }}</td>
			<td>{{ $a->anggota_telp }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>