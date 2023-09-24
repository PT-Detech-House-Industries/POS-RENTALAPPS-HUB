@if (Auth::user()->hasRole('owner') )
<!-- import-template -->
@extends('layouts.ace')

<!-- main -->
@push('header')
<!-- none -->
@endpush

@section('page-header')
<!-- page-header -->
<div class="page-header">
  <h1>
    Client
    <small data-step="1" data-intro="Langkah 1: Halaman index form Produk Barang">
      <i class="ace-icon fa fa-angle-double-right"></i>
      <!-- top menu &amp; navigation -->
      Edit page
    </small>
  </h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<!-- PAGE CONTENT BEGINS -->
<div class="row">
  <div class="col-xs-12">
    <h3 class="row header smaller lighter purple">
      <span class="col-sm-6"> EDIT </span><!-- /.col -->

      <span class="col-sm-6">
        <label class="pull-right inline">
          <a href="{{ route('owner.client.detail',[$data->id]) }}" class="btn btn-info btn-minier">
            Kembali
          </a>
        </label>
      </span><!-- /.col -->
    </h3><!-- /.row -->

  </div>

  <div class="space-4"></div>
  <div class="space-4"></div>
  <div class="space-4"></div>

  @if ($errors->any())
  <div class="col-xs-12">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
      </button>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
  
  <div class="col-xs-12">
    <div class="widget-box">
      <div class="widget-header">
        <h4 class="widget-title">Form</h4>

        <!-- <div class="widget-toolbar">
          <a href="#" data-action="collapse">
            <i class="ace-icon fa fa-chevron-up"></i>
          </a>

          <a href="#" data-action="close">
            <i class="ace-icon fa fa-times"></i>
          </a>
        </div> -->
      </div>

      <div class="widget-body">
        <div class="widget-main no-padding">
          <form class="form-horizontal" role="form" action="{{ route('owner.talent.update', [$data->id]) }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- <legend>Form</legend> -->
            <fieldset>

              <div>
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" value="{{ $data->user->name }}" />
              </div>

              <hr />

              <div>
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" value="{{ $data->user->email }}" />
              </div>

              <hr />

              <div>
                <label for="password">Password</label>
                <input name="password" type="text" class="form-control" value="{{ $backupPass }}" />
              </div>

              <hr />

              <div>
                <label>Jenis Kelamin</label>
                <select class="form-control" name="gender" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <!-- Tambahkan opsi peran lainnya jika diperlukan -->
                </select>
              </div>

              <hr />

              <div>
                <label for="fullname">Full Name</label>
                <input name="fullname" type="text" class="form-control" value="{{ $data->fullname }}" />
              </div>

              <hr />

              <div>
                <label for="nick_name">Nick Name</label>
                <input name="nick_name" type="text" class="form-control" value="{{ $data->nick_name }}" />
              </div>

              <hr />

              <div>
                <label for="birthday">Birthday</label>
                <input name="birthday" type="date" class="form-control" value="{{ $data->birthday }}" />
              </div>

              <hr />

              <div>
                <label for="phone">Phone</label>
                <input name="phone" type="text" class="form-control" value="{{ $data->phone }}" />
              </div>

              <hr />

              <div>
                <label for="profile_picture">Profile Picture</label>
                <input name="profile_picture" type="file" />
                <!-- <input name="profile_picture" type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a> -->
              </div>

              <hr />

              <!-- <label class="pull-right">
                <input type="checkbox" class="ace" />
                <span class="lbl"> check me out</span>
              </label> -->

            </fieldset>

            <div class="form-actions center">
              <button type="submit" class="btn btn-sm btn-success">
                Submit
                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div><!-- /.span -->
</div>

<!-- PAGE CONTENT ENDS -->
@endsection
@endif

@section('main-old')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" action="{{ route('owner.client.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
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
@endsection
