<h1>index kategori produk</h1>

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
		<td>
            <form action="{{ route('kategori.produk.destroy',$d->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('kategori.produk.show',$d->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('kategori.produk.edit',$d->id) }}">Edit</a>
                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
	</tr>
	@endforeach 
</table>