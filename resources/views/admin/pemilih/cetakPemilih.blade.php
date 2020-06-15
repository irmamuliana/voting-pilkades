<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0" style="width: 40%" align="center">
		<tr>
			<td><img src="{{asset('assets/img/kpu.png')}}" style="width: 60px;"></td>
			<td>
				Kartu Pemilihan Kepala Desa Pakuhaji<br> Kecamatan Ngamprah Kabupaten Bandung Barat
			</td>
		</tr>
	</table>

	<table border="1" cellspacing="0" style="width: 40%" align="center">
		<tr>
			<td>
				<table>
					<tr>
						<td>Nama</td> <td>:</td> <td>{{$pemilih->nama}}</td>
						<td rowspan="5" valign="top">{!! QrCode::size(160)->generate( $pemilih->nik ); !!}</td>
					</tr>

					<tr>
						<td>NIK</td> <td>:</td> <td>{{$pemilih->nik}}</td>
					</tr>
					
					<tr>
						<td>TPS</td> <td>:</td> <td>{{$pemilih->tps->nama}}</td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td> <td>:</td> <td>{{$pemilih->jenis_kelamin}}</td>
					</tr>

					<tr>
						<td>Alamat</td> <td>:</td> <td>{{$pemilih->alamat}}</td>
					</tr>

					
				</table>
			</td>
		</tr>
	</table>
	
</body>
</html>

</body>
</html>