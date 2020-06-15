<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2 align="center">Hasil Pemilihan Calon Kepala Desa Pakuhaji Kecamatan Ngamprah Kabupaten Bandung Barat</h2>
			<table border="1" style="width: 100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pasangan Calon</th>
			            <th>Hasil</th>
					</tr>
				</thead>
				<tbody>
					@foreach($paslon as $paslon)
					<tr>
						<td>{{ $loop->iteration}}</td>
			            <td>{{ $paslon->nama_kepala}} & {{ $paslon->nama_wakil}}</td>
			            <td>{{ $paslon->hasil}} Suara</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	</body>
</html>