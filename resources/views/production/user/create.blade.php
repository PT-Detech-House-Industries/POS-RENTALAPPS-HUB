@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')	
  <label for="name">name</label>
  <input name="name" type="text" placeholder="name.." value="{{ old('name') }}"/>
  <br>
  <br>
  <label for="email">email</label>
  <input name="email" type="email" placeholder="email.." value="{{ old('email') }}"/>
  <br>
  <br>
  <label for="role">Role</label>
  <select name="role" id="role">
    <option value="client">Client</option>
    <option value="talent">Talent</option>
    <option value="admin">Admin</option>
    <!-- Tambahkan opsi peran lainnya jika diperlukan -->
  </select>
  <br>
  <br>
  <label for="password">password</label>
  <input name="password" type="password" placeholder="password.."/>
  <br>
  <br>
  <button type="submit">
		Submit
	</button>
</form>