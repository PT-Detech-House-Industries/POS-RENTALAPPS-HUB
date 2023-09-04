<h3><a href="/">back</a></h3>
<a href="{{ route('talent.create') }}">tambah data</a>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>Nama</td>
      <td>Umur</td>
      <td>Detail</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </thead>
  @foreach($data as $d)
  <tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->user->name }}</td>
    <td>{{ $d->age }} tahun</td>
    <td><a href="{{ route('talent.detail',[$d->id]) }}">Details</a></td>
    <td><a href="{{ route('talent.edit',[$d->id]) }}">Edit</a></td>
    <td><a href="{{ route('talent.destroy',[$d->id]) }}">Hapus</a></td>
  </tr>
  @endforeach
</table>