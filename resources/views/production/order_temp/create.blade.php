@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('order.temp.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')	
  <input name="role" type="hidden" value="client"/>

  <label for="client">client</label>
  <select name="client_id">
      @foreach($client as $data)
          <option value="{{ $data->id }}">{{ $data->user->name }}</option>
      @endforeach
  </select>
  <br>
  <br>
  <label for="talent">talent</label>
  <select name="talent_id">
      @foreach($talent as $data)
          <option value="{{ $data->id }}">{{ $data->user->name }}</option>
      @endforeach
  </select>
  <br>
  <br>
  <label for="name">service</label>
  <select name="servicetalent_id">
      @foreach($service as $data)
          <option value="{{ $data->id }}">{{ $data->service_name }} - {{ $data->price_service }}</option>
      @endforeach
  </select>
  <br>
  <br>
  <button type="submit">
		Submit
	</button>
</form>