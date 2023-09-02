@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('user.update',[$data->id]) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')	
  <label for="name">name</label>
  <input name="name" type="text" value="{{ $data->name }}"/>
  <br>
  <br>
  <label for="email">email</label>
  <input name="email" type="email" value="{{ $data->email }}"/>
  <br>
  <br>
  <label for="password">password</label>
  <input name="password" type="text" value="{{ $backupPass }}"/>
  <br>
  <br>
  <button type="submit">
		Submit
	</button>
</form>