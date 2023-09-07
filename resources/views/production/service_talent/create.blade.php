@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('owner.service.talent.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')	
  <label for="jenis">Jenis</label>
  <input name="jenis" type="text" placeholder="jenis.." value="{{ old('jenis') }}"/>
  <br>
  <br>
  <label for="nama">Nama</label>
  <input name="nama" type="text" placeholder="nama.." value="{{ old('nama') }}"/>
  <br>
  <br>
  <label for="durasi">Durasi</label>
  <input name="durasi" type="text" placeholder="durasi.." value="{{ old('durasi') }}"/>
  <br>
  <br>
  <label for="harga">Harga</label>
  <input name="harga" type="text" placeholder="harga.." value="{{ old('harga') }}"/>
  <br>
  <br>
  <button type="submit">
		Submit
	</button>
</form>