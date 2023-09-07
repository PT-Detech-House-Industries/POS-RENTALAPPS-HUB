@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('owner.client.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')	
  <input name="role" type="hidden" value="client"/>

  <label for="name">name</label>
  <input name="name" type="text" placeholder="name.." value="{{ old('name') }}"/>
  <br>
  <br>
  <label for="email">email</label>
  <input name="email" type="email" placeholder="email.." value="{{ old('email') }}"/>
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