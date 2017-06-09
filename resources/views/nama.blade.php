<!DOCTYPE html>
<html>
<head>
	<title>Nama</title>
</head>
<body>
	<h1>Daftar Nama</h1>
@foreach ($nm as $nama)
	<li>{{$nama}}</li>

	@endforeach
</body>
</html>