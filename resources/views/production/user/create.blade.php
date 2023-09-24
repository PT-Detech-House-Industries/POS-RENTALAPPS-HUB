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
    User
    <small data-step="1" data-intro="Langkah 1: Halaman index form Produk Barang">
      <i class="ace-icon fa fa-angle-double-right"></i>
      <!-- top menu &amp; navigation -->
      create page
    </small>
  </h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<!-- PAGE CONTENT BEGINS -->
<div class="row">
  <div class="col-xs-12">
    <h3 class="row header smaller lighter purple">
      <span class="col-sm-6"> INSERT </span><!-- /.col -->

      <span class="col-sm-6">
        <label class="pull-right inline">
          <a href="{{ route('owner.user.index') }}" class="btn btn-info btn-minier">
            Kembali
          </a>
        </label>
      </span><!-- /.col -->
    </h3><!-- /.row -->

  </div>

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
          <form class="form-horizontal" role="form" action="{{ route('owner.user.store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- <legend>Form</legend> -->
            <fieldset>
              <div>
                <label>Name</label>
                <input name="name" type="text" class="form-control" placeholder="name.." value="{{ old('name') }}" />
                <!-- <textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea> -->
              </div>

              <hr />

              <div>
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="email.."
                  value="{{ old('email') }}" />
              </div>

              <hr />

              <div>
                <label for="role">Role</label>
                <select name="role" class="form-control" id="role">
                    <option value="client">Client</option>
                    <option value="talent">Talent</option>
                    <option value="admin">Admin</option>
                    <!-- Tambahkan opsi peran lainnya jika diperlukan -->
                </select>
              </div>

              <hr />

              <div>
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="password.." />
              </div>

              <hr />

              <input name="role" type="hidden" value="user" />

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

<form class="form-horizontal" role="form" action="{{ route('owner.user.store') }}" method="post"
  enctype="multipart/form-data">
  @csrf
  @method('POST')
  <input name="role" type="hidden" value="user" />

  <label for="name">name</label>
  <input name="name" type="text" placeholder="name.." value="{{ old('name') }}" />
  <br>
  <br>
  <label for="email">email</label>
  <input name="email" type="email" placeholder="email.." value="{{ old('email') }}" />
  <br>
  <br>
  <label for="password">password</label>
  <input name="password" type="password" placeholder="password.." />
  <br>
  <br>
  <button type="submit">
    Submit
  </button>
</form>
@endsection

@section('old')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="form-horizontal" role="form" action="{{ route('owner.user.store') }}" method="post"
  enctype="multipart/form-data">
  @csrf
  @method('POST')
  <label for="name">name</label>
  <input name="name" type="text" placeholder="name.." value="{{ old('name') }}" />
  <br>
  <br>
  <label for="email">email</label>
  <input name="email" type="email" placeholder="email.." value="{{ old('email') }}" />
  <br>
  <br>
  <label for="role">Role</label>
  <select name="role" id="role">
    <option value="user">user</option>
    <option value="talent">Talent</option>
    <option value="admin">Admin</option>
    <!-- Tambahkan opsi peran lainnya jika diperlukan -->
  </select>
  <br>
  <br>
  <label for="password">password</label>
  <input name="password" type="password" placeholder="password.." />
  <br>
  <br>
  <button type="submit">
    Submit
  </button>
</form>
@endsection