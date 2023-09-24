<!-- import-template -->
@extends('layouts.ace')
@section('title','Order Service Index')

<!-- header -->
@push('header')
<!-- none -->
@endpush

<!-- breadcrumbs -->
@section('breadcrumbs')
<!-- step -->
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/">Dashboard</a>
		</li>

        <li class="active">Service Order</li>

		<!-- <li>
            <a href="#">Other Pages</a>
        </li>
        <li class="active">Blank Page</li> -->
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
@endsection

<!-- page-header -->
@section('page-header')
<!-- none -->
@endsection

<!-- main -->
@section('main')
<!-- form-tambah -->
<div class="row">
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Temp Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <!-- <tr>
                        <th class="detail-col">Detail</th>
                        <th>Jenis</th>
                        <th>Ukuran</th>
                        <th>Harga/Lonjor</th>
                        <th class="hidden-480">Berat (Kg)</th>
                        <th class="hidden-480">Status</th>
                        <th>Edit</th>
                        <th class="hidden-xs hidden-sm">Hapus</th>
                    </tr> -->

                            <tr>
                                <th>ID</th>
                                <th class="hidden-xs hidden-sm">Client</th>
                                <th>Talent</th>
                                <th class="hidden-480">Harga</th>
                                <th class="hidden-480">Jumlah</th>
                                <th>Subtotal</th>
                                <th>Hapus</th>
                                <!-- <th>Harga Jual</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Update
                                </th>
                                <th class="hidden-480">Status</th>
                                <th class="hidden-480">Edit</th>
                                <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.temp order -->

    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Detailnya Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">

                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="form-group col-sm-3">
                            <button>Tambah</button>
                        </div>
                    </form>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Invoice</th>
                                <th class="hidden-480">Tgl Mulai</th>
                                <th class="hidden-480">Tgl Selesai</th>
                                <th>Total</th>
                                <th>Detail</th>
                                <!-- <th>Harga Jual</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Update
                                    </th>
                                    <th class="hidden-480">Status</th>
                                    <th class="hidden-480">Edit</th>
                                    <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.resume order -->
</div><!-- /.row -->
</div>
<!-- tabel-service -->
<div class="row">
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Temp Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <!-- <tr>
                        <th class="detail-col">Detail</th>
                        <th>Jenis</th>
                        <th>Ukuran</th>
                        <th>Harga/Lonjor</th>
                        <th class="hidden-480">Berat (Kg)</th>
                        <th class="hidden-480">Status</th>
                        <th>Edit</th>
                        <th class="hidden-xs hidden-sm">Hapus</th>
                    </tr> -->

                            <tr>
                                <th>ID</th>
                                <th class="hidden-xs hidden-sm">Client</th>
                                <th>Talent</th>
                                <th class="hidden-480">Harga</th>
                                <th class="hidden-480">Jumlah</th>
                                <th>Subtotal</th>
                                <th>Hapus</th>
                                <!-- <th>Harga Jual</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Update
                                </th>
                                <th class="hidden-480">Status</th>
                                <th class="hidden-480">Edit</th>
                                <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.temp order -->

    <div class="col-xs-12 col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Detailnya Order</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">

                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="form-group col-sm-3">
                            <button>Tambah</button>
                        </div>
                    </form>

                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Invoice</th>
                                <th class="hidden-480">Tgl Mulai</th>
                                <th class="hidden-480">Tgl Selesai</th>
                                <th>Total</th>
                                <th>Detail</th>
                                <!-- <th>Harga Jual</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Update
                                    </th>
                                    <th class="hidden-480">Status</th>
                                    <th class="hidden-480">Edit</th>
                                    <th class="hidden-480">Hapus</th> -->
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.resume order -->
</div><!-- /.row -->
</div><!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <!-- div.dataTables_borderWrap -->
        <div style="display: none;">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                
            </table>
        </div>
    </div>
</div>
@endsection

<!-- script -->
@push('script')
<!-- none -->
<!-- page specific plugin scripts -->

@endpush


<!-- inline_scripts -->
@push('inline_scripts')
<!-- none -->

@endpush