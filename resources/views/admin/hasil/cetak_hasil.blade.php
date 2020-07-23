<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 align="center">Hasil Pemilihan Calon Kepala Desa Pakuhaji Kecamatan Ngamprah Kabupaten Bandung Barat</h3>
	<hr />
	<br>

	<p>Berdasarkan hasil penghitungan suara yang dilaksanakan pada hari .......... tanggal ..... / ..... / ..... Jam ...... wib dengan perolehan suara sebagai berikut:</p>

			<table border="1" style="width: 100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pasangan Calon</th>
			            <th>Hasil</th>
					</tr>
				</thead>
				<tbody>
					@foreach($paslons as $paslon)
					<tr>
						<td>{{ $loop->iteration}}</td>
			            <td>{{ $paslon->nama_kepala}} & {{ $paslon->nama_wakil}}</td>
			            <td>{{ hitung_suara($paslon->id)==null?0:hitung_suara($paslon->id) }} Suara</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<br><br>
			<p align="right">Pakuhaji, ..... / ..... / .....</p>
			<p align="right">Ketua Panitia Pemilihan Kepala Desa Pakuhaji</p>
			<br><br>
			<p align="right">(............................)</p>
	</body>
</html>