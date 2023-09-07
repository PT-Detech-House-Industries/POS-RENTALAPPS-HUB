<h3><a href="/">back</a></h3>
<a href="{{ route('owner.user.create') }}">tambah data</a>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>Email</td>
      <td>Role</td>
      <td>Detail</td>
      <td>Edit</td>
      <td>Hapus</td>
    </tr>
  </thead>
  @foreach($data as $d)
  <tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->email }}</td>
    <td>{{ $d->role }}</td>
    <td><a href="{{ route('owner.user.detail',[$d->id]) }}">Details</a></td>
    <td><a href="{{ route('owner.user.edit',[$d->id]) }}">Edit</a></td>
    <td><a href="{{ route('owner.user.destroy',[$d->id]) }}">Hapus</a></td>
  </tr>
  @endforeach
</table>