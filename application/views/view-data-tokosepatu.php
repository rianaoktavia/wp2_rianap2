<html>

<head>
	<title>Output Toko Sepatu</title>

</head>

<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Toko Sepatu
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Nama Pembeli</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td>
					<?= $nohp; ?>
				</td>
			</tr>
			<tr>
				<td>Merek Sepatu</td>
				<td>:</td>
				<td>
					<?= $merek; ?>
				</td>
			</tr>
			<tr>
				<td>Ukuran Sepatu</td>
				<td>:</td>
				<td>
					<?= $ukuran; ?>
				</td>
			</tr>
			<tr>
				<td>Harga Sepatu</td>
				<td>:</td>
				<td>
					<?= $harga; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url ('tokosepatu'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>