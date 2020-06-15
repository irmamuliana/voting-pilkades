<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 align="center"> Data Pemilih Tetap Desa Pakuhaji Kecamatan Ngamprah Kabupaten Bandung Barat</h3>
	<table border="1" style="width: 100%" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pemilih</th>
            <th>NIK</th>
            <th>TPS</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1 @endphp
		@foreach($pemilih as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{$p->nama}}</td>
			<td>{{$p->nik}}</td>
			<td>{{$p->tps->nama}}</td>
			<td>{{$p->jenis_kelamin}}</td>
			<td>{{$p->tempat_lahir}}</td>
			<td>{{$p->tanggal_lahir}}</td>
			<td>{{$p->alamat}}</td>
		</tr>
		@endforeach
	</tbody>
	</table>

</body>
</html>

</body>
</html>