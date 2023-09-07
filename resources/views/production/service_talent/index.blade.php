<h3><a href="/">back</a></h3>
<a href="{{ route('owner.service.talent.create') }}">tambah data</a>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>Jenis</td>
      <td>Nama</td>
      <td>Durasi</td>
      <td>harga</td>
      <td>Detail</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </thead>
  @foreach($data as $d)
  <tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->service_sort }}</td>
    <td>{{ $d->service_name }}</td>
    <td>{{ $d->duration }}</td>
    <td>{{ $d->price_service }}</td>
    <td><a href="{{ route('owner.service.talent.detail',[$d->id]) }}">Details</a></td>
    <td><a href="{{ route('owner.service.talent.edit',[$d->id]) }}">Edit</a></td>
    <td><a href="{{ route('owner.service.talent.destroy',[$d->id]) }}">Hapus</a></td>
  </tr>
  @endforeach
</table>