<h3><a href="/">back</a></h3>
<a href="{{ route('owner.order.detail.create') }}">tambah data</a>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>Client</td>
      <td>Service</td>
      <td>Talent</td>
      <td>Harga</td>
      <td>Detail</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </thead>
  @foreach($data as $d)
  <tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->client->nick_name }}</td>
    <td>{{ $d->service_talent->service_name }}</td>
    <td>{{ $d->talent->nick_name }}</td>
    <td>{{ $d->price_service }}</td>
    <td><a href="{{ route('owner.order.detail.detail',[$d->id]) }}">Details</a></td>
    <td><a href="{{ route('owner.order.detail.edit',[$d->id]) }}">Edit</a></td>
    <td><a href="{{ route('owner.order.detail.destroy',[$d->id]) }}">Hapus</a></td>
  </tr>
  @endforeach
</table>