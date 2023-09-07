<h3><a href="/">back</a></h3>
<a href="{{ route('order.temp.create') }}">tambah data</a> | 
<a href="{{ route('order.temp.process') }}">process data</a>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>invoice</td>
      <td>start</td>
      <td>end</td>
      <td>total</td>
      <td>status</td>
      <td>Detail</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </thead>
  @foreach($data as $d)
  <tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->invoice }}</td>
    <td>{{ $d->start_service }}</td>
    <td>{{ $d->end_service }}</td>
    <td>{{ $d->total_payment }}</td>
    <td>{{ $d->status_order }}</td>
    <td><a href="{{ route('order.service.detail',[$d->id]) }}">Details</a></td>
    <td><a href="{{ route('order.service.edit',[$d->id]) }}">Edit</a></td>
    <td><a href="{{ route('order.service.destroy',[$d->id]) }}">Hapus</a></td>
  </tr>
  @endforeach
</table>