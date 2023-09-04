@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('talent.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input name="name" type="text" value="{{ $data->user->name }}" />
    <br><br>

    <label for="email">Email</label>
    <input name="email" type="email" value="{{ $data->user->email }}" />
    <br><br>

    <label for="password">Password</label>
    <input name="password" type="text" value="{{ $backupPass }}" />
    <br><br>

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <!-- Tambahkan opsi peran lainnya jika diperlukan -->
    </select>
    <br>
    <br>

    <label for="fullname">Full Name</label>
    <input name="fullname" type="text" value="{{ $data->fullname }}" />
    <br><br>

    <label for="nick_name">Nick Name</label>
    <input name="nick_name" type="text" value="{{ $data->nick_name }}" />
    <br><br>

    <label for="birthday">Birthday</label>
    <input name="birthday" type="date" value="{{ $data->birthday }}" />
    <br><br>

    <label for="phone">Phone</label>
    <input name="phone" type="text" value="{{ $data->phone }}" />
    <br><br>

    <label for="profile_picture">Profile Picture</label>
    <input name="profile_picture" type="file" />
    <br><br>

    <button type="submit">Submit</button>
</form>
