<h1>show kategori suplier</h1>

<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Deskripsi</th>
	</tr>
	@foreach ($data as $d)
	<tr>
		<td>{{ $d->id }}</td>
		<td>{{ $d->nama }}</td>
		<td>{{ $d->deskripsi }}</td>
	</tr>
	@endforeach 
</table>