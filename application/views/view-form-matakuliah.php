<html>

<head>
	<title>Form Input MataKuliah</title>
</head>
<body>
	<center>
		<form action="<?=  base_url('matakuliah/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>
				<tr>
					<th>Nama MTK</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>
				<tr>
					<th>SKS</th>
					<td>:</td>
					<td>
						<select name="sks" id="sks">
							<option>Pilih sks</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="Submit">
					</td>
				</tr>
			</table>
			
		</form>
	</center>

</body>
</html>